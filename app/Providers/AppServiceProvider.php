<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\category;
use App\config;
use App\review;
use App\staticpage;
use App\articlecategory;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $allarticlecategory = articlecategory::where('status',1)->get();
        $allcategory = category::where('c_status',1)->get();
        View::share('allcategory', $allcategory);
        View::share('allarticlecategory', $allarticlecategory);
        $config = config::all();
        View::share('config', $config);
        $staticpage = staticpage::where('status',1)->get();
        View::share('staticpage', $staticpage);



    }
}
