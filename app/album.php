<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = 'album';
    public function product()
    {
        return $this->belongsTo('App\product','product_id','id');
    }
}
