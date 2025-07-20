<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_content',
        'journey_content',
        'hero_title',
        'section_title',
        'section_description',
        'section_image',
        'feature1_title',
        'feature1_description',
        'feature2_title',
        'feature2_description',
        'feature3_title',
        'feature3_description',
        'buy_properties_count',
        'sell_properties_count',
        'all_properties_count',
        'agents_count',
        'vision_title',
        'vision_content',
        'mission_title',
        'mission_content',
        'values_title',
        'values_content',
        'gallery_image1',
        'gallery_image2',
        'gallery_image3',
        'gallery_buy_count',
        'gallery_sell_count',
        'gallery_all_count',
        'gallery_agents_count',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
