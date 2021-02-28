@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Loại sản phẩm</h1>
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
                                 <a class="btn btn-add" href="admin/category/add"> <i class="fa fa-plus"></i> Thêm loại sản phẩm
                                 </a>
                              </div>

                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Tên </th>

                                       <th>Trạng thái</th>


                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($category as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->c_name}}</td>




                                       <td>
                                           @if($c->c_status==1)
                                                <a href="admin/category/status/{{$c->id}}" class="label label-success">Hiện</a>
                                           @else
                                                <a href="admin/category/status/{{$c->id}}" class="label label-danger">Ẩn</a>
                                           @endif
                                       </td>

                                       <td>
                                          <a href="admin/category/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                        {{--   @if($c->product->count()==0) --}}
                                          <a href="admin/category/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       {{--    @endif --}}
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$category->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
