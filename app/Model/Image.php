<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Image extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $fillable = ['title', 'image', 'description', 'uploader', 'image_type', 'license', 'status', 'is_new', 'is_rising', 'is_top','user_id','cost'];

    public function categories()
    {
        return $this->belongsToMany('App\Model\ImageCategory', 'table_image_category', 'image_id','category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag', 'image_tags', 'image_id', 'tag_id');
    }

    public function genders()
    {
        return $this->belongsToMany('App\Model\Gender', 'table_image_gender', 'image_id');
    }

    public function ages()
    {
        return $this->belongsToMany('App\Model\Age', 'table_image_age', 'image_id');
    }

    public function races()
    {
        return $this->belongsToMany('App\Model\Race', 'table_image_race', 'image_id');
    }

    public function hairs()
    {
        return $this->belongsToMany('App\Model\Hair', 'table_image_hair', 'image_id');
    }

    public function bodytypes()
    {
        return $this->belongsToMany('App\Model\BodyType', 'table_image_body_type', 'image_id','body_id');
    }

    public function specials()
    {
        return $this->belongsToMany('App\Model\SpecialFeature', 'table_image_special_feature', 'image_id','special_id');
    }
    public function photos()
    {
        return $this->belongsToMany('App\Model\Credit','image_photographer','image_id','photographer_id');
    }
    public function models()
    {
        return $this->belongsToMany('App\Model\Credit','image_models','image_id','model_id');
    }
    public function orders()
    {
        return $this->belongsToMany('App\Model\Order','image_orders','image_id','order_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User','user_id');

    }
}
