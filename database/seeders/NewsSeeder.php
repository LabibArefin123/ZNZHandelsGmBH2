<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $news = [
            [
                'category' => 'Industry',
                'image' => 'images/news_part/news-1.png',
                'image_alt' => 'Textile manufacturing',
                'published_at' => '2026-02-16',
                'title' => 'Innovation in Modern Textile Manufacturing',
                'description' => 'Exploring the latest developments shaping efficient and responsible garment production.',
                'slug' => Str::slug('Innovation in Modern Textile Manufacturing'),
                'is_active' => true,
            ],
            [
                'category' => 'Sustainability',
                'image' => 'images/news_part/news-2.png',
                'image_alt' => 'Sustainable fashion',
                'published_at' => '2026-02-21',
                'title' => 'The Future of Sustainable Fashion',
                'description' => 'How responsible sourcing and better materials are transforming the global fashion industry.',
                'slug' => Str::slug('The Future of Sustainable Fashion'),
                'is_active' => true,
            ],
            [
                'category' => 'Quality',
                'image' => 'images/news_part/news-3.png',
                'image_alt' => 'Textile quality control',
                'published_at' => '2026-02-28',
                'title' => 'Quality Control Across Global Supply Chains',
                'description' => 'A closer look at the standards and processes behind reliable textile production.',
                'slug' => Str::slug('Quality Control Across Global Supply Chains'),
                'is_active' => true,
            ],
        ];

        foreach ($news as $item) {
            News::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
