@extends('layout.master')

@section('content')
<br>
<div class="container m-4 p-4">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
  <h2>Đăng nhập</h2>
  <form action="account/login" method="post" >@csrf
    @if(count($errors)>0)
    @foreach($errors->all() as $e)
    <p class="alert alert-danger">{{$e}}</p>
    @endforeach
    @endif
    @if(!empty(session('message')))
    <p class="alert alert-success">{{session('message')}}</p>
    @endif

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter mật khẩu" name="password" required="">
    </div>

    <div class="row">
        <div class="col-md-6">
            <button type="submit" class="btn btn-dark">Đăng nhập</button>
        </div>
        <div class="col-md-6">
            <a href="account/forgot-password">Quên mật khẩu?</a>
        </div>
    </div>

  </form>
  <br>
  <p > <a  href="google/redirect"><span class="fa fa-google"></span> Đăng nhập bằng tài khoản google !</a></p>
</div>
</div>
<br>
@endsection
