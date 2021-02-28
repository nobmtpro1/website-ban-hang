        <footer>
            <!-- top footer area start -->
            <div class="top-footer-area">
                <div class="container">
                    <div class="row">
                        @foreach($staticpage as $s)
                        <div class="col-md-4 col-sm-4 ">
                            <div class="single-snap-footer">
                                <div class="snap-footer-title">
                                    <h4><a style="color: white" href="static/{{$s->slug}}">{{$s->title}}</a></h4>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- top footer area end -->
            <!-- info footer start -->
            <div class="info-footer">
                <div class="container">
                    <div class="row">
                        @foreach($config as $c)
                        <div class="col-md-3 col-sm-4">
                            <div class="info-fcontainer">
                                <div class="infof-icon">
                                    <i class="fa @switch($c->type)
                                                        @case('mailto:')
                                                                {{'fa-envelope' }}
                                                            @break

                                                        @case('link')
                                                            {{'fa-link'}}
                                                            @break
                                                        @case('tel:')
                                                            {{'fa-phone'}}
                                                            @break
                                                        @default
                                                            {{'fa-info-circle' }}
                                                    @endswitch"></i>
                                </div>
                                <div class="infof-content">
                                    <h3>{{$c->name}}</h3>
                                    @switch($c->type)


                                        @case('link')
                                            <p><a  class="text-light" href="{{$c->link}}">{{$c->content}}</a></p>
                                            @break
                                        @case('info')
                                            <p>{{$c->content}}</p>
                                            @break
                                        @default
                                            <p><a  class="text-light" href="{{$c->type}} {{$c->content}}">{{$c->content}}</a></p>
                                    @endswitch

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- info footer end -->

        </footer>
