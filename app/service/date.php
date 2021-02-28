<?php

namespace App\service;

use Illuminate\Support\ServiceProvider;


class date
{
   public static function listday()
   {
       $day = [];
       $month = date('m');
       $year = date('y');
       for ($i=1; $i <= cal_days_in_month(CAL_GREGORIAN,$month,$year) ; $i++) {
         $day[]=0;
       }
       return $day;
   }
}
