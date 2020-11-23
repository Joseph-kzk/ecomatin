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
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'number' => $faker->unique()->phoneNumber,
        "role" => $faker->randomElement(['redacteur_en_chef','Journaliste','Coordonnateur Journal tabloïd','Coordonnateur Journal en ligne','Coordonnateur des rédactions','webmaster','infographe']),
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt("password"),
    ];
});

$factory->state(User::class, 'redacteur_en_chef', [
    'role' => 'redacteur_en_chef'
]);

$factory->state(User::class, 'Journaliste', [
    'role' => 'Journaliste'
]);

$factory->state(User::class, 'Coordonnateur Journal tabloïd', [
    'role' => 'Coordonnateur Journal tabloïd'
]);
$factory->state(User::class, 'Coordonnateur des rédactions', [
    'role' => 'Coordonnateur des rédactions'
]);

$factory->state(User::class, 'webmaster', [
    'role' => 'webmaster'
]);
$factory->state(User::class, 'infographe', [
    'role' => 'infographe'
]);
$factory->state(User::class, 'Coordonnateur Journal en ligne', [
    'role' => 'Coordonnateur Journal en ligne'
]);

