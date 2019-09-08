<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ImageCategory extends Model
{
    use HasSlug;

    protected $map=['status'=>'manis'];
    protected $hidden=['status'];
    protected $appends=['status'];



    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $fillable=['title','description','status'];
}
