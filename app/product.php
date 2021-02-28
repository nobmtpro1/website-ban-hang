<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    public function category()
    {
        return $this->belongsTo('App\category','p_category_id','id');
    }
    public function attr()
    {
        return $this->belongsToMany('App\attr','product_attr','product_id','attr_id');
    }
    public function transaction()
    {
        return $this->belongsToMany('App\transaction','order','product_id','transaction_id');
    }
    public function product_attr()
    {
        return $this->hasMany('App\product_attr','product_id','id');
    }
    public function keyword()
    {
        return $this->belongsToMany('App\keyword','product_keyword','product_id','keyword_id');
    }
    public function album()
    {
        return $this->hasMany('App\album','product_id','id');
    }
    public function order()
    {
        return $this->hasMany('App\order','product_id','id');
    }
    public function review()
    {
       return $this->hasMany('App\review','product_id','id');
    }
}
