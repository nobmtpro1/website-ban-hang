
@foreach ($order as $o)

                  <tr>
                                    <td>{{$o->id}}</td>
                                    <td>{{$o->product->p_name}}</td>
                                    <td><img width='100px' src='upload/{{$o->product->p_avatar}}' ></td>
                                    <td>{{number_format($o->product->p_price)}}đ
                                        @if($o->product->p_sale_type =='%')
                                        ({{-$o->product->p_sale}}%)
                                        @else
                                         ({{-$o->product->p_sale}}đ)
                                    @endif</td>
                                    <td>{{$o->qty}}</td>
                                    <td>@if($o->product->p_sale_type =='%'){{number_format($o->product->p_price*$o->qty*(100-$o->product->p_sale)/100)}}đ@else {{number_format(($o->product->p_price-$o->product->p_sale)*$o->qty)}}đ@endif</td>

                                  </tr>
           @endforeach
