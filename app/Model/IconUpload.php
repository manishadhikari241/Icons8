<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class IconUpload extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    protected $fillable=['name','description','image'];

    public function styles()
    {
        return $this->belongsToMany('App\Model\IconStyle','icons_style','icon_id','style_id');
    }
    public function trends()
    {
        return $this->belongsToMany('App\Model\IconTrend','icons_trend','icon_id','trend_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag','icons_tags','icon_id','tag_id');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Model\IconCategory','icons_category','icon_id','category_id');
    }
}
