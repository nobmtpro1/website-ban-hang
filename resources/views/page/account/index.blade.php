@extends('layout.master')
@section('content')
<div class="container">
    <a class="btn btn-info " href="account/info">Thông tin</a>
    <a class="btn btn-primary" href="account/history">Lịch sử mua hàng</a>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-4"><h3>Thông tin tài khoản</h3></div>
        <div class="col-md-4">
             @if ($errors->any())
                            <div class=" alert alert-danger ">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty(session('message')))
                            <p class="alert alert-success" >{{session('message')}}</p>
                        @endif
            <form action="account/changepassword" method="post">@csrf
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email"  value="{{Auth::user()->email}}" disabled="">
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu cũ:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="oldpassword" required>
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu mới:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="newpassword" required>
  </div>
  <div class="form-group">
    <label for="pwd">nhập lại mật khẩu mới:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="newpassword2" required>
  </div>

  <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
</form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4"><h3>Thông tin cá nhân</h3></div>
        <div class="col-md-4">
            <form action="account/changeinfo" method="post">@csrf
  <div class="form-group">
    <label for="email">Họ và tên:</label>
    <input type="text" class="form-control"  name="name" value="{{Auth::user()->name}}"  required>
  </div>
  <div class="form-group">
    <label for="email">Địa chỉ:</label>
    <input type="text" class="form-control"  name="address" value="{{Auth::user()->address}}" required>
  </div>
  <div class="form-group">
    <label for="email">SĐT:</label>
    <input type="tel" class="form-control"  name="phone" value="{{Auth::user()->phone}}" required>
  </div>


  <button type="submit" class="btn btn-primary">Sửa</button>
</form>
        </div>
    </div>
</div>
<br>
@endsection
