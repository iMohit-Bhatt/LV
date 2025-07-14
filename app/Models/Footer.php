<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'email',
        'instagram_url',
        'twitter_url',
        'facebook_url',
        'linkedin_url',
        'pinterest_url',
        'dribbble_url',
        'copyright_text',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
