<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'auteur' => $faker->firstName,
        'titre' => $faker->title(6),
        'surtitre' => $faker->companySuffix,
        'chapeau' => $faker->title(8),
        'reseau' => $faker->company,
        'type' => $faker->randomElement(['magazine','bande dessine','anime', 'journal']),
        'rubrique' => $faker->firstName,
        'image' => null,
        'legende' => $faker->title(7),
        'tag' => $faker->lastName,
        'texte' => $faker->sentence(5),
        'idUser' => factory(User::class)->create()->id
    ];
});
