<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attr;
use App\product;
use App\category;
use App\product_attr;
use App\transaction;
use App\coupon;
use Auth;
use DB;
use App\order;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use Carbon\Carbon;

class cartcontroller extends Controller
{
    public function add(request $request)
    {
        function saleprice($price,$saletype,$sale)
        {
            if ($saletype=='%') {
                return  $price*(100-$sale)/100;
            }else{
                return $price-$sale;
            }
        }

       $product = product::find($request->id);
       if ($product->p_qty <1) {
        toastr()->error('Sản phẩm đã hết hàng');
           return redirect()->back();

       }
       $cart = \Cart::add(['id' => $product->id,
        'name' => $product->p_name,
        'qty' => 1,

        'price' => saleprice($product->p_price,$product->p_sale_type,$product->p_sale),
        'weight' =>'1',
        'options' => ['sale' => $product->p_sale, 'image'=>$product->p_avatar,'slug'=>$product->p_slug,'saletype'=>$product->p_sale_type,'stock'=>$product->p_qty,'oprice'=>$product->p_price]
    ]);
       \Cart::setGlobalDiscount(0);

       return view('ajax.listcart');

    }
    public function list()
    {

        return view('page.cart.list');
    }
    public function delete($id)
    {
        \Cart::remove($id);

        toastr()->success('Xóa thành công');
        return redirect()->back();
    }
    public function update(request $request)
    {
        // dd($request->all()['qty']);
        for ($i=0; $i < count($request->all()['qty']) ; $i++) {
            $stock=\Cart::get($request->all()['rowId'][$i])->options->stock;
            if ($request->all()['qty'][$i]>$stock) {
                toastr()->error('Sản phẩm '.\Cart::get($request->all()['rowId'][$i])->name.' không đủ trong kho hàng');
                return redirect()->back();
            }
            \Cart::update($request->all()['rowId'][$i], ['qty' => $request->all()['qty'][$i]]);
        }
        // $request->session()->forget('coupon');
        toastr()->success('Cập nhật giỏ hàng thành công');
       return redirect()->back();
    }
    public function destroy()
    {
        \Cart::destroy();
        toastr()->success('Hủy giỏ hàng thành công');
        return redirect()->back();
    }
    public function pay(request $request)
    {

        $user_id =0;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        if (count(\Cart::content())>0) {
            $transaction = new transaction;
        $transaction->user_id = $user_id;
        $transaction->name = $request->name;
        $transaction->email = $request->email;
        $transaction->phone = $request->phone;
        $transaction->address = $request->address;
        $transaction->note = $request->note;

            $transaction->total_money = \Cart::subtotal();


        $transaction->type = $request->type;
        $transaction->save();
        foreach (\Cart::content() as $key => $value) {
            $order = new order;
            $order->transaction_id = $transaction->id;
            $order->product_id = $value->id;
            $order->sale = $value->options->sale;
            $order->qty = $value->qty;
            $order->price = $value->price;
            $order->sale_type = $value->options->saletype;
            $order->save();
            $product = product::find($value->id);
            $product->p_buy+=$value->qty;
            $product->p_qty-=$value->qty;
            $product->save();
        }
        DB::table('coupon')->where('code',session('coupon')['code'])->decrement('uses');
        Mail::to($request->email)->send(new OrderShipped(\Cart::content()));
        \Cart::destroy();

        return redirect()->back()->with('message','Đặt hàng thành công');
        }else{
            return redirect()->back()->with('message2','Giỏ hàng không được để trống');
        }


    }
    public function setcoupon(request $request)
    {
        if ($request->isMethod('post')) {

            $coupon = coupon::where('code',$request->coupon)->first();
            if (isset($coupon) && $coupon->uses>0&&Carbon::now()>=$coupon->starts_at&&Carbon::now()<=$coupon->expired_at && $coupon->status==1  ) {
                $request->session()->put('coupon',  [
             'code' => $coupon->code,
             'is_fixed' => $coupon->is_fixed,
             'discount_amount' => $coupon->discount_amount,

                 ]);

                \Cart::setGlobalDiscount($coupon->discount_amount);
                toastr()->success('Áp dụng mã giảm giá thành công!');
                return redirect()->back();
            }else{
                toastr()->error('Áp dụng mã giảm giá thất bại!');
                return redirect()->back();
            }
        }
    }
    public function removecoupon(request $request)
    {
        // dd(var_dump((int)\Cart::pricetotal()));
        $request->session()->forget('coupon');
         return redirect()->back();
    }


}
