<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    protected $fillable = ['topic', 'category_id', 'status','description'];

    public function Categories()
    {
        return $this->belongsTo('App\Model\ForumCategory','category_id');
    }
}
