@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Mã Giảm giá</h1>
                  <br>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">

                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist">
                                 <a class="btn btn-add" href="admin/coupon/add"> <i class="fa fa-plus"></i> Thêm
                                 </a>
                              </div>

                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Tên</th>
                                       <th>Code</th>
                                       <th>Số lần sử dụng</th>
                                       <th>Thời gian bắt đầu</th>
                                       <th>Thời gian kết thúc</th>
                                       <th>Trạng thái</th>

                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($coupon as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->name}}</td>
                                       <td>{{$c->code}}</td>
                                       <td>{{$c->uses}}</td>
                                       <td>{{$c->starts_at}}</td>
                                       <td>{{$c->expired_at}}</td>

                                       <td>
                                           @if($c->status==1)
                                                <a href="admin/coupon/status/{{$c->id}}" class="label label-success">Hiện</a>
                                           @else
                                                <a href="admin/coupon/status/{{$c->id}}" class="label label-danger">Ẩn</a>
                                           @endif
                                       </td>

                                       <td>
                                          <a href="admin/coupon/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>

                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$coupon->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
