<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Video extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    protected $fillable=['name','image','artist_id','video'];

    public function artists()
    {
        return $this->belongsTo('App\Model\Artist','artist_id');
    }

    public function themes()
    {
        return $this->belongsToMany('App\Model\Theme','video_theme','video_id','theme_id');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Model\Genre','video_genre','video_id','genre_id');
    }

    public function moods()
    {
        return $this->belongsToMany('App\Model\Mood','video_mood','video_id','mood_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Model\MusicTag','pivot_video_tags','video_id','tag_id');
    }

}
