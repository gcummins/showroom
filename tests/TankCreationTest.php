<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TankCreationTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testThatATankIsCreated()
    {
        $author = factory(App\User::class)->create();

        $tank = factory(App\Tank::class)->make();

        $this
            ->actingAs($author)
            ->visit('/tank/create')
            ->submitForm('Create Tank', $tank->toArray())
            ->seeInDatabase('tanks', $tank->toArray());
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testThatTankDetailsAreViewable()
    {
        $tank = factory(App\Tank::class)->create();

        $this
            ->visit('/tank/' . $tank->id)
            ->see($tank->year . " " . $tank->make . " " . $tank->capacity);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testThatATankAppearsInTheTankCategory()
    {
        $author = factory(App\User::class)->create();

        $tank = factory(App\Tank::class)->create();

        $this
            ->visit('/tanks')
            ->see($tank->year . " " . $tank->make . " " . $tank->capacity);
    }

    public function testThatAPhotoCanBeAddedToATank()
    {
        $tank = factory(App\Tank::class)->create();
        $photo = factory(App\Photo::class)->make();
        $tank->photos()->save($photo);

        $this->seeInDatabase('photos', ['tank_id' => $tank->id]);
        $this->assertTrue($tank->photos->contains($photo->id));
    }

    public function testThatATankCanBeCreatedWithAPhoto()
    {
        //
    }

    public function testThatATankWithAPhotoShowsThePhotoOnDetailPage()
    {
        $tank = factory(App\Tank::class)->create();
        $photo = factory(App\Photo::class)->make();
        $tank->photos()->save($photo);

        $this
            ->visit('/tank/' . $tank->id)
            ->see($photo->path);
    }

    public function testThatATankWithTwoPhotosShowsBothPhotosOnDetailPage()
    {
        $path1 = "photopath1.jpg";
        $path2 = "photopath2.jpg";

        $tank = factory(App\Tank::class)->create();
        $tank->photos()->create(['path' => $path1]);
        $tank->photos()->create(['path' => $path2]);

        $this
            ->visit('/tank/' . $tank->id)
            ->see($path1)
            ->see($path2);
    }
}
