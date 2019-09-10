<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderUpload extends Model
{
    protected $fillable=['image','message','status','order_id'];
}
