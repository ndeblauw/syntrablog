<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5,true),
            'content' => fake()->paragraphs(3,true),
            'is_published' => fake()->boolean(75),
            'created_at' => fake()->dateTimeBetween('-3 months'),
        ];
    }
}
