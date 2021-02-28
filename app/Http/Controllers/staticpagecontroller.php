<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staticpage;
use App\slide;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class staticpagecontroller extends Controller
{
   public function index($slug)
   {
        $content = staticpage::where('slug',$slug)->first();
        return view('page.staticpage.index',compact('content'));
   }
}
