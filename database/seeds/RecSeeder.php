<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\User;
use \App\Article;


class RecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =User::query()->create([
            'name'=>"BONTSEBE",
            'lastname'=>"Serges",
            'number'=>"698310165",
            "role" => "Rédacteur_en_chef",
            'email'=>"admin@gmail.com",
            'password' => bcrypt("password"),
            "created_at" => now()
        ]);
        factory(User::class, 3)->states('redacteur_en_chef')->create();
        factory(User::class, 15)->states('Journaliste')->create();
        factory(User::class, 5)->states('Coordonnateur des rédactions')->create();
        factory(User::class, 5)->states('Coordonnateur Journal tabloïd')->create();
        factory(Article::class, 50)->create();
        if (app()->environment('local')) {
            factory(\App\Article::class,30)->create([
                'idUser' =>  $admin->id
            ]);
        }
    }
}
