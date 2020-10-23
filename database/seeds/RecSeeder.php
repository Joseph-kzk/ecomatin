<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class RecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name'=>"BONTSEBE",
            'lastname'=>"Serges",
            'number'=>"698310165",
            "role" => "Rédacteur_en_chef",
            'email'=>"admin@gmail.com",
            'password' => bcrypt("password"),
            "created_at" => now()
        ]);

    }
}
