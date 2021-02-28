@extends('layout.master')
@section('content')
<div class="area-title">
                    <h2>{{$articlecategory->name}}</h2>
                </div>
    <div class="blog-area">
            <div class="container">

                <div class="row">
                    <!-- single latestpost start -->
                    @foreach($article as $a)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-post">
                            <div class="">
                                <a href="articledetail/{{$a->slug}}">
                                    <img style="height: 200px; padding-left: 17px; padding-right: 13px" src="upload/{{$a->avatar}}" alt="" />
                                </a>
                            </div>
                            <div class="post-thumb-info">
                                <div class="post-time">

                                    <span>Ngày đăng:</span>
                                    <span><small>{{$a->created_at}}</small></span>
                                </div>
                                <div class="postexcerpt">
                                    <h4><a href="articledetail/{{$a->slug}}">{{$a->name}}</a></h4>
                                    <p>{{$a->description}}</p>
                                    <a href="articledetail/{{$a->slug}}" class="read-more">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single latestpost end -->
                    <p>{{$article->links()}}</p>
                </div>
            </div>
        </div>
@endsection
