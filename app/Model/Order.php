<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;

class Order extends Model
{
    protected $fillable=['image_id','user_id','status'];

    public function images()
    {
        return $this->belongsToMany('App\Model\Image','table_image_orders','order_id','image_id');
    }

    public function users()
    {
        return $this->belongsToMany('TCG\Voyager\Models\User', 'user_orders','order_id','user_id');
    }

}
