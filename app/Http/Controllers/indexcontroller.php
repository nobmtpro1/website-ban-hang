<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\slide;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class indexcontroller extends Controller
{
   public function index()
   {
        $slide = slide::where('status',1)->orderBy('sort','asc')->get();
        $topview = product::orderByDesc('p_view')->limit(12)->get();
        $bestsellproduct = product::orderBy('p_buy','desc')->where('p_status',1)->limit(12)->get();
        $newproduct = product::orderBy('id','desc')->where('p_status',1)->limit(12)->get();
        $hotproduct = product::orderBy('id','desc')->where('p_status',1)->where('p_hot',1)->limit(12)->get();


       return view('page.home.index',compact('newproduct','hotproduct','bestsellproduct','topview','slide'));
   }
   public function formsearch(request $request)
   {
       $result=product::where('p_name','LIKE','%' . $request->keyword . '%')->get();
       $keyword = $request->keyword;
       return view('page.home.search',compact('result','keyword'));
   }

   public function aaa()
   {
       return 'sssss';
   }
}
