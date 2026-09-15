<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'name' => 'amfori',
                'logo' => 'images/amfori.png',
                'logo_alt' => 'amfori',
                'website_url' => 'https://event.amfori.org/',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Google',
                'logo' => 'images/partner_part/Google.png',
                'logo_alt' => 'Google',
                'website_url' => 'https://labib.work/',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Google',
                'logo' => 'images/partner_part/Google.png',
                'logo_alt' => 'Google',
                'website_url' => 'https://labib.work/',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Google',
                'logo' => 'images/partner_part/Google.png',
                'logo_alt' => 'Google',
                'website_url' => 'https://labib.work/',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'BSCI',
                'logo' => 'images/bsci.png',
                'logo_alt' => 'BSCI',
                'website_url' => 'https://www.textilestandards.com/standards/43-bsci',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(
                [
                    'sort_order' => $partner['sort_order'],
                ],
                $partner
            );
        }
    }
}
