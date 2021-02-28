<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\review;

class reviewcontroller extends admincontroller
{
    public function list()
    {
        $review = review::orderByDesc('id')->paginate(10);
        return view('admin.review.list',compact('review'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request,[
                'image'=>'image|max:10000',

            ],[
                'image.mimes'=>'Chỉ được upload hình ảnh',
                'image.max'=>'Kích thướt ảnh quá lớn',

            ]);
            $review = new review;
            $review->title = $request->title;
            $review->content = $request->content;
            $review->link = $request->link;
            $review->target = $request->target;
            $review->sort = $request->sort;

            $file  = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $review->image = $filename;
            $review->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.review.add');


    }
    public function status($id)
    {
        $review = review::find($id);
        $review->status = !$review->status;
        $review->save();
        return redirect()->back();
    }
    public function hot($id)
    {
        $review = review::find($id);
        $review->hot = !$review->hot;
        $review->save();
        return redirect()->back();
    }
    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {


            $this->validate($request,[
                'image'=>'image|max:10000',

            ],[
                'image.mimes'=>'Chỉ được upload hình ảnh',
                'image.max'=>'Kích thướt ảnh quá lớn',

            ]);
            $review = review::find($id);
            $review->title = $request->title;
            $review->content = $request->content;
            $review->link = $request->link;
            $review->target = $request->target;
            $review->sort = $request->sort;
            if ($request->hasFile('image')) {
                $file  = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $review->image = $filename;
            }

            $review->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $review = review::find($id);
        return view('admin.review.edit',compact('review'));
    }
    public function delete($id)
    {
        $review = review::find($id)->delete();
        return redirect()->back();
    }
}
