<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\category;
use App\article;
use App\articlecategory;


class articlecontroller extends admincontroller
{
    public function list()
    {
        $article = article::all();
        return view('admin.article.list',compact('article'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request,[
                'avatar'=>'image|max:10000',

            ],[
                'avatar.image'=>'Chỉ được upload hình ảnh',
                'avatar.max'=>'Kích thướt ảnh quá lớn',

            ]);
            $article = new article;
            $article->name = $request->name;

            $article->description = $request->description;
            $article->articlecategory_id = $request->articlecategory_id;
            $article->content = $request->content;



            $file  = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $article->avatar = $filename;

            $article->save();

            $article->slug = Str::slug($request->name)."-".$article->id;
            $article->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        $articlecategory = articlecategory::all();

        return view('admin.article.add',compact('articlecategory'));


    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {

            $this->validate($request,[
                'avatar'=>'image|max:10000',
                'name'=>'unique:article,slug'
            ],[
                'avatar.image'=>'Chỉ được upload hình ảnh',
                'avatar.max'=>'Kích thướt ảnh quá lớn',
                'name.unique'=>'Sản phẩm đã tồn tại'
            ]);

            $article = article::find($id);
            $article->name = $request->name;

            $article->description = $request->description;
            $article->articlecategory_id = $request->articlecategory_id;
            $article->content = $request->content;


            if ($request->hasFile('avatar')) {
                $file  = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $article->avatar = $filename;
            }


            $article->save();

            $article->slug = Str::slug($request->name)."-".$article->id;
            $article->save();
            return redirect()->back()->with('message','Sửa thành công');
        }

        $articlecategory= articlecategory::all();
        $article = article::find($id);

        return view('admin.article.edit',compact('article','articlecategory'));
    }
    public function delete($id)
    {
        $article = article::find($id)->delete();
        return redirect()->back();
    }
    public function hot($id)
    {
        $article = article::find($id);
        $article->hot = !$article->hot;
        $article->save();
        return redirect()->back();
    }
    public function status($id)
    {
        $article = article::find($id);
        $article->status = !$article->status;
        $article->save();
        return redirect()->back();
    }
}
