@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Sản phẩm</h1>
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
                                 <a class="btn btn-add" href="admin/product/add"> <i class="fa fa-plus"></i> Thêm sản phẩm
                                 </a>
                              </div>

                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table  id="myTable" class="display" cellspacing="0" width="100%">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Tên</th>
                                       <th>Ảnh</th>
                                       <th>Loại sản phẩm</th>
                                       <th>Trạng thái</th>
                                       <th>Nổi bật</th>


                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($product as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->p_name}}</td>

                                       <td><img width="150px" src="upload/{{$c->p_avatar}}" alt=""></td>
                                       <td>{{$c->category->c_name}}</td>
                                       <td>
                                           @if($c->p_status==1)
                                                <a href="admin/product/status/{{$c->id}}" class="label label-success">Hiện </a>
                                           @else
                                                <a href="admin/product/status/{{$c->id}}" class="label label-danger">Ẩn</a>
                                           @endif
                                       </td>



                                       <td>
                                           @if($c->p_hot==1)
                                                <a href="admin/product/hot/{{$c->id}}" class="label label-success">Có</a>
                                           @else
                                                <a href="admin/product/hot/{{$c->id}}" class="label label-danger">Không</a>
                                           @endif
                                       </td>
                                       <td>
                                          <a href="admin/product/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <a href="admin/product/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
