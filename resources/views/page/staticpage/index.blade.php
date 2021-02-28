@extends('layout.master')
@section('content')
<div class="area-title">
                    <h2>{{$content->title}}</h2>
                </div>
    <div class="blog-area">

            <div class="container">

                <div class="row">
                    <!-- single latestpost start -->
                    <div class="col-md-12">
                        <div class="single-post"><br>
                            <h2></h2><br>


                            <div class="post-thumb-info blog-det ">

                                <div class="postexcerpt ">

                                    <p>{!!$content->content!!}</p>
                                </div>
                            </div>


                        </div>
                        <div class="blog-comment-wrapper">

                        </div>
                    </div>
                   {{--  <div class="col-md-3">
                       <div class="blog-sidebar">
                        <div class="blog-sidebar-inner"></div>

                            <!-- blog sidebar single-end -->
                           <div class="blog-sidebar-inner">
                               <h2>recent post</h2>
                               <div class="blog-sidebar-inner">
                                   <ul>
                                    @foreach($recentpost as $r)
                                       <li><a href="contentdetail/{{$r->slug}}">{{$r->name}}</a></li>
                                     @endforeach
                                   </ul>
                               </div>
                           </div> <!-- blog sidebar single-end -->
                           <div class="blog-sidebar-inner">
                               <h2>categories</h2>
                               <div class="blog-sidebar-inner">
                                   <ul>
                                    @foreach($contentcategory as $a)
                                       <li><a href="contentcategory/{{$a->slug}}">{{$a->name}}</a></li>
                                      @endforeach
                                   </ul>
                               </div>
                           </div> <!-- blog sidebar single-end -->

                           <div class="blog-sidebar-inner">
                               <h2>tags</h2>
                               <div class="blog-sidebar-inner tags">
                                @foreach($keyword as $k)
                                    <a href="">{{$k->k_name}}</a>
                                 @endforeach
                               </div>
                           </div> <!-- blog sidebar single-end -->
                       </div>
                    </div> --}}
                    <!-- single latestpost end -->
                </div>
            </div>
        </div>
@endsection
