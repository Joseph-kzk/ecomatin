<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'number' => $faker->unique()->phoneNumber,
        "role" => $faker->randomElements(['redacteur_en_chef','journaliste','Coordonnateur Journal tabloïd','Coordonnateur Journal en ligne','Coordonnateur des rédactions']),
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt("password"),
    ];
});

$factory->state(User::class, 'redacteur_en_chef', [
    'role' => 'redacteur_en_chef'
]);

$factory->state(User::class, 'journaliste', [
    'role' => 'journaliste'
]);

$factory->state(User::class, 'Coordonnateur Journal tabloïd', [
    'role' => 'Coordonnateur Journal tabloïd'
]);
$factory->state(User::class, 'Coordonnateur des rédactions', [
    'role' => 'Coordonnateur des rédactions'
]);

