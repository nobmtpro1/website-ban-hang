@extends('layout.master')
@section('css')

@endsection
@section('content')
        <div class="slider-area an-1 hm-1">
             <!-- slider -->
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="">
                    @foreach($slide as $s)
                    <a href="{{$s->link}}"><img src="upload/{{$s->image}}" alt="" title="#slider-direction-{{$s->sort}}"  /></a>
                    @endforeach
                </div>
                <!-- direction 1 -->
                @foreach($slide as $s)
                <div id="slider-direction-{{$s->sort}}" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h2 class="title1 text-dark">{{$s->title}}</h2>
                            <h4 class="title1 text-dark" >{{$s->content}}</h4>

                            <a class="btn btn-outline-dark" href="{{$s->link}}">Xem thêm... </a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- slider end-->
        </div>


        <!-- area title start -->
        @foreach($allcategory as $a)
        <div  class="our-product-area new-product m-5">
                <div class="area-title">
                    <h2>{{$a->c_name}}</h2>
                </div>
                <!-- area title end -->
                <!-- our-product area start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="features-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active"><a href="#new_{{$a->id}}" data-toggle="tab">Mới ra mắt </a></li>
                                <li role="presentation"><a href="#feature_{{$a->id}}" data-toggle="tab">Nổi bật </a></li>
                                <li role="presentation"><a href="#buy_{{$a->id}}" data-toggle="tab">Mua nhiều </a></li>
                            </ul>
                            <!-- Tab pans -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="new_{{$a->id}}">
                                    <div class="row">
                                        {{-- <div class="features-curosel">
 --}}                                            @foreach($a->product()->where('p_status',1)->orderByDesc('id')->limit(18)->get() as $p)
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <div style="height: 20rem">
                                                            <a href="product/{{$p->p_slug}}">
                                                            <img style="height: 100%" class="primary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                            <img style="height: 100%" class="secondary-image" src="upload/{{$p->p_avatar}}" alt="" />
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
                                                        <div class="price-box">

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
                                                <!-- single-product start -->


                                                <!-- single-product end -->
                                            </div>
                                            @endforeach
                                            <!-- single-product end -->
                                        {{-- </div>
 --}}                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in " id="feature_{{$a->id}}">
                                    <div class="row">
                                        {{-- <div class="features-curosel">
 --}}                                            @foreach($a->product()->where('p_status',1)->where('p_hot',1)->orderByDesc('id')->limit(18)->get() as $p)
                                            <div class="col-lg-2 col-md-2">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="product/{{$p->p_slug}}">
                                                            <img style="" class="primary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                            <img style="" class="secondary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                        </a>

                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">

                                                                    <div class="compare-button">
                                                                        <a onclick="addtocart({{$p->id}})" href="javascript:" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="price-box">

                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="product/{{$p->p_slug}}">{{$p->p_name}}</a></h2>
                                                        <p><span class="new-price">@if($p->p_sale>0)<del> {{number_format($p->p_price)}}đ </del>&nbsp<span class="text-danger">{{number_format($p->p_sale)}}đ</span> @else  {{number_format($p->p_price)}}đ@endif</span></p>
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
</fieldset> <p>({{count($review)}} đánh giá)</p></form> </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->


                                                <!-- single-product end -->
                                            </div>
                                            @endforeach
                                            <!-- single-product end -->
                                        {{-- </div>
 --}}                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in " id="buy_{{$a->id}}">
                                    <div class="row">
                                        {{-- <div class="features-curosel">
 --}}                                            @foreach($a->product()->where('p_status',1)->orderByDesc('p_buy')->limit(18)->get() as $p)
                                            <div class="col-lg-2 col-md-2">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="product/{{$p->p_slug}}">
                                                            <img style="" class="primary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                            <img style="" class="secondary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                        </a>

                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">

                                                                    <div class="compare-button">
                                                                        <a onclick="addtocart({{$p->id}})" href="javascript:" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="price-box">

                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="product/{{$p->p_slug}}">{{$p->p_name}}</a></h2>
                                                        <p><span class="new-price">@if($p->p_sale>0)<del> {{number_format($p->p_price)}}đ </del>&nbsp<span class="text-danger">{{number_format($p->p_sale)}}đ</span> @else  {{number_format($p->p_price)}}đ@endif</span></p>
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
                                                <!-- single-product start -->


                                                <!-- single-product end -->
                                            </div>
                                            @endforeach
                                            <!-- single-product end -->
                                        {{-- </div>
 --}}                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <p><a style="text-decoration: none;" href="category/{{$a->c_slug}}">Xem thêm </a></p>
        </div>

        @endforeach                <!-- our-product area end -->
@endsection
