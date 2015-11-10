<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Tank::class, function (Faker\Generator $faker) {
    return [
        'status_id' => rand(1,4),

        'year'             => $faker->year,
        'make'             => $faker->words(2,true),
        'model'            => $faker->words(2,true),
        'dotCode'          => $faker->word,
        'capacity'         => $faker->numerify('#### L'),
        'compartments'     => $faker->words(2,true),
        'bulkheads'        => $faker->words(2,true),
        'compartmentSizes' => $faker->words(2,true),
        'pumps'            => $faker->words(2,true),
        'pto'              => $faker->words(2,true),
        'meters'           => $faker->words(2,true),
        'spitTanks'        => $faker->words(2,true),
        'hoseReels'        => $faker->words(2,true),
        'deliveryHoses'    => $faker->words(2,true),
        'nozzles'          => $faker->words(2,true),
        'dryBreakManifold' => $faker->words(2,true),
        'bottomLoad'       => $faker->words(2,true),
        'vk'               => $faker->words(2,true),
        'ip'               => $faker->words(2,true),
        'comments'         => $faker->paragraph(3,true),

    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker) {
    return [
        'path' => '/images/tanks/tank' . rand(1, 4) . '.jpg',
    ];
});
