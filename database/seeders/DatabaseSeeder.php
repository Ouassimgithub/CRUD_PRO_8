<?php

namespace Database\Seeders;
use App\Models\Article;
use App\Models\Client;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $this->call( TypeArticleTableSeeder::class);
        $this->call( StatutLocationSeeder::class);
        $this->call( RoleTableSeeder::class);
        $this->call( PermissionTableSeeder::class);
        $this->call( DureeLocationTableSeeder::class);
        $this->call( UserSeeder::class);


        Article::factory(10)->create();
        Client::factory(10)->create();

        

      
      
        
    }
}
