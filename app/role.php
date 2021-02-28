<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'role';
    public function permission()
    {
        return $this->belongsToMany('App\permission','role_permission','role_id','permission_id');
    }
}
