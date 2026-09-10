<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->delete();
        Product::create([
            'name' => 'Readymade Garment 1',
            'slug' => 'readymade-garment-1',
            'category' => 'men',
            'brand' => 'Gucci',
            'sku' => 'ZNZ-MEN-001',
            'short_description' => 'Premium ready-to-wear garment crafted for everyday elegance.',
            'description' => 'A refined ready-to-wear garment designed for customers who appreciate clean styling, dependable quality and comfortable everyday wear. Carefully selected for the ZNZ Handels GmbH collection.',
            'price' => 67.24,
            'old_price' => 79.90,
            'currency' => 'USD',
            'image' => 'images/product_page/readymate garment 1.jpg',
            'images' => [
                'images/product_page/readymate garment 1.jpg',
                'images/product_page/readymate garment 2.jpg',
                'images/product_page/readymate garment 3.jpg',
                'images/product_page/readymate garment 4.jpg'
            ],
            'sizes' => ['S', 'M', 'L', 'XL'],
            'colors' => ['Black', 'White', 'Beige'],
            'tags' => ['product', 'fashion', 'clothing'],
            'material' => 'Premium Cotton Blend',
            'origin' => 'European Collection',
            'fit' => 'Regular Fit',
            'availability' => 'In Stock',
            'stock' => 45,
            'rating' => 4.8,
            'review_count' => 24,
            'badge' => 'Featured',
            'is_featured' => true,
            'is_active' => true
        ]);
        Product::create([
            'name' => 'Readymade Garment 2',
            'slug' => 'readymade-garment-2',
            'category' => 'women',
            'brand' => 'Chanel',
            'sku' => 'ZNZ-WOM-002',
            'short_description' => 'A refined silhouette combining comfort with contemporary style.',
            'description' => 'A sophisticated fashion piece created with a modern silhouette and comfortable construction. An excellent choice for customers looking for an elegant addition to their wardrobe.',
            'price' => 43.48,
            'old_price' => 52.90,
            'currency' => 'USD',
            'image' => 'images/product_page/readymate garment 2.jpg',
            'images' => [
                'images/product_page/readymate garment 2.jpg',
                'images/product_page/readymate garment 1.jpg',
                'images/product_page/readymate garment 3.jpg',
                'images/product_page/readymate garment 4.jpg'
            ],
            'sizes' => ['XS', 'S', 'M'],
            'colors' => ['Cream', 'Black', 'Rose'],
            'tags' => ['product', 'fashion', 'clothing'],
            'material' => 'Soft Premium Fabric',
            'origin' => 'European Collection',
            'fit' => 'Contemporary Fit',
            'availability' => 'In Stock',
            'stock' => 32,
            'rating' => 4.7,
            'review_count' => 18,
            'badge' => 'New',
            'is_featured' => true,
            'is_active' => true
        ]);
        Product::create([
            'name' => 'Readymade Garment 3',
            'slug' => 'readymade-garment-3',
            'category' => 'bags',
            'brand' => 'Louis Vuitton',
            'sku' => 'ZNZ-BAG-003',
            'short_description' => 'A versatile fashion piece selected for modern premium collections.',
            'description' => 'A versatile premium fashion item selected for customers who value contemporary design, practicality and a refined appearance.',
            'price' => 60.90,
            'old_price' => 72.90,
            'currency' => 'USD',
            'image' => 'images/product_page/readymate garment 3.jpg',
            'images' => [
                'images/product_page/readymate garment 3.jpg',
                'images/product_page/readymate garment 1.jpg',
                'images/product_page/readymate garment 2.jpg',
                'images/product_page/readymate garment 4.jpg'
            ],
            'sizes' => ['M', 'L', 'XL'],
            'colors' => ['Brown', 'Black', 'Tan'],
            'tags' => ['product', 'bags', 'fashion', 'accessories'],
            'material' => 'Premium Synthetic Leather',
            'origin' => 'European Collection',
            'fit' => 'Standard',
            'availability' => 'In Stock',
            'stock' => 21,
            'rating' => 4.9,
            'review_count' => 31,
            'badge' => 'Popular',
            'is_featured' => true,
            'is_active' => true
        ]);
        Product::create([
            'name' => 'Readymade Garment 4',
            'slug' => 'readymade-garment-4',
            'category' => 'clothing',
            'brand' => 'Hermès',
            'sku' => 'ZNZ-CLT-004',
            'short_description' => 'A premium wardrobe essential with a polished contemporary finish.',
            'description' => 'A carefully selected wardrobe essential featuring a polished contemporary finish. Designed for customers who want premium styling with dependable everyday versatility.',
            'price' => 60.90,
            'old_price' => 74.90,
            'currency' => 'USD',
            'image' => 'images/product_page/readymate garment 4.jpg',
            'images' => [
                'images/product_page/readymate garment 4.jpg',
                'images/product_page/readymate garment 1.jpg',
                'images/product_page/readymate garment 2.jpg',
                'images/product_page/readymate garment 3.jpg'
            ],
            'sizes' => ['L', 'XL', '2XL'],
            'colors' => ['Navy', 'Black', 'Grey'],
            'tags' => ['product', 'fashion', 'clothing'],
            'material' => 'Premium Cotton',
            'origin' => 'European Collection',
            'fit' => 'Regular Fit',
            'availability' => 'Limited Stock',
            'stock' => 9,
            'rating' => 4.8,
            'review_count' => 16,
            'badge' => 'Limited',
            'is_featured' => false,
            'is_active' => true
        ]);
    }
}
