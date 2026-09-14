<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // BlogSeeder::class,
            // WelcomeCategorySeeder::class,
            // AboutStorySeeder::class,
            // AboutValueSeeder::class,
            // AboutValueItemSeeder::class,
            AboutGlobalTradeSeeder::class,
            AboutGlobalCountrySeeder::class,
            AboutQualitySeeder::class,
            // ProductCategorySeeder::class,
            // ProductBrandSeeder::class,
            // ProductSizeSeeder::class,
            // ProductSeeder::class,
        ]);
    }
}
