<?php

namespace Database\Seeders;

use App\Models\AboutValue;
use App\Models\AboutValueItem;
use Illuminate\Database\Seeder;

class AboutValueItemSeeder extends Seeder
{
    public function run(): void
    {
        $aboutValue = AboutValue::find(1);

        if (!$aboutValue) {
            return;
        }

        $items = [
            [
                'number' => '01',
                'icon' => 'bi bi-gem',
                'title' => 'Quality First',
                'description' => 'We focus on product quality and carefully selected production partners to maintain dependable standards.',
                'sort_order' => 1,
            ],
            [
                'number' => '02',
                'icon' => 'bi bi-globe2',
                'title' => 'Global Reach',
                'description' => 'Our sourcing network connects customers with capabilities across multiple important textile markets.',
                'sort_order' => 2,
            ],
            [
                'number' => '03',
                'icon' => 'bi bi-people',
                'title' => 'Long-Term Trust',
                'description' => 'We value lasting relationships and aim to become a dependable extension of our customers\' supply chain.',
                'sort_order' => 3,
            ],
            [
                'number' => '04',
                'icon' => 'bi bi-check2-circle',
                'title' => 'Reliable Service',
                'description' => 'From sourcing to quality control, we remain focused on clear communication and reliable execution.',
                'sort_order' => 4,
            ],
        ];

        foreach ($items as $item) {
            AboutValueItem::updateOrCreate(
                [
                    'about_value_id' => $aboutValue->id,
                    'number' => $item['number'],
                ],
                $item
            );
        }
    }
}
