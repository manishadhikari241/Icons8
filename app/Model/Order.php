<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['image_id','user_id','status'];

    public function images()
    {
        return $this->belongsToMany('App\Model\Image','image_orders','order_id','image_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_orders','order_id','user_id');
    }

}
