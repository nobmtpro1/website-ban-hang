<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attr extends Model
{
    protected $table = 'attr';
    public function product()
    {
        return $this->belongsToMany('App\product','product_attr','attr_id','product_id');
    }
    public function child()
    {
        return $this->hasMany('App\attr','a_parent_id');
    }
    public function parent()
    {
        return $this->belongsTo('App\attr','a_parent_id');
    }
    public function category()
    {
        return $this->belongsTo('App\category','a_category_id','id');
    }
}
