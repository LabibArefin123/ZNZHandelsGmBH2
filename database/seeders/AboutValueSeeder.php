<?php

namespace Database\Seeders;

use App\Models\AboutValue;
use Illuminate\Database\Seeder;

class AboutValueSeeder extends Seeder
{
    public function run(): void
    {
        AboutValue::updateOrCreate(
            ['id' => 1],
            [
                'small_heading' => 'WHAT DRIVES US',
                'title_before_emphasis' => 'The principles behind',
                'title_emphasis' => 'every partnership.',
                'description' => 'We believe sustainable business relationships are created through trust, consistency and a genuine commitment to customer needs.',
            ]
        );
    }
}
