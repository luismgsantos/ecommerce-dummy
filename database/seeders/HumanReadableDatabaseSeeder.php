<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class HumanReadableDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Http::get('https://dummyjson.com/products?limit=100')->json()['products'];

        collect($products)->each(function ($product) {
            $category = Category::firstOrCreate([
                'name' => $product['category'],
                'slug' => Str::slug($product['category']),
                'image' => sprintf('https://picsum.photos/seed/%s/1280/720', $product['category']),
            ]);

            $subcategory = Subcategory::firstOrCreate([
                'name' => sprintf('sub of %s', $product['category']),
                'slug' => Str::slug(sprintf('subcategory of %s', $product['category'])),
                'image' => sprintf('https://picsum.photos/seed/%s/1280/720', $product['category']),
                'category_id' => $category->id,
            ]);

            Product::factory()->create([
                'name' => $product['title'],
                'slug' => Str::slug($product['title']),
                'model' => $product['brand'],
                'description' => $product['description'],
                'image' => $product['thumbnail'],
                'price' => $product['price'],
                'subcategory_id' => $subcategory->id,
                'category_id' => $category->id,
            ]);
        });
    }
}
