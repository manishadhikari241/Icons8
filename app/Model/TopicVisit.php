<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TopicVisit extends Model
{
    protected $fillable = ['topic_id', 'ip_address', 'count'];
}
