<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attr;
use App\product;
use App\category;
use App\product_attr;
use App\transaction;
use Auth;
use App\order;
use Illuminate\Database\Eloquent\Builder;

class ajaxcontroller extends Controller
{

    public function vieworder(request $request)
    {

            $order = order::where('transaction_id',$request->transaction_id)->get();
            return view('ajax.orderdetail',compact('order'));

    }
    public function deleteorder($id, $transaction_id)
    {
        $deleteorder = order::find($id);
        $deletetotal = $deleteorder->price*$deleteorder->qty;

        $transaction=transaction::find($transaction_id);
        $transaction->total_money-= $deletetotal;
        $transaction->save();
        $deleteorder->delete();
        return redirect()->back();


    }
    public function search(request $request)
    {
        $product = product::where('p_name','LIKE','%' . $request->search . '%')->get();
        foreach ($product as $key => $value) {
            echo "<p><a href='product/".$value->p_slug."'>".$value->p_name."</a></p>";
        }
    }

}
