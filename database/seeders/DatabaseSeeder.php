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
         \App\Models\User::factory(50)->create();
         \App\Models\Topic::create(['name' => 'Featured Sites', 'slug' => 'featured']);
         \App\Models\Topic::create(['name' => 'Useful Links', 'slug' => 'links']);
         \App\Models\Topic::create(['name' => 'Guides & Tutorials', 'slug' => 'tutorials']);
         \App\Models\Post::factory(50)->create();


    }
}
