<?php

use Illuminate\Database\Seeder;

class TankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->seedTanksWithNoPhoto(5);
        $this->seedTanksWithOnePhoto(5);
        $this->seedTanksWithTwoPhotos(5);
    }

    protected function seedTanksWithNoPhoto($quantity = 1)
    {
        factory(App\Tank::class, $quantity)->create();
    }

    protected function seedTanksWithOnePhoto($quantity = 1)
    {
        factory(App\Tank::class, $quantity)->create()
            ->each( function($tank)
            {
                $tank->photos()->save(factory(App\Photo::class)->make());
            }
        );
    }

    protected function seedTanksWithTwoPhotos($quantity = 1)
    {
        factory(App\Tank::class, $quantity)->create()
            ->each( function($tank)
            {
                $tank->photos()->saveMany(factory(App\Photo::class, 2)->make());
            }
        );
    }
}
