<?php

namespace Database\Seeders;

use App\Models\WelcomeCategory;
use Illuminate\Database\Seeder;

class WelcomeCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Garments',
                'slug' => 'garments',
                'image' => 'images/welcome_page/category_part/category_1.jpg',
                'featured_image' => 'images/readymate garments.jpg',
                'label' => 'Featured Collection',
                'description' => 'Versatile garment collections developed for international markets and diverse customer needs.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Footwear',
                'slug' => 'footwear',
                'image' => 'images/welcome_page/category_part/category_2.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_2.jpg',
                'label' => 'Featured Collection',
                'description' => 'Contemporary footwear collections combining commercial appeal, comfort and dependable quality.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Sports Wear',
                'slug' => 'sports-wear',
                'image' => 'images/welcome_page/category_part/category_3.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_3.jpg',
                'label' => 'Featured Collection',
                'description' => 'Performance-focused sportswear designed for active lifestyles and modern retail collections.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Leather Accessories',
                'slug' => 'leather-accessories',
                'image' => 'images/welcome_page/category_part/category_4.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_4.jpg',
                'label' => 'Featured Collection',
                'description' => 'Refined leather accessories developed with attention to materials, finishing and functionality.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Casual Wear',
                'slug' => 'casual-wear',
                'image' => 'images/welcome_page/category_part/category_5.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_5.jpg',
                'label' => 'Featured Collection',
                'description' => 'Comfortable and versatile casualwear collections created for everyday modern wardrobes.',
                'sort_order' => 5,
            ],
            [
                'name' => 'Inner Wear',
                'slug' => 'inner-wear',
                'image' => 'images/welcome_page/category_part/category_6.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_6.jpg',
                'label' => 'Featured Collection',
                'description' => 'Essential innerwear collections focused on comfort, fit, quality and reliable production.',
                'sort_order' => 6,
            ],
            [
                'name' => 'Winter Wear',
                'slug' => 'winter-wear',
                'image' => 'images/welcome_page/category_part/category_7.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_7.jpg',
                'label' => 'Featured Collection',
                'description' => 'Seasonal winter collections developed for warmth, practicality and contemporary styling.',
                'sort_order' => 7,
            ],
            [
                'name' => 'Summer Wear',
                'slug' => 'summer-wear',
                'image' => 'images/welcome_page/category_part/category_8.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_8.jpg',
                'label' => 'Featured Collection',
                'description' => 'Lightweight summer collections designed around comfort, breathability and seasonal trends.',
                'sort_order' => 8,
            ],
            [
                'name' => 'Ethnic Wear',
                'slug' => 'ethnic-wear',
                'image' => 'images/welcome_page/category_part/category_9.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_9.jpg',
                'label' => 'Featured Collection',
                'description' => 'Distinctive ethnicwear collections combining traditional influences with contemporary design.',
                'sort_order' => 9,
            ],
            [
                'name' => 'Kids Wear',
                'slug' => 'kids-wear',
                'image' => 'images/welcome_page/category_part/category_10.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_10.jpg',
                'label' => 'Featured Collection',
                'description' => 'Comfortable and practical childrenswear collections developed for everyday use and seasonal demand.',
                'sort_order' => 10,
            ],
            [
                'name' => 'Pregnancy Wear',
                'slug' => 'pregnancy-wear',
                'image' => 'images/welcome_page/category_part/category_11.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_11.jpg',
                'label' => 'Featured Collection',
                'description' => 'Thoughtfully designed maternity collections prioritising comfort, flexibility and everyday wearability.',
                'sort_order' => 11,
            ],
            [
                'name' => 'Formal Wear',
                'slug' => 'formal-wear',
                'image' => 'images/welcome_page/category_part/category_12.jpg',
                'featured_image' => 'images/welcome_page/category_part/category_12.jpg',
                'label' => 'Featured Collection',
                'description' => 'Polished formalwear collections designed for professional, occasion and premium retail markets.',
                'sort_order' => 12,
            ],
        ];

        foreach ($categories as $category) {
            WelcomeCategory::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
