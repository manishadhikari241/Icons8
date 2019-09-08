<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderAssign extends Model
{
    protected $fillable=['order_id','user_id','status'];

    public function orders()
    {
        return $this->hasMany('App\Model\Order','order_id');
    }

    public function users()
    {
        return $this->hasMany('App\User','user_id');
    }

}
