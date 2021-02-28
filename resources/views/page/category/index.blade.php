@extends('layout.master')
@section('content')
        <div class="shop-with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- left sidebar start -->
                    <div class="col-md-3  text-left">
                        <div class="topbar-left">
                            <aside class="widge-topbar">
                                <div class="bar-title">
                                    <div class="bar-ping"><img src="frontend/img/bar-ping.png" alt=""></div>
                                    <h2>Shop by</h2>
                                </div>
                            </aside>
                            <aside class="sidebar-content ">
                                <div class="sidebar-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul class="sidebar-tags">
                                    @foreach($allcategory as $a)
                                    <li><a href="category/{{$a->c_slug}}">{{$a->c_name}}</a></li>
                                    @endforeach
                                </ul>
                            </aside>
                            @foreach($category->attr()->get()->where('a_parent_id',0)->where('status',1) as $b)
                            <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>{{$b->a_name}}</h6>
                                </div>
                                <ul class="sidebar-tags">
                                    @foreach($b->child->where('status',1) as $c)
                                 {{--    {{dd(http_build_query(array_merge(Request::query(), ['id['.$b->id.']' => 'value'])))}} --}}
                                    {{-- <li><a href="@if(!isset(request()->id[$c->id])){{request()->fullUrlWithQuery(['id['.$c->id.']'=>$c->id,'page'=>1])}}@else{{Url()->full()}}@endif">{{$c->a_name}}</a></li> --}}
                                    <li><a href="
                                        {{request()->fullUrlWithQuery(['id['.$b->id.']'=>$c->id,'page'=>1])}}
                                        ">{{$c->a_name}}
                                </a></li>
                                    @endforeach

                                </ul>
                            </aside>
                            @endforeach
                            {{-- {{dd($rq)}} --}}

                        </div>
                    </div>
                    <!-- left sidebar end -->
                    <!-- right sidebar start -->
                    <div class="col-md-9 ">
                        <!-- shop toolbar start -->
                        <div class="shop-content-area">
                            {{-- <div class="shop-toolbar">
                                <div class="col-md-4  nopadding-left text-left">

                                        <div class="orderby-wrapper">
                                            <label>Xếp theo</label>
                                            <select name="orderby" class="orderby">
                                                <option value="{{request()->fullUrlWithQuery(['orderby'=>'id DESC'])}}" selected="selected"><a href="{{request()->fullUrlWithQuery(['orderby'=>'id DESC'])}}">Mới nhất</a></option>
                                                <option value="p_buy DESC"><a href="{{request()->fullUrlWithQuery(['orderby'=>'p_buy DESC'])}}">Bán chạy nhất</a></option>


                                                <option value="p_price DESC"><a href="{{request()->fullUrlWithQuery(['orderby'=>'p_price DESC'])}}">Giá cao đến thấp</a></option>
                                                <option value="p_price ASC">Giá thấp đến cao</option>
                                            </select>
                                        </div>


                                </div>


                            </div> --}}
                            <div class="dropdown text-right">
                                          <button type="button" class="btn btn-dark btn-sm dropdown-toggle orderby" data-toggle="dropdown">
                                            Xếp theo
                                          </button>
                                          <div class="dropdown-menu">
                                           <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['orderby'=>'id DESC'])}}">Mới nhất</a>
                                                <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['orderby'=>'p_buy DESC'])}}">Bán chạy nhất</a>


                                                <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['orderby'=>'p_price DESC'])}}">Giá cao đến thấp</a>
                                                <a class="dropdown-item" href="{{request()->fullUrlWithQuery(['orderby'=>'p_price ASC'])}}">Giá thấp đến cao</a>
                                          </div>
                                        </div>
                        </div>
                        <!-- shop toolbar end -->
                        <!-- product-row start -->
                        <div class="tab-content">
                            @if(request()->id)
                            {{-- {{dd(request()->id)}} --}}
                            @foreach(request('id') as $key=> $id)

                            <a onclick="removeget({{$key}},{{$id}})" href="javascript:" class="btn btn-dark btn-sm m-1" >{{$attrchild($id)}} <i class="fa fa-times"></i></a>
                            @endforeach
                            @endif
                            <div class="tab-pane fade in active" id="shop-grid-tab">
                                <div class="row">
                                     @foreach($product as $p)
                                    <div class="shop-product-tab first-sale col-xl-3 col-lg-3  col-sm-6">

                                        <div class="   ">
                                            <div class="two-product">
                                                <!-- single-product start -->
                                                <div class="single-product">

                                                    <div class="product-img">
                                                        <div style="height: 20rem">
                                                            <a href="product/{{$p->p_slug}}">
                                                            <img style="height: 100%"  class="primary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                            <img style="height: 100%"   class="secondary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                        </a>
                                                        </div>


                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">

                                                                    <div class="compare-button">
                                                                        <a onclick="addtocart({{$p->id}})" href="javascript:" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="product/{{$p->p_slug}}">{{$p->p_name}}</a></h2>
                                                         <p><span class="new-price">@if($p->p_sale>0)<del> {{number_format($p->p_price)}}đ </del>&nbsp<span class="text-danger">
                                                            @if($p->p_sale_type=='%')
                                                            {{number_format($p->p_price*(100-$p->p_sale)/100)}}đ
                                                            @else
                                                            {{number_format($p->p_price-$p->p_sale)}}đ
                                                            @endif
                                                        </span> @else  {{number_format($p->p_price)}}đ@endif</span></p>
                                                         <div class="rating-price center-block" ><form action="">
<?php
        $review = $p->review()->where('status',1)->orderBy('id','desc')->get()->toArray();
        $star = [];
        foreach ($review as $key => $value) {
            $star[] = $value['star'];
        }
        $average = 0;
        if (count($star)>0) {

        $average =array_sum($star)/count($star);
        }
?>
                                        <fieldset disabled="" class="a center-block" style="margin-left: 15px">
    <input @if($average > 4.75 &&$average <= 5.25){{'checked'}}@endif type="radio" id="" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input @if($average > 4.25 &&$average <= 4.75){{'checked'}}@endif type="radio" id="" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input @if($average > 3.75 &&$average <= 4.25){{'checked'}}@endif type="radio" id="" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input @if($average > 3.25 &&$average <= 3.75){{'checked'}}@endif type="radio" id="" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input @if($average > 2.75 &&$average <= 3.25){{'checked'}}@endif  type="radio" id="" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input @if($average > 2.25 &&$average <= 2.75){{'checked'}}@endif type="radio" id="" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input @if($average > 1.75 &&$average <= 2.25){{'checked'}}@endif type="radio" id="" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input @if($average > 1.25 &&$average <= 1.75){{'checked'}}@endif type="radio" id="" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input @if($average > 0.75 &&$average <= 1.25){{'checked'}}@endif type="radio" id="" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input @if($average >= 0.5 &&$average <= 0.75){{'checked'}}@endif type="radio" id="" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset> <p>({{count($review)}} đánh giá)</p> </form></div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                        </div>


                                    </div>
                                     @endforeach
                                                                  </div>

                                <!-- product-row end -->

                            </div> {{$product->links()}}


                        </div>
                    </div>
                    <!-- right sidebar end -->
                </div>
            </div>
        </div>
        <script type="text/javascript">
                function removeget(key,id) {

                        document.location.href=window.location.href.replace(encodeURI('id['+key+']'+"="+id),'')

                }
        </script>
@endsection
