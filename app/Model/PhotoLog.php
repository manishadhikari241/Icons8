<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;

class PhotoLog extends Model
{
    protected $fillable = ['type', 'description', 'ip_address', 'user_id', 'order_id'];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}

