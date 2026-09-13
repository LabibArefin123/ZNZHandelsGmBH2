<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // ProductSeeder::class,
            // BlogSeeder::class,
            ProductCategorySeeder::class,
            ProductBrandSeeder::class,
            ProductSizeSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
