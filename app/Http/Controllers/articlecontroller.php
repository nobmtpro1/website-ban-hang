<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attr;
use App\keyword;
use App\article;
use App\articlecategory;
use App\product_attr;
use Illuminate\Database\Eloquent\Builder;

class articlecontroller extends Controller
{
    public function articlecategory(request $request,$slug)
    {
        $articlecategory = articlecategory::where('slug',$slug)->first();
        $article =$articlecategory->article()->orderByDesc('id')->where('status',1)->paginate(12);

        return view('page.article.index',compact('article','articlecategory'));

    }
    public function articledetail($slug)
    {
        $keyword = keyword::orderByDesc('id')->limit(5)->get();
        $articlecategory = articlecategory::where('status',1)->get();
        $article = article::where('slug',$slug)->first();
        $recentpost = article::where('status',1)->whereNotIn('id',[$article->id])->orderByDesc('id')->limit(5)->get();
        return view('page.article.articledetail',compact('article','recentpost','articlecategory','keyword'));
    }



}

