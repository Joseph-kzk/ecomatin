<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'auteur' => $faker->name,
        'titre' => $faker->title,
        'surtitre' => $faker->companySuffix,
        'chapeau' => $faker->title,
        'reseau' => $faker->company,
        'type' => $faker->randomElement(['magazine','bande dessine','anime', 'journal']),
        'rubrique' => $faker->name,
        'image' => null,
        'legende' => $faker->title,
        'tag' => $faker->name,
        'texte' => $faker->sentence,
        'idUser' => factory(User::class)->create()->id
    ];
});
