<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\transaction;
use App\User;
use App\product;
use App\review;
use App\service\date;

class dashboardcontroller extends admincontroller
{
    public function index()
    {

        $transaction = transaction::all()->count();
        $user = User::all()->count();
        $product = product::all()->count();
        $review = review::all()->count();
        $newtransaction = transaction::orderBy('id','desc')->limit(10)->get();
        $topbuy = product::orderBy('p_buy','desc')->where('p_status',1)->limit(10)->get();
        $topview = product::orderBy('p_view','desc')->where('p_status',1)->limit(10)->get();

        $tiepnhan = transaction::where('status',1)->count();
        $dangvanchuyen = transaction::where('status',2)->count();
        $dachuyen = transaction::where('status',3)->count();
        $huy = transaction::where('status',4)->count();

        $listday = date::listday();
        $doanhso = transaction::where('status',3)->whereMonth('created_at',date('m'))->select( \DB::raw('sum(total_money)  total'),\DB::raw('DATE(created_at) day'))->groupByRaw('day')->get();
        foreach ($doanhso as $key => $value) {
            $listday[(date('d',strtotime($value->day))-1)] = $value->total;
        }
        // dd($listday);
        return view('admin.dashboard',compact('transaction','user','product','review','newtransaction','topbuy','topview','tiepnhan','dangvanchuyen','dachuyen','huy','listday'));
    }


}
