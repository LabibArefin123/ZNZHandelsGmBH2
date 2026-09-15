<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $banners = [
            [
                'subtitle' => 'Summer Collection',
                'title' => 'Fall - Winter Collections 2030',
                'description' => 'A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.',
                'image' => 'images/hero/hero-1.jpg',
                'image_alt' => 'Fall Winter Collection',
                'button_text' => 'Shop now',
                'button_url' => '#',
                'facebook_url' => '#',
                'twitter_url' => '#',
                'pinterest_url' => '#',
                'instagram_url' => '#',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'subtitle' => 'Summer Collection',
                'title' => 'Fall - Winter Collections 2030',
                'description' => 'A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.',
                'image' => 'images/hero/hero-2.jpg',
                'image_alt' => 'Fall Winter Collection',
                'button_text' => 'Shop now',
                'button_url' => '#',
                'facebook_url' => '#',
                'twitter_url' => '#',
                'pinterest_url' => '#',
                'instagram_url' => '#',
                'sort_order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($banners as $banner) {
            Banner::updateOrCreate(
                ['sort_order' => $banner['sort_order']],
                $banner
            );
        }
    }
}
