<div class="cart-toggler ">
                                            <a  href="cart/list"><i class="icon-bag">({{Cart::count()}})</i></a>

                                        </div>

                                        <div class=" restrain small-cart-content" >
                                            <ul class="cart-list">
                                                @foreach(Cart::content() as $c)
                                                <li>
                                                    <a class="sm-cart-product" href="product-details.html">
                                                        <img style="height: 50px; width: 80px" src="upload/{{$c->options->image}}" alt="">
                                                    </a>
                                                    <div class="small-cart-detail">
                                                        <a class="remove" href="cart/delete/{{$c->rowId}}"><i class="fa fa-times-circle"></i></a>

                                                        <a class="small-cart-name" href="product/{{$c->slug}}">{{$c->name}}</a>
                                                        <span class="quantitys"><strong>{{$c->qty}}</strong>x<span>${{number_format($c->price)}}</span></span>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <p class="total">Tổng tiền: <span class="amount">${{Cart::subtotal()}}</span></p>
                                            <p class="buttons">
                                                <a href="cart/list" class="button">Thanh toán</a>
                                            </p>
                                        </div>
