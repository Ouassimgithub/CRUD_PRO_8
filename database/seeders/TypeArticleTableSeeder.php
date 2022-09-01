<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_articles')->insert([
            ['nom' =>"Immobilier"] ,
            ['nom' => "Salle"],
            ['nom' =>"Appareil Electronique"] ,
            ['nom' => "Voiture"]
        ]);
    }
}
