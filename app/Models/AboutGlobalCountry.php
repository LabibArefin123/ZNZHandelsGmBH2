<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutGlobalCountry extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_global_trade_id',
        'number',
        'icon',
        'country',
        'description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function globalTrade()
    {
        return $this->belongsTo(AboutGlobalTrade::class, 'about_global_trade_id');
    }
}
