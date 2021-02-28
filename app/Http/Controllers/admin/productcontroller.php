<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\category;
use App\product;
use App\product_attr;
use App\product_keyword;
use App\keyword;
use App\album;
use Illuminate\Support\Facades\File ;


class productcontroller extends admincontroller
{
    public function list()
    {
        $product = product::orderBy('id','desc')->get();
        return view('admin.product.list',compact('product'));
    }
    public function add(request $request)
    {
        if ($request->isMethod('post')) {


           $this->validate($request,[
                'p_avatar'=>'image|max:10000',
                'image.*'=>'image|max:10000'

            ],[

                'p_avatar.image'=>'Chỉ được upload hình ảnh',
                'p_avatar.max'=>'Kích thướt ảnh quá lớn',

            ]);
            $product = new product;
            $product->p_name = $request->p_name;
            $product->p_price = $request->p_price;
            $product->p_sale_type = $request->p_sale_type;
            $product->p_sale = $request->p_sale;
            $product->p_description = $request->p_description;
            $product->p_category_id = $request->p_category_id;
            $product->p_content = $request->p_content;
            $product->p_qty = $request->p_qty;



            $file  = $request->file('p_avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $product->p_avatar = $filename;

            $product->save();
            if (isset($request->image)) {
               foreach ($request->image as $key => $value) {
                $album = new album;
                $album->product_id = $product->id;
                $file  = $value;
            $extension = $file->getClientOriginalExtension();
            $oname = $file->getClientOriginalName();
            $filename = time().".".$oname;
            $file->move('upload',$filename);
            $album->image = $filename;
            $album->save();

            }
            }

            foreach ($request->attr_id as $key ) {
                if ($key!=null) {

                    $product->attr()->attach($key);
                }
            }


            $product->p_slug = Str::slug($request->p_name)."-".$product->id;
            $product->save();
            return redirect()->back()->with('message','Thêm thành công');
        }

        $category = category::all();
        $keyword = keyword::all();
        return view('admin.product.add',compact('category','keyword'));


    }

    public function edit(request $request,$id)
    {
        if ($request->isMethod('post')) {


           $this->validate($request,[
                'p_avatar'=>'image|max:10000',
                'image.*'=>'image|max:10000'

            ],[

                'p_avatar.image'=>'Chỉ được upload hình ảnh',
                'p_avatar.max'=>'Kích thướt ảnh quá lớn',

            ]);

            $product = product::find($id);
            $product->p_name = $request->p_name;
            $product->p_price = $request->p_price;
             $product->p_sale_type = $request->p_sale_type;
            $product->p_sale = $request->p_sale;
            $product->p_description = $request->p_description;
            $product->p_category_id = $request->p_category_id;
            $product->p_content = $request->p_content;
            $product->p_qty = $request->p_qty;
            if ($request->hasFile('p_avatar')) {
                $file  = $request->file('p_avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('upload',$filename);
            $product->p_avatar = $filename;
            }
            if (isset($request->image)) {
                foreach ($request->image as $key => $value) {
                $album = new album;
                $album->product_id = $product->id;
                $file  = $value;
            $extension = $file->getClientOriginalExtension();
            $oname = $file->getClientOriginalName();
            $filename = time().".".$oname;
            $file->move('upload',$filename);
            $album->image = $filename;
            $album->save();

            }
            }


            $product->save();
            $product->attr()->detach();
            $product->keyword()->detach();
            if ($request->has('attr_id')) {
               foreach ($request->attr_id as $key ) {


                    $product->attr()->attach($key);

            }
            }


            $product->p_slug = Str::slug($request->p_name)."-".$product->id;
            $product->save();
            return redirect()->back()->with('message','Sửa thành công');
        }
        $keyword = keyword::all();
        $category= category::all();
        $product = product::find($id);
        $id = [];
        foreach ($product->product_attr as $key => $value) {
            $id[]=$value->attr_id;
        }
        // dd($id);
        return view('admin.product.edit',compact('product','category','id','keyword'));
    }
    public function delete($id)
    {

        $product = product::find($id)->delete();
        return redirect()->back();
    }
    public function hot($id)
    {
        $product = product::find($id);
        $product->p_hot = !$product->p_hot;
        $product->save();
        return redirect()->back();
    }
    public function status($id)
    {
        $product = product::find($id);
        $product->p_status = !$product->p_status;
        $product->save();
        return redirect()->back();
    }
    public function deleteimage($id)
    {
            $image = album::find($id);
            $file_path = public_path("upload/".$image->image);
            if (\File::exists($file_path)) {
                File::delete($file_path);
            }

            $image->delete();
            return redirect()->back();
    }
}
