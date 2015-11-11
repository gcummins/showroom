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
        $author = factory(App\User::class)->create();

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
}
