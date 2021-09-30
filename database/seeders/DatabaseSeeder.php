<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model; 
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
        
        $this->call(postsTableSeeder::class);
        $this->call(UsersTableSeeder::class);// \App\Models\User::factory(10)->create();
    }
}
