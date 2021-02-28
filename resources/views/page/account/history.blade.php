@extends('layout.master')
@section('content')
<div class="container">
    <a class="btn btn-primary " href="account/info">Thông tin</a>
    <a class="btn btn-info" href="account/history">Lịch sử mua hàng</a>
    <br><hr><br>


  <h3>Danh sách đơn hàng</h3>

  <table class="table">
    <thead>
      <tr>
        <th>Mã đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tổng tiền</th>
        <th>Tình trạng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($transaction as $t)
      <tr>
        <td>{{$t->id}}</td>
        <td>{{$t->created_at}}</td>
        <td>{{$t->total_money}}</td>
        <td>{{$t->getstatus('name')}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
<br>
@endsection
