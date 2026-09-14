<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutGlobalTrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'small_heading',
        'title_before_emphasis',
        'title_emphasis',
        'description',
    ];

    public function countries()
    {
        return $this->hasMany(AboutGlobalCountry::class)->orderBy('sort_order');
    }
}
