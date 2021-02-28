@extends('layout.master')
@section('content')
<div class="area-title">
                    <h2>{{$article->articlecategory->name}}</h2>
                </div>
    <div class="blog-area">

            <div class="container">

                <div class="row">
                    <!-- single latestpost start -->
                    <div class="col-md-9">
                        <div class="single-post"><br>
                            <h2>{{$article->name}}</h2><br>
                            <div class="post-time ">

                                    <span>Ngày đăng: </span>
                                    <span><small>{{$article->created_at}}</small></span>
                                </div>
                            <div class=" p-4">
                                <img  style="padding-left: 30px; padding-right: 40px;" src="upload/{{$article->avatar}}" alt="" />
                            </div>
                            <div class="post-thumb-info blog-det">

                                <div class="postexcerpt ">
                                    <h4>{{$article->description}}</h4>
                                    <p>{!!$article->content!!}</p>
                                </div>
                            </div>

                            <div class="blog-social-sharing text-center mb-40">
                                <h3>Share this post</h3>
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- comment area start -->
                                <div class="comment-section">

                                </div>
                                <!-- comment area start -->
                        </div>
                        <div class="blog-comment-wrapper">

                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="blog-sidebar">
                        <div class="blog-sidebar-inner"></div>

                            <!-- blog sidebar single-end -->
                           <div class="blog-sidebar-inner">
                               <h2>recent post</h2>
                               <div class="blog-sidebar-inner">
                                   <ul>
                                    @foreach($recentpost as $r)
                                       <li><a href="articledetail/{{$r->slug}}">{{$r->name}}</a></li>
                                     @endforeach
                                   </ul>
                               </div>
                           </div> <!-- blog sidebar single-end -->
                           <div class="blog-sidebar-inner">
                               <h2>categories</h2>
                               <div class="blog-sidebar-inner">
                                   <ul>
                                    @foreach($articlecategory as $a)
                                       <li><a href="articlecategory/{{$a->slug}}">{{$a->name}}</a></li>
                                      @endforeach
                                   </ul>
                               </div>
                           </div> <!-- blog sidebar single-end -->


                       </div>
                    </div>
                    <!-- single latestpost end -->
                </div>
            </div>
        </div>
@endsection
