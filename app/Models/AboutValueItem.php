<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutValueItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_value_id',
        'number',
        'icon',
        'title',
        'description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function aboutValue()
    {
        return $this->belongsTo(AboutValue::class);
    }
}
