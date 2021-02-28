@extends('layout.master')

@section('content')
<br>
<div class="container m-4 p-4">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
  <h2>Đăng ký</h2>
  <form action="account/register" method="post" >@csrf
    @if(count($errors)>0)
    @foreach($errors->all() as $e)
    <p class="alert alert-danger">{{$e}}</p>
    @endforeach
    @endif
    @if(!empty(session('message')))
    <p class="alert alert-success">{{session('message')}}</p>
    @endif
    <div class="form-group">
      <label for="email">Tên:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Tên" name="name" required="">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter mật khẩu" name="password" required="">
    </div>
    <div class="form-group">
      <label for="email">Điện thoại:</label>
      <input type="tel" class="form-control" id="email" placeholder="Enter SĐT" name="phone" required="">
    </div>

    <button type="submit" class="btn btn-primary">Đăng ký</button>
  </form>
</div>
</div>
<br>
@endsection
