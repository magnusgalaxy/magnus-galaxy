<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->realText(),
            'image' => 'https://source.unsplash.com/random/200x200?sig=1',
            'meta_title' => fake()->name(),
            'meta_description' => fake()->realText(),
            'meta_keywords' => fake()->realText(50),
        ];
    }
}
