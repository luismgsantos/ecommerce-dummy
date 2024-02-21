<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->word(),
            'slug' => $this->faker->slug(),
            'image' => $this->faker->imageUrl(word: $name),
            'description' => $this->faker->sentence(),
            'icon' => $this->faker->emoji(),
            'category_id' => Category::factory(),
        ];
    }
}
