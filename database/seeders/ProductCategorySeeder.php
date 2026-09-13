<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Men',
            'Women',
            'Bags',
            'Clothing',
            'Shoes',
            'Accessories',
            'Kids',
            'Lifestyle',
        ];

        foreach ($categories as $category) {
            ProductCategory::updateOrCreate(
                ['slug' => Str::slug($category)],
                [
                    'name' => $category,
                    'description' => "Explore our {$category} collection.",
                    'is_active' => true,
                ]
            );
        }
    }
}
