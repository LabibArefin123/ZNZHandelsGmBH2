<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'image_alt',
        'caption_label',
        'caption_title',
        'small_heading',
        'title',
        'paragraph_one',
        'paragraph_two',
        'point_one_number',
        'point_one_title',
        'point_one_description',
        'point_two_number',
        'point_two_title',
        'point_two_description',
        'point_three_number',
        'point_three_title',
        'point_three_description',
    ];
}
