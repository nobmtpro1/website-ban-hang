@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Thêm mã giảm giá</h1>
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
                           <form  class="col-sm-6" action="admin/coupon/add" method="post"  >@csrf
                              <div class="form-group">
                                 <label>Tên</label>
                                 <input type="text" class="form-control"  required="" name="name">
                              </div>
                              <div class="form-group">
                                 <label>Code</label>
                                 <input type="text" class="form-control"  required="" name="code">
                              </div>
                              <div class="form-group">
                                 <label>Số lần sử dụng</label>
                                 <input type="number" min="1" class="form-control"  required="" name="uses">
                              </div>
                              <div class="form-group">
                                 <label>Loại giảm giá</label>

                                 <select class="form-control"  required="" name="is_fixed" id="">
                                     <option value="1">Số lượng</option>
                                     <option value="0">%</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Giá trị giảm</label>
                                 <input type="number" min="1" class="form-control"  required="" name="discount_amount">
                              </div>
                              <div class="form-group">
                                 <label>Ngày bắt đầu</label>
                                 <input type="date" min="1" class="form-control"  required="" name="starts_at">
                              </div>
                              <div class="form-group">
                                 <label>Ngày kết thúc</label>
                                 <input type="date" min="1" class="form-control"  required="" name="expired_at">
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
