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
        'description' => $faker->words(10,true),
        'status_id' => rand(1,4),
    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker) {
    return [
        'path' => '/images/tanks/tank' . rand(1, 4) . '.jpg',
    ];
});
