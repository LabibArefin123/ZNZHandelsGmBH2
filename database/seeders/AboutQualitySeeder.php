<?php

namespace Database\Seeders;

use App\Models\AboutQuality;
use Illuminate\Database\Seeder;

class AboutQualitySeeder extends Seeder
{
    public function run(): void
    {
        AboutQuality::updateOrCreate(
            ['id' => 1],
            [
                'small_heading' => 'QUALITY CONTROL',
                'title_before_emphasis' => 'Confidence in every',
                'title_emphasis' => 'detail.',
                'paragraph_one' => 'Quality control is an important part of our sourcing process. We work with our own quality-control approach as well as external inspection institutes when required.',
                'paragraph_two' => 'This gives our customers an additional level of confidence from product development through production and delivery.',
                'icon' => 'bi bi-shield-check',
                'stat_title' => 'QUALITY',
                'stat_description' => 'Focused sourcing and inspection',
            ]
        );
    }
}
