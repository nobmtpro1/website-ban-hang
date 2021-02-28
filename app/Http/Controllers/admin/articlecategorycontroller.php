<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\articlecategory;

class articlecategorycontroller extends admincontroller
{
    public function list()
    {
        $articlecategory = articlecategory::paginate(10);
        return view('admin.articlecategory.list',compact('articlecategory'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {

            $articlecategory = new articlecategory;
            $articlecategory->name = $request->name;

            $articlecategory->save();
            $articlecategory->slug = Str::slug($request->name)."-".$articlecategory->id;
            $articlecategory->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.articlecategory.add');


    }
    public function status($id)
    {
        $articlecategory = articlecategory::find($id);
        $articlecategory->status = !$articlecategory->status;
        $articlecategory->save();
        return redirect()->back();
    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {

            $articlecategory = articlecategory::find($id);
            $articlecategory->name = $request->name;

            $articlecategory->save();
            $articlecategory->slug = Str::slug($request->name)."-".$articlecategory->id;
            $articlecategory->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $articlecategory = articlecategory::find($id);
        return view('admin.articlecategory.edit',compact('articlecategory'));
    }
    public function delete($id)
    {
        $articlecategory = articlecategory::find($id)->delete();
        return redirect()->back();
    }
}
