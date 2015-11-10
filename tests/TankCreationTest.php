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
        $tank = factory(App\Tank::class)->create();

        $this->visit('/')->see($tank->description);
    }
}
