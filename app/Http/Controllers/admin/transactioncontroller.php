<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\transaction;

class transactioncontroller extends admincontroller
{
    public function list()
    {
        $transaction = transaction::all();
        return view('admin.transaction.list',compact('transaction'));
    }

    public function status($status,$id)
    {
        $transaction = transaction::find($id);

        $transaction->status = $status;
        $transaction->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $transaction = transaction::find($id)->delete();
        return redirect()->back();
    }
}
