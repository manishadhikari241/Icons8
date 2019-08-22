<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TopicLike extends Model
{
    protected $fillable = ['user_id', 'likes', 'topic_id'];
}
