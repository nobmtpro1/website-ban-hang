<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\coupon;

class couponcontroller extends admincontroller
{
    public function list()
    {
        $coupon = coupon::orderByDesc('id')->paginate(10);
        return view('admin.coupon.list',compact('coupon'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {

                 $this->validate($request,[
                'code'=>'unique:coupon,code',

            ],[
                'code.unique'=>'Code đã tồn tại',

            ]);
            $coupon = new coupon;
            $coupon->name = $request->name;
            $coupon->code = $request->code;
            $coupon->uses = $request->uses;
            $coupon->discount_amount = $request->discount_amount;
            $coupon->is_fixed = $request->is_fixed;
            $coupon->starts_at = $request->starts_at;
            $coupon->expired_at = $request->expired_at;
            $coupon->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.coupon.add');


    }
    public function status($id)
    {
        $coupon = coupon::find($id);
        $coupon->status = !$coupon->status;
        $coupon->save();
        return redirect()->back();
    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {


            $this->validate($request,[
                'code'=>'unique:coupon,code',

            ],[
                'code.unique'=>'Code đã tồn tại',

            ]);
            $coupon =  coupon::find($id);
            $coupon->name = $request->name;
            $coupon->code = $request->code;
            $coupon->uses = $request->uses;
            $coupon->discount_amount = $request->discount_amount;
            $coupon->is_fixed = $request->is_fixed;
            $coupon->starts_at = $request->starts_at;
            $coupon->expired_at = $request->expired_at;
            $coupon->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $coupon = coupon::find($id);
        return view('admin.coupon.edit',compact('coupon'));
    }
    public function delete($id)
    {
        $coupon = coupon::find($id)->delete();
        return redirect()->back();
    }
}
