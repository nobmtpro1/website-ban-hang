<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\slide;

class slidecontroller extends admincontroller
{
    public function list()
    {
        $slide = slide::orderByDesc('id')->paginate(10);
        return view('admin.slide.list',compact('slide'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request,[
                'image'=>'image|max:10000',
                'sort'=>'unique:slide,sort'

            ],[
                'image.image'=>'Chỉ được upload hình ảnh',
                'image.max'=>'Kích thướt ảnh quá lớn',
                'sort.unique'=>'Thứ tự đã tồn tại'
            ]);
            $slide = new slide;
            $slide->title = $request->title;
            $slide->content = $request->content;
            $slide->link = $request->link;

            $slide->sort = $request->sort;

            $file  = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $slide->image = $filename;
            $slide->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.slide.add');


    }
    public function status($id)
    {
        $slide = slide::find($id);
        $slide->status = !$slide->status;
        $slide->save();
        return redirect()->back();
    }
    public function hot($id)
    {
        $slide = slide::find($id);
        $slide->hot = !$slide->hot;
        $slide->save();
        return redirect()->back();
    }
    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {


            $this->validate($request,[
                'image'=>'image|max:10000',


            ],[
                'image.image'=>'Chỉ được upload hình ảnh',
                'image.max'=>'Kích thướt ảnh quá lớn',

            ]);
            $slide = slide::find($id);
            $slide->title = $request->title;
            $slide->content = $request->content;
            $slide->link = $request->link;

            $slide->sort = $request->sort;
            if ($request->hasFile('image')) {
                $file  = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $slide->image = $filename;
            }

            $slide->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $slide = slide::find($id);
        return view('admin.slide.edit',compact('slide'));
    }
    public function delete($id)
    {
        $slide = slide::find($id)->delete();
        return redirect()->back();
    }
}
