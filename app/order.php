<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';

    public function product()
    {
        return $this->belongsTo('App\product','product_id','id');
    }
}
