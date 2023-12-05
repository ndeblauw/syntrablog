<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Category::factory(10)->create();
        $posts = \App\Models\Post::factory(20)->create();

        $posts->each(function ($post) {
            $categories = \App\Models\Category::inRandomOrder()->take(2)->pluck('id');
            $post->categories()->sync($categories);
        });

        User::create([
                "name" => "Nico Deblauwe",
                "email" => "nico@deblauwe.be",
                "password" => '$2y$12$e1NWKDPLUagB9dfkgCIX5.lbMJuV9wfFXp9Cb/IKTwYyUr4y1U0Vi',
                "is_admin" => 1,
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
