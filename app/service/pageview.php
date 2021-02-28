<?php

namespace App\service;

use Illuminate\Support\ServiceProvider;


class pageview
{
   public static function view($table,$column,$key,$id)
   {
       $ip = get_client_ip();
       $limittime = 120;
       $key = $key."_".md5($ip)."_".$id;
       if (\Session::has($key)) {
           $timebefore = \Session::get($key);
           if ($timebefore+$limittime> time()) {
               return false;
           }
       }
       \Session::put($key,time());
       \DB::table($table)->where('id',$id)->increment($column);
   }
}
