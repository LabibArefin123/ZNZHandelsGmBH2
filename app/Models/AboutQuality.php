<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutQuality extends Model
{
    use HasFactory;

    protected $fillable = [
        'small_heading',
        'title_before_emphasis',
        'title_emphasis',
        'paragraph_one',
        'paragraph_two',
        'icon',
        'stat_title',
        'stat_description',
    ];
}
