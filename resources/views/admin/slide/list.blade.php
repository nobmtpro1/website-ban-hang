@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Slide</h1>
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
                                 <a class="btn btn-add" href="admin/slide/add"> <i class="fa fa-plus"></i> Thêm
                                 </a>
                              </div>

                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Tiêu đề</th>
                                       <th>Ảnh</th>
                                       <th>Trạng thái</th>
                                       <th>Thứ tự</th>

                                       <th>Link</th>
                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($slide as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->title}}</td>

                                       <td><img width="100px" src="upload/{{$c->image}}" alt=""></td>


                                       <td>
                                           @if($c->status==1)
                                                <a href="admin/slide/status/{{$c->id}}" class="label label-success">Hiện</a>
                                           @else
                                                <a href="admin/slide/status/{{$c->id}}" class="label label-danger">Ẩn</a>
                                           @endif
                                       </td>
                                       <td>
                                        {{$c->sort}}
                                       </td>

                                       <td>{{$c->link}}</td>
                                       <td>
                                          <a href="admin/slide/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <a href="admin/slide/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$slide->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
