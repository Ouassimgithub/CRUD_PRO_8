<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "nom" =>"AMRI",
            "prenom" => "Ouassim",
            "sex" => "H",
            "telephone1" => "0666490834",
            "telephone2" => "0621884179",
            "pieceIdentite" => "CNI",
            "numeroPieceIdentite" =>"CD234412",
            "email" => "ouassim.amri.11@gmail.com",
            "password" => Hash::make('password'),
            "photo" => "https://picsum.photos/200/300?grayscale",
        ]);
        
    }
}
