<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articlecategory extends Model
{
    protected $table = 'articlecategory';
    public function article()
    {
        return $this->hasMany('App\article','articlecategory_id','id');
    }

}
