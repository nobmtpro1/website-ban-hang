<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Post extends Model implements ViewableContract
{
    protected $table = 'views';
    use InteractsWithViews;

    // ...
};
