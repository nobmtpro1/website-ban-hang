<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>

  <style type="text/css">
  </style>
</head>
<body style="margin:0; padding:0; background-color:#F2F2F2;">
  <center>
    <h1>Xin cảm ơn bạn đã mua hàng tại Larovo!</h1>
    <p>Chi tiết đơn hàng:</p>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F2F2">
        <tr>

            <th>Product name</th>

            <th>Unit Price</th>
            <th>Qty</th>
            <th>Subtotal</th>

        </tr>
          @foreach($order as $c)
                                    <tr style="text-align: center;">

                                        <td>
                                            <h6>{{$c->name}}</h6>
                                        </td>

                                        <td>
                                            <div class="cart-price">${{number_format($c->price)}}</div>
                                            <p>@if($c->options->saletype=='%')
                                                (- {{$c->options->sale}}%)
                                                @else
                                                (- ${{$c->options->sale}})
                                            @endif</p>
                                        </td>
                                        <td>

                                                <input type="number"  value="{{$c->qty}}" name="qty[]" disabled="">


                                        </td>
                                        <td>
                                            <div class="cart-subtotal">${{number_format($c->qty*$c->price)}}</div>
                                        </td>
                                        <td><a href="cart/delete/{{$c->rowId}}"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    @endforeach
    </table>
    <p class="cartSubT">Subtotal:    <span>${{Cart::total()}}</span></p>
                                <p class="cartSubT">Discount:    <span>${{Cart::discount()}}</span></p>
                                <p class="cartSubT">Grand total:    <span>${{Cart::initial()}}</span></p>
  </center>

</body>
</html>
