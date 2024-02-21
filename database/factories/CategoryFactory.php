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
            'name' => ucfirst($this->faker->word()),
            'slug' => $this->faker->slug(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'icon' => $this->faker->emoji(),
        ];
    }
}
