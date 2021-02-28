<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = 'article';
    public function articlecategory()
    {
        return $this->belongsTo('App\articlecategory','articlecategory_id','id');
    }

}
