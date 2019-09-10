<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderUpload extends Model
{
    protected $fillable=['image','message','status','order_id'];

    public function orders()
    {
        return $this->belongsTo('App\Model\Order','order_id');
    }
}
