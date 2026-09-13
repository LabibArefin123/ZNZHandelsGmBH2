<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductBrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            'Louis Vuitton',
            'Chanel',
            'Hermès',
            'Gucci',
            'Prada',
            'Burberry',
            'Dior',
            'Armani',
        ];

        foreach ($brands as $brand) {
            ProductBrand::updateOrCreate(
                ['slug' => Str::slug($brand)],
                [
                    'name' => $brand,
                    'description' => "Premium {$brand} collection.",
                    'logo' => null,
                    'is_active' => true,
                ]
            );
        }
    }
}
