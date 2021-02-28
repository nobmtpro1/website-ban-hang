@extends('layout.master')
@section('content')
    <div class="cart-area-start">
            <div class="container">
                @if(!empty(session('message')))
                            <p class="alert alert-success" >{{session('message')}}</p>
                @endif
                @if(!empty(session('message2')))
                            <p class="alert alert-danger" >{{session('message2')}}</p>
                @endif
                <!-- Shopping Cart Table -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class=" table table-image">
                                <thead>
                                    <tr>
                                        <th class=" text-center">Hình ảnh</th>
                                        <th class=" text-center">Tên sản phẩm</th>

                                        <th class=" text-center">Đơn giá</th>
                                        <th class=" text-center">Số lượng</th>
                                        <th class=" text-center">Tổng tiền</th>
                                        <th class=" text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="cart/update" method="post">@csrf
                                    @foreach(Cart::content() as $c)
                                    <tr>
                                        <td class="w-25 text-center" >
                                            <a  href="product/{{$c->options->slug}}"><img style="vertical-align: middle;" src="upload/{{$c->options->image}}" class=" img-fluid " alt=""/></a>
                                        </td>
                                        <td class="text-center">
                                            <h6>{{$c->name}}</h6>
                                        </td>

                                        <td class="text-center">
                                            <div class="cart-price">{{number_format($c->options->oprice)}}đ</div>
                                            <p>@if($c->options->saletype=='%')
                                                (- {{$c->options->sale}}%)
                                                @else
                                                (- {{$c->options->sale}}đ)
                                            @endif</p>
                                        </td>
                                        <td class="col-xs-1">

                                                <input class="form-control" min="1"  type="number"  value="{{$c->qty}}" name="qty[]">
                                                <input hidden="" type="text" value="{{$c->rowId}}" name="rowId[]">

                                        </td>
                                        <td class="text-center">
                                            <div class="cart-subtotal">{{number_format($c->qty*$c->price)}}đ</div>
                                        </td>
                                        <td class="text-center"><a href="cart/delete/{{$c->rowId}}"><i class="fa fa-times text-dark"></i></a></td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td></td>
                                       <td>
                                                <div ><a href="cart/destroy" class="btn btn-dark btn-block" >Xóa giỏ hàng</a></div>
                                          </td><td>
                                                <div ><button type="submit" class="btn btn-dark btn-block" >Cập nhật giỏ hàng</button></div></form>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        </td><td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Shopping Cart Table -->
                <!-- Shopping Coupon -->
                <div class="row">
                    <div class="col-md-12 vendee-clue">
                        <!-- Shopping Estimate -->
                        <div class="shipping coupon">
                            <h5>Thông tin đặt hàng</h5>

                            <form action="cart/pay" method="post">@csrf
                                <div class="shippingTitle"><p>Họ và tên</p></div>
                                <div class="selectOption">
                                    <input type="text" name="name" value="@if(Auth::check()){{Auth::user()->name}}@endif" required="">
                                </div>
                                <div class="shippingTitle"><p>Email</p></div>
                                <div class="selectOption">
                                    <input type="text" name="email" value="@if(Auth::check()){{Auth::user()->email}}@endif" required>
                                </div>
                                <div class="shippingTitle"><p>Địa chỉ</p></div>
                                <div class="selectOption">
                                    <input type="text" name="address" value="@if(Auth::check()){{Auth::user()->address}}@endif" required>
                                </div>
                                <div class="shippingTitle"><p>SĐT</p></div>
                                <div class="selectOption">
                                    <input type="tel" name="phone"  value="@if(Auth::check()){{Auth::user()->phone}}@endif" required>
                                </div>
                                <div class="shippingTitle"><p>Ghi chú</p></div>
                                <div class="selectOption">
                                    <textarea class="form-control" name="note" rows="3" cols="43" style="resize: none" ></textarea>
                                </div>
                                <br>



                        </div>
                        <!-- Shopping Estimate -->
                        <!-- Shopping Code -->

                        <!-- Shopping Code -->
                        <!-- Shopping Totals -->
                        <div class="shipping coupon cart-totals">
                            <ul>

                                <li class="cartSubT">Tổng tiền gốc:    <span>{{Cart::pricetotal()}}đ</span></li>
                                <li class="cartSubT">Giảm giá:    <span>

                                    {{Cart::discount()}}đ
                            </span></li>
                                <li class="cartSubT">Tổng tiền phải thanh toán:    <span>

                                {{Cart::subtotal()}}đ
                            </span></li>
                            </ul>
                            <button class="btn btn-block btn-dark" type="submit" value="1" name="type">Thanh toán khi nhận hàng</button>

                                <a class="btn btn-block btn-dark text-light"  value="2" name="type">Thanh toán online</a><br>

                        </div>
                        </form>
                         <div class="shipping coupon hidden-sm">
                            <div class=""><h5>Mã giảm giá</h5></div>
                            <p>Nhập mã giảm giá nếu có.</p>
                                <form action="cart/setcoupon" method="post">@csrf
                                <input type="text" class="coupon-input" name="coupon">
                                <button class="btn btn-dark btn-sm m-2" type="submit">Áp dụng </button>
                                </form>
                        </div>
                        <!-- Shopping Totals -->
                    </div>
                </div>

                <!-- Shopping Coupon -->
            </div>
        </div>
@endsection
