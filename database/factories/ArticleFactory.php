<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [

        'auteur' => $faker->name,
        'titre' => $faker->title,
        'surtitre' => $faker->companySuffix,
        'chapeau' => $faker->title,
        'reseau' => $faker->company,
        'type' => $faker->randomElements(['magazine','bande dessine','anime', 'journal']),
        'rubrique' => $faker->name,
        'image' => null,
        'legende' => $faker->title,
        'tag' => $faker->name,
        'texte' => $faker->sentences
    ];
});
