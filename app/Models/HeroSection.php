<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeroSection extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'heading',
        'subheading',
        'background_image',
        'thumbnail_image',
        'background_class',
        'button_text',
        'button_link',
        'order',
    ];
}