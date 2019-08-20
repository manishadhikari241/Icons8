<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    protected $fillable = ['topic', 'category_id', 'status', 'description'];

    public function Categories()
    {
        return $this->belongsTo('App\Model\ForumCategory', 'category_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'topic_user', 'topic_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\TopicComments', 'topic_id');
    }
}
