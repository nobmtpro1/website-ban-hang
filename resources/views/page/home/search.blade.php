@extends('layout.master')
@section('content')
<div class="area-title">
                    <h2>Kết quả</h2>
                </div>

    <div class="blog-area">

            <div class="container">
                <p><b>Từ khóa: {{$keyword}}</b></p>
                <div class="row">
                    <!-- single latestpost start -->
                    @foreach($result as $p)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="product/{{$p->p_slug}}">
                                                            <img style="height: 150px" class="primary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                            <img style="height: 150px" class="secondary-image" src="upload/{{$p->p_avatar}}" alt="" />
                                                        </a>

                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">

                                                                    <div class="compare-button">
                                                                        <a href="cart/add/{{$p->id}}" title="Add to Cart"><i class="icon-bag"></i></a>
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
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->


                                                <!-- single-product end -->
                                            </div>
                    @endforeach
                    <!-- single latestpost end -->
                   {{--  <p>{{$article->links()}}</p> --}}
                </div>
            </div>
        </div>
@endsection
