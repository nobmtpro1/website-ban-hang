            <header class="short-stor">
            <div class="container-fluid">
                <div class="row">
                    <!-- logo start -->
                    <div class="col-md-3 col-sm-12 text-center nopadding-right">
                        <div class="top-logo">
                            <a href=""><img src="frontend/img/logo.gif" alt="" /></a>
                        </div>
                    </div>
                    <!-- logo end -->
                    <!-- mainmenu area start -->
                    <div class="col-lg-6 text-center ">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li class="expand"><a href="">Home &nbsp&nbsp&nbsp<i class="fa fa-caret-down" ></i></a>
                                        <ul class="restrain sub-menu">
                                            @foreach($allarticlecategory as $a)
                                            <li><a href="articlecategory/{{$a->slug}}">{{$a->name}}</a></li>
                                            @endforeach
                                            @foreach($staticpage->where('position',1) as $s)
                                            <li><a href="static/{{$s->slug}}">{{$s->title}}</a></li>
                                            @endforeach
                                            <li><a href="contact">Liên hệ</a></li>
                                        </ul>
                                    </li>

                                    @foreach($allcategory as $a)
                                    <li class="expand"><a href="category/{{$a->c_slug}}">{{$a->c_name}}</a>
                                        {{-- <ul class="restrain sub-menu">
                                            @foreach($a->attr->where('a_name','Thương hiệu')->child as $b)
                                            <li><a href="{{$a->c_slug}}/{{$b->a_slug}}">{{$b->a_name}}</a></li>
                                            @endforeach
                                        </ul> --}}
                                    </li>
                                    @endforeach



                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu start -->
                        <div class="row">
                            <div class="col-sm-12 mobile-menu-area">
                                <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                                    <span class="mobile-menu-title">Menu</span>
                                    <nav>
                                        <ul>
                                            <li><a href="">Home</a>
                                                <ul>
                                                    @foreach($allarticlecategory as $a)
                                            <li><a href="articlecategory/{{$a->slug}}">{{$a->name}}</a></li>
                                            @endforeach
                                            @foreach($staticpage->where('position',1) as $s)
                                            <li><a href="static/{{$s->slug}}">{{$s->title}}</a></li>
                                            @endforeach
                                            <li><a href="contact">Liên hệ</a></li>
                                                </ul>
                                            </li>
                                          @foreach($allcategory as $a)
                                    <li class=""><a href="category/{{$a->c_slug}}">{{$a->c_name}}</a>
                                        {{-- <ul class="restrain sub-menu">
                                            @foreach($a->attr->where('a_name','Thương hiệu')->child as $b)
                                            <li><a href="{{$a->c_slug}}/{{$b->a_slug}}">{{$b->a_name}}</a></li>
                                            @endforeach
                                        </ul> --}}
                                    </li>
                                    @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- mobile menu end -->
                    </div>
                    <!-- mainmenu area end -->
                    <!-- top details area start -->
                    <div class="col-md-3 col-sm-12 text-center nopadding-left">
                        <div class="top-logo ">
                            @if(!Auth::check())


                                    <a class="text-dark" href="account/login">Đăng nhập</a>



                                    <a class="text-dark" href="account/register">&nbsp Đăng ký</a>


                                @else

                                    <span>Xin chào </span><a class="text-dark" href="account/info"> {{Auth::user()->name}}!</a>


                                    <a class="text-dark" href="account/logout">&nbsp Đăng xuất</a>



                                @endif
                        </div>
                    </div>
                        {{--  <div class="col-md-3">

                            </div> --}}
                    <!-- top details area end -->
                </div>
                <div class="row">

                        <div class="col-md-9"></div>
                            <!-- language division start -->

                            <!-- language division end -->
                            <!-- addcart top start -->
                            <div class="col-md-1 text-right">
                                <div class=" expand">
                                    <div class="text-right " id="listcart">
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
                                                        <span class="quantitys"><strong>{{$c->qty}}</strong>x<span>{{number_format($c->price)}}đ</span></span>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <p class="total">Tổng tiền: <span class="amount">{{Cart::subtotal()}}đ</span></p>
                                            <p class="buttons">
                                                <a href="cart/list" class="button">Thanh toán</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- addcart top start -->
                            <!-- search divition start -->
                            <div class="col-md-1 text-right">
                                <div class="expand ">
                                    <i class=" fa fa-search"></i>
                                    <div  class="product-search restrain ">
                                        <div  class="col-xs-12   ">
                                            <form  action="formsearch" id="searchform" method="get">
                                                <div class="">
                                                    <input name="keyword" id="search" type="text" class="form-control " style="width: auto;"  placeholder="Search product...">

                                                    <span class="float-right">
                                                        <button type="submit" class="button "><i class="fa fa-search"></i></button>

                                                    </span>
                                                </div>

                                            </form>
                                            <div style="color: white; margin-left: 20px " id="result">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                    </div>
            </div>
        </header>
