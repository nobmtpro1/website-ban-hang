<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\category;
use App\attr;

class attrcontroller extends admincontroller
{
    public function list()
    {

        $attr = attr::orderBy('a_parent_id','asc')->paginate(10);
        return view('admin.attr.list',compact('attr'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {


            $attr = new attr;
            $attr->a_name = $request->a_name;
            $attr->a_parent_id = $request->a_parent_id;
            if ($attr->a_parent_id!=0) {
                $attr->a_category_id= attr::find($request->a_parent_id)->category->id;
            }else{
                $attr->a_category_id = $request->a_category_id;
            }





            $attr->save();
            $attr->a_slug = Str::slug($request->a_name)."-".$attr->id;
            $attr->save();
            return redirect()->back()->with('message','Thêm thành công');
        }
        $parent = attr::where('a_parent_id',0)->get();
        $category  = category::all();
        return view('admin.attr.add',compact('parent','category'));


    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {



            $attr =  attr::find($id);
            $attr->a_name = $request->a_name;
            $attr->a_parent_id = $request->a_parent_id;
            if ($attr->a_parent_id!=0) {
                $attr->a_category_id= attr::find($request->a_parent_id)->category->id;
            }else{
                $attr->a_category_id = $request->a_category_id;
            }




            $attr->save();
            $attr->a_slug = Str::slug($request->a_name)."-".$attr->id;
            $attr->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $parent = attr::where('a_parent_id',0)->get();
        $category= category::all();
        $attr = attr::find($id);
        return view('admin.attr.edit',compact('attr','category','parent'));
    }
    public function delete($id)
    {
        $attr = attr::find($id)->delete();
        return redirect()->back();
    }
    public function hot($id)
    {
        $attr = attr::find($id);
        $attr->a_hot = !$attr->a_hot;
        $attr->save();
        return redirect()->back();
    }
    public function status($id)
    {
        $attr = attr::find($id);
        $attr->status = !$attr->status;
        $attr->save();
        return redirect()->back();
    }
}
