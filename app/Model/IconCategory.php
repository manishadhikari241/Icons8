<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class IconCategory extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $fillable = ['title', 'description', 'image'];

    public function icons()
    {
        return $this->belongsToMany('App\Model\IconUpload','icons_category','category_id','icon_id');
    }
}
