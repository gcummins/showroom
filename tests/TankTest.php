<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TankTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testThatTheTankSectionIsShown()
    {
        $this->visit('/')->see('Tanks');
    }

    public function testThatATankIsShown()
    {
        $tank = factory(App\Tank::class)->create();

        $this->visit('/')->see($tank->description)->notSee($tank->description);
    }
}
