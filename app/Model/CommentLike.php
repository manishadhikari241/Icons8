<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    protected $fillable = ['user_id', 'likes', 'comment_id'];
}
