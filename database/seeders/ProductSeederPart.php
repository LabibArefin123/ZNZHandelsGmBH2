<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProductSize;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

abstract class ProductSeederPart extends Seeder
{
    protected function createProduct(array $data): void
    {
        $category = ProductCategory::where('slug', Str::slug($data['category']))->firstOrFail();
        $brand = ProductBrand::where('slug', Str::slug($data['brand']))->firstOrFail();
        $product = Product::updateOrCreate(['slug' => Str::slug($data['name']),], ['product_category_id' => $category->id, 'product_brand_id' => $brand->id, 'name' => $data['name'], 'sku' => $data['sku'], 'short_description' => $data['short_description'], 'description' => $data['description'], 'price' => $data['price'], 'old_price' => $data['old_price'], 'currency' => 'USD', 'image' => $data['image'], 'images' => $data['images'], 'colors' => $data['colors'], 'tags' => $data['tags'], 'material' => $data['material'], 'origin' => $data['origin'], 'fit' => $data['fit'], 'availability' => $data['availability'], 'stock' => $data['stock'], 'rating' => $data['rating'], 'review_count' => $data['review_count'], 'badge' => $data['badge'], 'is_featured' => $data['is_featured'], 'is_active' => true,]);
        $sizeIds = ProductSize::whereIn('slug', collect($data['sizes'])->map(fn($size) => Str::slug($size))->toArray())->pluck('id');
        $product->sizes()->sync($sizeIds);
    }
    protected function image(int $number): string
    {
        $number = (($number - 1) % 4) + 1;
        return "images/product_page/readymate garment {$number}.jpg";
    }
    protected function images(int $number): array
    {
        $images = [];
        for ($i = 0; $i < 4; $i++) {
            $imageNumber = (($number - 1 + $i) % 4) + 1;
            $images[] = "images/product_page/readymate garment {$imageNumber}.jpg";
        }
        return $images;
    }
}
