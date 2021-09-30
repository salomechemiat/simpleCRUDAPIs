<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\posts;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        posts::truncate();

        $faker = \Faker\Factory::create();

      
        for ($i = 0; $i < 50; $i++) {
            posts::create([
                'title' => $faker->sentence,
                'blog' => $faker->paragraph,
            ]);
        }
    }
}
