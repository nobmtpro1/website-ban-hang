<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\config;

class configcontroller extends admincontroller
{
    public function list()
    {
        $config = config::orderByDesc('id')->paginate(10);
        return view('admin.config.list',compact('config'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {


            $config = new config;
            $config->name = $request->name;
            $config->content = $request->content;
            $config->link = $request->link;
            $config->type = $request->type;
            $config->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.config.add');


    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {


            $config = config::find($id);
            $config->name = $request->name;
            $config->content = $request->content;
            $config->link = $request->link;
            $config->type = $request->type;
            $config->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $config = config::find($id);
        return view('admin.config.edit',compact('config'));
    }
    public function delete($id)
    {
        $config = config::find($id)->delete();
        return redirect()->back();
    }
}
