<?php

namespace Database\Seeders;

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
//         \App\Models\User::factory(3)->create();
//         \App\Models\Category::factory(3)->create();
         \App\Models\Post::factory(10)->create();
    }
}
