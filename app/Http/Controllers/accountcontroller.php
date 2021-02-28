<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use Illuminate\Support\Facades\Auth;
use App\product;
use Illuminate\Support\Facades\Hash;
use App\product_attr;
use Illuminate\Database\Eloquent\Builder;

class accountcontroller extends Controller
{

    public function index()
    {
        return view('page/account/index');
    }
    public function changepassword(request $request)
    {
        if (hash::check($request->oldpassword,Auth::user()->password)) {
            $this->validate($request,[
                'newpassword2' => 'same:newpassword'
            ],[
                'newpassword2.same'=>'Mật khẩu nhập lại không đúng'
            ]);
            Auth::user()->password = bcrypt($request->newpassword);
            Auth::user()->save();
            return redirect()->back()->with('message','Đổi mật khẩu thành công');
        }else{
            return redirect()->back()->with('message','Mật khẩu cũ không chính xác');
        }
    }
    public function changeinfo(request $request)
    {
        Auth::user()->name = $request->name;
        Auth::user()->phone = $request->phone;
        Auth::user()->address = $request->address;
        Auth::user()->save();
        return redirect()->back()->with('message','Đổi thông tin thành công');

    }
    public function history()
    {
        $transaction = transaction::where('user_id',Auth::user()->id)->orderByDesc('id')->get();
            return view('page/account/history',compact('transaction'));
    }

}
