@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Sửa người dùng</h1>
                  <br>
               </div>
            </section>

            <section class="content">
               <div class="row">

                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
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

                        <div class="panel-body">
                           <form  class="col-sm-6" action="admin/user/edit/{{$user->id}}" method="post"  >@csrf
                              <div class="form-group">
                                 <label>Tên</label>
                                 <input type="text" class="form-control"  required="" name="name" value="{{$user->name}}" >
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input disabled="" type="text" class="form-control"  required="" name="email" value="{{$user->email}}" >
                              </div>
                              <div class="form-group">
                                 <label>SĐT</label>
                                 <input type="tel" class="form-control"   name="phone" value="{{$user->phone}}" >
                              </div>
                              <div class="form-group">
                                 <label>Địa chỉ</label>
                                 <input type="text" class="form-control"   name="address" value="{{$user->address}}" >
                              </div>


                              <div class="form-group">
                                 <label>Vai trò</label>

                                 <select name="role[]" class="form-control"  required="" id="" multiple="multiple">
                                   @foreach($role as $r)
                                    <option @if($user->roles->contains('name',$r->name)){{'selected'}}@endif  value="{{$r->id}}">{{$r->name}}</option>
                                   @endforeach
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Quyền</label>

                                 <select name="permission[]" class="form-control"  multiple="multiple">
                                   @foreach($permission as $r)
                                    <option @if($user->permissions->contains('name',$r->name)){{'selected'}}@endif  value="{{$r->id}}">{{$r->name}}</option>
                                   @endforeach
                                 </select>
                              </div>

                              <div >

                                 <button type="submit" class="btn btn-success">Lưu</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
@endsection
