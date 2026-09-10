<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'category',
        'brand',
        'sku',
        'short_description',
        'description',
        'price',
        'old_price',
        'currency',
        'image',
        'images',
        'sizes',
        'colors',
        'tags',
        'material',
        'origin',
        'fit',
        'availability',
        'stock',
        'rating',
        'review_count',
        'badge',
        'is_featured',
        'is_active'
    ];
    protected $casts = [
        'images' => 'array',
        'sizes' => 'array',
        'colors' => 'array',
        'tags' => 'array',
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'rating' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
