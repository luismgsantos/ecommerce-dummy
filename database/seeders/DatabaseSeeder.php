<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory()
            ->count(10)
            ->create();

        Subcategory::factory()
            ->count(10)
            ->create();

        Product::factory()
            ->count(100)
            ->create();

        $this->call(ProductsCategoriesTableSeeder::class);
    }
}
