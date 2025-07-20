<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_search_placeholder',
        'about_title',
        'about_content',
        'about_journey_content',
        'about_image',
        'features_title',
        'features_subtitle',
        'feature1_title',
        'feature1_description',
        'feature1_icon',
        'feature2_title',
        'feature2_description',
        'feature2_icon',
        'feature3_title',
        'feature3_description',
        'feature3_icon',
        'feature4_title',
        'feature4_description',
        'feature4_icon',
        'services_title',
        'service1_title',
        'service1_description',
        'service1_icon',
        'service2_title',
        'service2_description',
        'service2_icon',
        'service3_title',
        'service3_description',
        'service3_icon',
        'find_home_title',
        'find_home_description',
        'find_home_image',
        'find_home_feature1_title',
        'find_home_feature1_description',
        'find_home_feature2_title',
        'find_home_feature2_description',
        'find_home_feature3_title',
        'find_home_feature3_description',
        'buy_properties_count',
        'sell_properties_count',
        'all_properties_count',
        'agents_count',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'buy_properties_count' => 'integer',
        'sell_properties_count' => 'integer',
        'all_properties_count' => 'integer',
        'agents_count' => 'integer',
    ];

    /**
     * Scope to get active main page content
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
