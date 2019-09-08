<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Music extends Model
{
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    protected $fillable=['name','image','artist_id'];

    public function artists()
    {
        return $this->belongsTo('App\Model\Artist','artist_id');
    }

    public function themes()
    {
        return $this->belongsToMany('App\Model\Theme','music_theme','music_id','theme_id');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Model\Genre','music_genre','music_id','genre_id');
    }
    public function moods()
    {
        return $this->belongsToMany('App\Model\Mood','music_mood','music_id','mood_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Model\MusicTag','pivot_music_tags','music_id','tag_id');
    }
}