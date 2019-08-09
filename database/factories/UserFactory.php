<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => \Str::random(10),
        'rue'         => $faker->streetAddress,
        'npa'         => $faker->postcode,
        'ville'       => $faker->city,
        'telephone'   => $faker->phoneNumber,
        'fax'         => $faker->phoneNumber,
        'canton_id'   => \Arr::random(range(1,26)),
    ];
});

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'semaines'    => '4 semaines',
        'periode'     => 'Un seul bloc',
        'pourcentage' => '100%'
    ];
});

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence(4),
        'description' => $faker->text,
        'valid_until' => \Carbon\Carbon::now()->addWeek(2),
        'type_id'    => \Arr::random([1,2,3]),
        'remunere'   => 1,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];
});