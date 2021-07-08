<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    public function meal()
    {
        return $this->belongsTo('App\Meal');
    }
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
