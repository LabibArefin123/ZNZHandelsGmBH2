<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_category_id', 'product_brand_id', 'name', 'slug', 'sku', 'short_description', 'description', 'price', 'old_price', 'currency', 'image', 'images', 'colors', 'tags', 'material', 'origin', 'fit', 'availability', 'stock', 'rating', 'review_count', 'badge', 'is_featured', 'is_active',];
    protected $casts = ['images' => 'array', 'colors' => 'array', 'tags' => 'array', 'price' => 'decimal:2', 'old_price' => 'decimal:2', 'rating' => 'decimal:2', 'is_featured' => 'boolean', 'is_active' => 'boolean',];
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
    public function brand()
    {
        return $this->belongsTo(ProductBrand::class, 'product_brand_id');
    }
    public function sizes()
    {
        return $this->belongsToMany(ProductSize::class, 'product_product_size');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
