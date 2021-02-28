<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\category;
use App\keyword;

class keywordcontroller extends admincontroller
{
    public function list()
    {
        $keyword = keyword::paginate(10);
        return view('admin.keyword.list',compact('keyword'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
                    'k_name'=>'unique:keyword,k_name'
                ],[
                    'k_name.unique'=>'Danh mục đã tồn tại'
                ]);
            $keyword = new keyword;
            $keyword->k_name = $request->k_name;
            $keyword->k_description = $request->k_description;
            $keyword->k_slug = Str::slug($request->k_name);
            $keyword->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        return view('admin.keyword.add');


    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {

            $keyword = keyword::find($id);
            $keyword->k_name = $request->k_name;
            $keyword->k_description = $request->k_description;
            $keyword->k_slug = Str::slug($request->k_name);
            $keyword->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $keyword = keyword::find($id);
        return view('admin.keyword.edit',compact('keyword'));
    }
    public function delete($id)
    {
        $keyword = keyword::find($id)->delete();
        return redirect()->back();
    }
    public function hot($id)
    {
        $keyword = keyword::find($id);
        $keyword->k_hot = !$keyword->k_hot;
        $keyword->save();
        return redirect()->back();
    }
}
