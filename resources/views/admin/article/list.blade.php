@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Bài viết</h1>
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
                                 <a class="btn btn-add" href="admin/article/add"> <i class="fa fa-plus"></i> Thêm
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

                                       <th>Loại bài viết</th>
                                       <th>Trạng thái</th>
                                       <th>Nổi bật</th>


                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($article as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->name}}</td>


                                       <td>{{$c->articlecategory->name}}</td>
                                       <td>
                                           @if($c->status==1)
                                                <a href="admin/article/status/{{$c->id}}" class="label label-success">Hiện</a>
                                           @else
                                                <a href="admin/article/status/{{$c->id}}" class="label label-danger">Ẩn</a>
                                           @endif
                                       </td>



                                       <td>
                                           @if($c->hot==1)
                                                <a href="admin/article/hot/{{$c->id}}" class="label label-success">Có</a>
                                           @else
                                                <a href="admin/article/hot/{{$c->id}}" class="label label-danger">Không</a>
                                           @endif
                                       </td>
                                       <td>
                                          <a href="admin/article/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <a href="admin/article/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
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
