<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Utilisateur;
use Faker\Generator as Faker;

$factory->define(Utilisateur::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'number' => $faker->unique()->phoneNumber,
        "role" => $faker->randomElements(['redacteur_en_chef','journaliste','Coordonnateur Journal tabloïd','Coordonnateur Journal en ligne','Coordonnateur des rédactions']),
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt("password"),
        'profile_image' => null,
    ];
});

$factory->state(Utilisateur::class, 'redacteur_en_chef', [
    'role' => 'redacteur_en_chef'
]);

$factory->state(Utilisateur::class, 'journaliste', [
    'role' => 'journaliste'
]);

$factory->state(Utilisateur::class, 'Coordonnateur Journal tabloïd', [
    'role' => 'Coordonnateur Journal tabloïd'
]);
$factory->state(Utilisateur::class, 'Coordonnateur des rédactions', [
    'role' => 'Coordonnateur des rédactions'
]);
