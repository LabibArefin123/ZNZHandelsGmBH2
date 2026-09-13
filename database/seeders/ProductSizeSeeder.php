<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSizeSeeder extends Seeder
{
    public function run(): void
    {
        $sizes = [
            'XS',
            'S',
            'M',
            'L',
            'XL',
            '2XL',
            '3XL',
            '4XL',
        ];

        foreach ($sizes as $size) {
            ProductSize::updateOrCreate(
                ['slug' => Str::slug($size)],
                [
                    'name' => $size,
                    'is_active' => true,
                ]
            );
        }
    }
}
