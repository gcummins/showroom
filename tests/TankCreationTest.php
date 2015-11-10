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
    public function testThatATankCanBeCreated()
    {
        $author = factory(App\User::class)->create();
        
        $tank = factory(App\Tank::class)->make();

        $this
            ->actingAs($author)
            ->visit('/tanks/create')
            ->submitForm('Create Tank', $tank->toArray())
            ->visit('/tanks')
            ->see($tank->description);
    }
}
