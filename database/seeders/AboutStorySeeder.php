<?php

namespace Database\Seeders;

use App\Models\AboutStory;
use Illuminate\Database\Seeder;

class AboutStorySeeder extends Seeder
{
    public function run(): void
    {
        AboutStory::updateOrCreate(
            ['id' => 1],
            [
                'image' => 'images/about_page/about.png',
                'image_alt' => 'ZNZ Handels GmbH global textile sourcing',
                'caption_label' => 'GLOBAL SOURCING',
                'caption_title' => 'Quality beyond borders.',
                'small_heading' => 'OUR APPROACH',
                'title' => 'Built around people, products and possibility.',
                'paragraph_one' => 'In global trade, successful partnerships are built on more than competitive products. They require communication, transparency, consistency and an understanding of what customers expect.',
                'paragraph_two' => 'At ZNZ Handels GmbH, we work closely with production facilities and sourcing partners across China, Pakistan, Portugal and Bangladesh to create reliable supply opportunities for our customers.',
                'point_one_number' => '01',
                'point_one_title' => 'Understand',
                'point_one_description' => 'We listen carefully to your product and sourcing requirements.',
                'point_two_number' => '02',
                'point_two_title' => 'Source',
                'point_two_description' => 'We connect requirements with suitable production capabilities.',
                'point_three_number' => '03',
                'point_three_title' => 'Deliver',
                'point_three_description' => 'We stay focused on quality, communication and dependable execution.',
            ]
        );
    }
}
