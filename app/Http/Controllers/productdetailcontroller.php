<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Post;
use App\review;
use App\service\pageview;
use Illuminate\Support\Facades\Auth;


class productdetailcontroller extends Controller
{
    public function index($p_slug,request $request)
    {

        $product = product::where('p_slug',$p_slug)->first();
        $review2 = review::where('product_id',$product->id)->where('status',1)->orderBy('id','desc')->paginate(5);
          if($request->ajax() || null ){
          return view('ajax.paginatereview',compact('review2'));
        }
        $review = review::where('product_id',$product->id)->where('status',1)->orderBy('id','desc')->get()->toArray();
        $star = [];
        foreach ($review as $key => $value) {
            $star[] = $value['star'];
        }
        $average = 0;
        if (count($star)>0) {

        $average =array_sum($star)/count($star);
        }


        $productsuggest = product::orderBy('id','desc')->where('p_category_id',$product->p_category_id)->whereNotIn('id',[$product->id])->where('p_status',1)->limit(12)->get();
        pageview::view('product','p_view','product',$product->id);
        return view('page.productdetail.index',compact('product','productsuggest','post','review','average','review2'));
    }
    public function addreview(request $request)
    {
        $review = new review;
        $review->user_id = Auth::user()->id;
        $review->product_id = $request->product_id;
        $review->star = $request->rating;
        $review->content = $request->content;
        $review->save();
        toastr()->success('Đánh giá của bạn sẽ được hệ thống kiểm duyệt. Xin cám ơn!');
        return redirect()->back();
    }
}
