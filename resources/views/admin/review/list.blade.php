@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Đánh giá</h1>
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

                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Sản phẩm</th>
                                       <th>Người dùng</th>
                                       <th>Trạng thái</th>
                                       <th>Mức độ đánh giá</th>
                                       <th>Nội dung</th>
                                       <th>Thời gian đánh giá</th>

                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($review as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->product->p_name}}</td>

                                       <td>{{$c->user->name}}</td>


                                       <td>
                                           @if($c->status==1)
                                                <a href="admin/review/status/{{$c->id}}" class="label label-success">Hiện </a>
                                           @else
                                                <a href="admin/review/status/{{$c->id}}" class="label label-danger">Ẩn</a>
                                           @endif
                                       </td>

                                       <td>{{$c->star}}</td>
                                       <td style="font-size: 10px">{{$c->content}}</td>
                                       <td>{{$c->created_at}}</td>
                                       <td>

                                          <a href="admin/review/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$review->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
