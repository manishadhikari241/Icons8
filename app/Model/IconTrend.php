<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class IconTrend extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('category')
            ->saveSlugsTo('slug');
    }

    protected $fillable = ['category', 'description', 'image'];

    public function icons()
    {
        return $this->belongsToMany('App\Model\IconTrend', 'icons_trend');
    }
}
