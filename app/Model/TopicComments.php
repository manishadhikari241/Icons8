<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class TopicComments extends Model
{
    protected $fillable = ['topic_id', 'comment', 'user_id'];

    public function topics()
    {
        return $this->belongsTo('App\Model\ForumTopic', 'topic_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }


}
