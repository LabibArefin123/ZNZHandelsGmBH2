<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // WelcomeCategorySeeder::class,
            BannerSeeder::class,
            // PartnerSeeder::class,
            // NewsSeeder::class,
            // AboutStorySeeder::class,
            // AboutValueSeeder::class,
            // AboutValueItemSeeder::class,
            // AboutGlobalTradeSeeder::class,
            // AboutGlobalCountrySeeder::class,
            // AboutQualitySeeder::class,
            // BlogSeeder::class,
            // ProductCategorySeeder::class,
            // ProductBrandSeeder::class,
            // ProductSizeSeeder::class,
            // ProductSeeder::class,
        ]);
    }
}
