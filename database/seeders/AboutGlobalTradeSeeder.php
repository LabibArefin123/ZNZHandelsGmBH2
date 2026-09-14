<?php

namespace Database\Seeders;

use App\Models\AboutGlobalTrade;
use Illuminate\Database\Seeder;

class AboutGlobalTradeSeeder extends Seeder
{
    public function run(): void
    {
        AboutGlobalTrade::updateOrCreate(
            ['id' => 1],
            [
                'small_heading' => 'OUR GLOBAL NETWORK',
                'title_before_emphasis' => 'Sourcing without',
                'title_emphasis' => 'boundaries.',
                'description' => 'We work with production and sourcing partners in key textile markets, helping customers access the right products, capabilities and expertise.',
            ]
        );
    }
}
