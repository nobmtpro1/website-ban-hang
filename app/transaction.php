<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class transaction extends Model
{
    protected $table = 'transaction';
    protected $t_status = [
        1 => [
            'class'=> 'default',
            'name' => 'Tiếp nhận'
        ],
        2 => [
            'class'=> 'warning',
            'name' => 'Đang vận chuyển'
        ],
        3 => [
            'class'=> 'success',
            'name' => 'Đã chuyển hàng'
        ],
        4 => [
            'class'=> 'danger',
            'name' => 'Đã hủy'
        ],
    ];
    public function product()
    {
        return $this->belongsToMany('App\product','order','transaction_id','product_id');
    }
    public function getstatus($key)
    {
        return Arr::get($this->t_status,$this->status.".".$key);
    }
    public function order()
    {
        return $this->hasMany('App\order','transaction_id','id');
    }

}
