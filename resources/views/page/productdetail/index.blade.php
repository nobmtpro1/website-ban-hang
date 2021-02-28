@extends('layout.master')
@section('content')
            <div class="product-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="zoomWrapper">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="upload/{{$product->p_avatar}}" data-zoom-image="frontend/img/product-details/ex-big-1-1.jpg" alt="big-1">
                                </a>
                            </div>
                            <div class="single-zoom-thumb" >
                                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                        <?php $i=0?>
                                        @foreach($product->album as $a)
                                        <?php $i++ ?>
                                        <div class="carousel-item col-md-3  @if($i==1){{'active'}}@endif">
                                           <div class="panel panel-default">
                                              <div class="panel-thumbnail">
                                                <!-- Trigger the Modal -->
                                               <img  onclick="zoom({{$a->id}})" id="myImg-{{$a->id}}" src="upload/{{$a->image}}"  width="300" height="200">


                                              </div>

                                            </div>

                                        </div>
                                        @endforeach
                                        @foreach($product->album as $a)
                                        <!-- The Modal -->
                                                <div id="myModal-{{$a->id}}" class="modal " style=" ">

                                                  <!-- The Close Button -->
                                                  <span class="close" onclick="document.getElementById('myModal-{{$a->id}}').style.display='none'">&times;</span>

                                                  <!-- Modal Content (The Image) -->
                                                  <img class="modal-content" id="img01-{{$a->id}}">

                                                  <!-- Modal Caption (Image Text) -->
                                                  <div id="caption-{{$a->id}}"></div>
                                                </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="product-list-wrapper">
                            <div class="single-product">
                                <div class="product-content">
                                    <h2 class="product-name"><a >{{$product->p_name}}</a></h2>
                                    <div class="rating-price"><form action="">
                                        <fieldset disabled="" class="a">
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
</fieldset>  </form></div><p>({{count($review)}} đánh giá)</p>
                                        <div class="price-boxes">
                                            <span class="new-price">@if($product->p_sale>0)<del> {{number_format($product->p_price)}}đ </del>&nbsp<span class="text-danger">
                                                            @if($product->p_sale_type=='%')
                                                            {{number_format($product->p_price*(100-$product->p_sale)/100)}}đ
                                                            @else
                                                            {{number_format($product->p_price-$product->p_sale)}}đ
                                                            @endif
                                                        </span> @else  {{number_format($product->p_price)}}đ@endif</span>
                                        </div>
                                    </div>


                                    <div class="actions-e">
                                        <div class="action-buttons-single">

                                            <div class="add-to-cart">
                                                <a onclick="addtocart({{$product->id}})" href="javascript:">Thêm vào giỏ hàng</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="singl-share">
                                        <p><b>Đặc điểm:</b> </p>
                                        <span>
                                            @foreach($product->attr as $a)
                                               {{$a->parent->a_name}}: {{$a->a_name}},
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                <div class="  col-md-12">
                    <div class="single-product-tab">
                          <!-- Nav tabs -->
                        {{-- <ul class="details-tab">
                            <li class="active"><a href="#home" data-toggle="tab">Description</a></li>
                            <li class=""><a href="#messages" data-toggle="tab"> Review ({{count($review)}})</a></li>
                        </ul> --}}
                          <!-- Tab panes -->
                       {{--  <div class="tab-content"> --}}<hr>
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="product-tab-content">
                                    <h4>Chi tiết:</h4>
                                    <div>{!!$product->p_content!!}</div>
                                </div>
                            </div>
                            <hr>
                         {{--    <div role="tabpanel" class="tab-pane" id="messages"> --}}
                                {{-- <div class="single-post-comments col-md-6 col-md-offset-3">
                                    <div class="comments-area"> --}}
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                        <h4 class="comment-reply-title">{{count($review)}} đánh giá </h4>
                                        <div class="comments-list col-md-10">
                                            <ul id="listcomment">
                                                 @foreach($review2 as $r)
                                                <li>
                                                    <div class="comments-details">


                                                        <div class="comments-content-wrap">
                                                            <span>
                                                                <b><a >{{$r->user->name}} - </a></b>
                                                                <span class="post-time">{{$r->created_at}}</span>
                                                            </span>
                                                            <p><form action="">
                                                                <fieldset disabled="" class="b">
    <input @if($r->star > 4.75 &&$r->star <= 5.25){{'checked'}}@endif type="radio"  class="i"  name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input @if($r->star > 4.25 &&$r->star <= 4.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input @if($r->star > 3.75 &&$r->star <= 4.25){{'checked'}}@endif type="radio"  class="i"  name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input @if($r->star > 3.25 &&$r->star <= 3.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input @if($r->star > 2.75 &&$r->star <= 3.25){{'checked'}}@endif  type="radio"  class="i"  name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input @if($r->star > 2.25 &&$r->star <= 2.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input @if($r->star > 1.75 &&$r->star <= 2.25){{'checked'}}@endif type="radio"  class="i" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input @if($r->star > 1.25 &&$r->star <= 1.75){{'checked'}}@endif type="radio"  class="i"  name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input @if($r->star > 0.75 &&$r->star <= 1.25){{'checked'}}@endif type="radio"  class="i"  name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input @if($r->star >= 0.5 &&$r->star <= 0.75){{'checked'}}@endif type="radio" class="i" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset></form>
                                                            </p>
                                                            <p>&nbsp {{$r->content}}</p>
                                                        </div>

                                                    </div>
                                                </li>
                                                @endforeach
                                                <div class="text-center">{{$review2->links()}}</div>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="comment-respond">
                                        <h5 class="comment-reply-title col-md-12">Đánh giá của bạn:</h5>

                                        @if(Auth::check())
                                        <form action="review/add" method="post" >@csrf
                                            <div class="row">

                                                <div class="col-md-12">


<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
                                                </div>
                                                <div class="col-md-12 comment-form-comment">
                                                    <p>Nội dung:</p>
                                                    <textarea id="message" cols="30" rows="10" name="content"></textarea>
                                                    <input hidden="" name="product_id" type="text" value="{{$product->id}}">
                                                    <input type="submit" value="Gửi">
                                                </div>
                                            </div>
                                        </form>
                                        @else
                                            <p class="col-md-12">Bạn phải <a href="account/login" class="text-primary">đăng nhập</a> để thực hiện đánh giá.</p>
                                        @endif
                                    </div>
                                </div>
                           {{--  </div> --}}
                    {{--     </div> --}}
                  {{--   </div> --}}
                </div>
            </div>
        </div>
        <div class="our-product-area new-product">
            <div class="container">
                <div class="area-title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
                <!-- our-product area start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="features-curosel">
                                <!-- single-product start -->
                                @foreach($productsuggest     as $n)
                                <div class="col-lg-12 col-md-12">
                                    <div class="single-product first-sale">
                                        <div class="product-img">
                                            <a href="product/{{$n->p_slug}}">
                                                <img style="" class="primary-image" src="upload/{{$n->p_avatar}}" alt="" />
                                                <img style="" class="secondary-image" src="upload/{{$n->p_avatar}}" alt="" />
                                            </a>

                                            <div class="actions">
                                                <div class="action-buttons">
                                                    <div class="add-to-links">

                                                        <div class="compare-button">
                                                            <a onclick="addtocart({{$n->id}})" href="javascript:" title="Add to Cart"><i class="icon-bag"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="price-box">

                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2 class="product-name"><a href="product/{{$n->p_slug}}">{{$n->p_name}}</a></h2>
                                            <p> <span class="new-price">@if($n->p_sale>0)<del> {{number_format($n->p_price)}}đ </del>&nbsp<span class="text-danger">
                                                            @if($n->p_sale_type=='%')
                                                            {{number_format($n->p_price*(100-$n->p_sale)/100)}}đ
                                                            @else
                                                            {{number_format($n->p_price-$n->p_sale)}}đ
                                                            @endif
                                                        </span> @else  {{number_format($n->p_price)}}đ@endif</span></p>
                                            <div class="rating-price center-block" ><form action="">
<?php
        $review = $n->review()->where('status',1)->orderBy('id','desc')->get()->toArray();
        $star = [];
        foreach ($review as $key => $value) {
            $star[] = $value['star'];
        }
        $average = 0;
        if (count($star)>0) {

        $average =array_sum($star)/count($star);
        }
?>
                                        <fieldset disabled="" class="a center-block" style="margin-left: 50px">
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
</fieldset> </form></div><p>({{count($review)}} đánh giá)</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- single-product end -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-product area end -->
            </div>
        </div>
        <script>

     $(document).ready(function(){

         $(document).on('click', '.pagination a', function(event){
          event.preventDefault();
          var page = $(this).attr('href').split('page=')[1];
          fetch_data(page);
         });

         function fetch_data(page)
         {
            if (window.location.href.includes("?")) {
              var  url = window.location.href+'&page='+ page
            }else{
               var url = window.location.href+'?page='+ page
            }

          $.get(url,function (data) {
                        $('#listcomment').html(data);

                    })
         }

        });
     function zoom(id) {
                // Get the modal
            var modal = document.getElementById('myModal-'+id);

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myImg-'+id);
            var modalImg = document.getElementById("img01-"+id);
            var captionText = document.getElementById("caption-"+id);
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                modalImg.alt = this.alt;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
}
     }

    </script>


@endsection
