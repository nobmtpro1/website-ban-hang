<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keyword extends Model
{
    protected $table = 'keyword';
    public function product()
    {
        return $this->belongsToMany('App\product','product_keyword','keyword_id','product_id');
    }
}
