<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attr;

use App\product;
use App\category;
use App\product_attr;
use Illuminate\Database\Eloquent\Builder;

class categorycontroller extends Controller
{
    public function index(request $request,$c_slug)
    {

            $orderby = 'id DESC';
            if ($request->orderby) {
                     $orderby = $request->orderby;
            }
            if ($request->id ) {

            $query = product::query();

                foreach($request->id as $key =>$value){
                    $query->whereHas('product_attr', function ($q) use ($value) {
                    $q->where('attr_id','=', $value );
                });

            }
            $product = $query->orderByRaw($orderby)->paginate(12);

            $category = category::where('c_slug',$c_slug)->first();

        $attr = attr::where('a_parent_id',0)->get();
        $attrchild = function ($id)
        {
             $a = new attr;
            return $a->find($id)->a_name;
        };

        return view('page.category.index',compact('attr','product','category','attrchild'));
        }


        $category = category::where('c_slug',$c_slug)->first();
        // dd($category);
        $product = $category->product()->orderByRaw($orderby)->paginate(12);
        $attr = attr::where('a_parent_id',0)->get();
        // dd($category->attr()->get()->where('a_parent_id',0));
        return view('page.category.index',compact('attr','product','category'));
    }



}
