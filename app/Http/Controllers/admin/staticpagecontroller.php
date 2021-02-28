<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\staticpage;

class staticpagecontroller extends admincontroller
{
    public function list()
    {
        $staticpage = staticpage::orderByDesc('id')->paginate(10);
        return view('admin.staticpage.list',compact('staticpage'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request,[
                'content'=>'required',

            ],[
                'content.required'=>'Nội dung không được bỏ trống',

            ]);
            $staticpage = new staticpage;
            $staticpage->title = $request->title;
            $staticpage->position = $request->position;
            $staticpage->content = $request->content;
            $staticpage->save();
            $staticpage->slug = Str::slug($request->title)."-".$staticpage->id;
            $staticpage->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.staticpage.add');


    }
    public function status($id)
    {
        $staticpage = staticpage::find($id);
        $staticpage->status = !$staticpage->status;
        $staticpage->save();
        return redirect()->back();
    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {


            $this->validate($request,[
                'content'=>'required',

            ],[
                'content.required'=>'Nội dung không được bỏ trống',

            ]);
            $staticpage =  staticpage::find($id);
            $staticpage->title = $request->title;
            $staticpage->position = $request->position;
            $staticpage->content = $request->content;
            $staticpage->save();
            $staticpage->slug = Str::slug($request->title)."-".$staticpage->id;
            $staticpage->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $staticpage = staticpage::find($id);
        return view('admin.staticpage.edit',compact('staticpage'));
    }
    public function delete($id)
    {
        $staticpage = staticpage::find($id)->delete();
        return redirect()->back();
    }
}
