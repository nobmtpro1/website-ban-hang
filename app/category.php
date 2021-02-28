<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';

    public function product()
    {
        return $this->hasMany('App\product','p_category_id','id');
    }
    public function attr()
    {
        return $this->hasMany('App\attr','a_category_id','id');
    }
}
