<?php

namespace Database\Seeders;

use App\Models\AboutGlobalCountry;
use App\Models\AboutGlobalTrade;
use Illuminate\Database\Seeder;

class AboutGlobalCountrySeeder extends Seeder
{
    public function run(): void
    {
        $globalTrade = AboutGlobalTrade::find(1);

        if (!$globalTrade) {
            return;
        }

        $countries = [
            [
                'number' => '01',
                'icon' => 'bi bi-geo-alt',
                'country' => 'China',
                'description' => 'Extensive manufacturing and sourcing capabilities.',
                'sort_order' => 1,
            ],
            [
                'number' => '02',
                'icon' => 'bi bi-geo-alt',
                'country' => 'Pakistan',
                'description' => 'Strong textile production and product expertise.',
                'sort_order' => 2,
            ],
            [
                'number' => '03',
                'icon' => 'bi bi-geo-alt',
                'country' => 'Portugal',
                'description' => 'European textile and garment production capabilities.',
                'sort_order' => 3,
            ],
            [
                'number' => '04',
                'icon' => 'bi bi-geo-alt',
                'country' => 'Bangladesh',
                'description' => 'A globally recognized textile and garment manufacturing hub.',
                'sort_order' => 4,
            ],
        ];

        foreach ($countries as $country) {
            AboutGlobalCountry::updateOrCreate(
                [
                    'about_global_trade_id' => $globalTrade->id,
                    'number' => $country['number'],
                ],
                $country
            );
        }
    }
}
