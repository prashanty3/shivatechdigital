<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_badge',
        'page_title',
        'page_subtitle',
        'services_offered',
        'client_satisfaction',
        'support_availability',
        'slug',
        'section_badge',
        'title',
        'description',
        'image',
        'button_text',
        'button_url',
        'cta_title',
        'cta_subtitle',
        'cta_primary_button_text',
        'cta_primary_button_url',
        'cta_secondary_button_text',
        'cta_secondary_button_url',
        'order',
        'is_active',
        'show_on_homepage',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'show_on_homepage' => 'boolean',
    ];

    public function features()
    {
        return $this->hasMany(ServiceFeature::class)->orderBy('order');
    }

    public function technologies()
    {
        return $this->hasMany(ServiceTechnology::class)->orderBy('order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}