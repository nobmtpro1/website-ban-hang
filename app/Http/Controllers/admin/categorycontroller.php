<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\category;

class categorycontroller extends admincontroller
{
    public function list()
    {
        $category = category::paginate(10);
        return view('admin.category.list',compact('category'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
                    'c_name'=>'unique:category,c_name'
                ],[
                    'c_name.unique'=>'Danh mục đã tồn tại'
                ]);
            $category = new category;
            $category->c_name = $request->c_name;
            $category->c_slug = Str::slug($request->c_name);
            $category->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.category.add');


    }
    public function status($id)
    {
        $category = category::find($id);
        $category->c_status = !$category->c_status;
        $category->save();
        return redirect()->back();
    }
    public function hot($id)
    {
        $category = category::find($id);
        $category->c_hot = !$category->c_hot;
        $category->save();
        return redirect()->back();
    }
    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {

            $category = category::find($id);
            $category->c_name = $request->c_name;
            $category->c_slug = Str::slug($request->c_name);
            $category->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $category = category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function delete($id)
    {
        $category = category::find($id)->delete();
        return redirect()->back();
    }
}
