@extends('layout.master')

@section('content')
<br>
<div class="container m-4 p-4">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
  <h2>Quên mật khẩu</h2>
  <form action="account/forgot-password" method="post" >@csrf
    @if(count($errors)>0)
    @foreach($errors->all() as $e)
    <p class="alert alert-danger">{{$e}}</p>
    @endforeach
    @endif
    @if(!empty(session('message')))
    <p class="alert alert-success">{{session('message')}}</p>
    @endif
    <p>Xác minh email:</p>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
    </div>


    <div class="row">
        <div class="col-md-6">
            <button type="submit" class="btn btn-dark">Gửi</button>
        </div>

    </div>

  </form>
  <br>

</div>
</div>
<br>
@endsection
