@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Trang tĩnh</h1>
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
                                 <a class="btn btn-add" href="admin/staticpage/add"> <i class="fa fa-plus"></i> Thêm
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
                                       <th>Vị trí</th>

                                       <th>Trạng thái</th>

                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($staticpage as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->title}}</td>
                                       <td>@if($c->position ==1){{'Header'}}
                                       @else
                                       @if($c->position ==2)
                                            {{'Header và Footer'}}
                                            @else
                                            {{'Footer'}}
                                            @endif
                                        @endif</td>



                                       <td>
                                           @if($c->status==1)
                                                <a href="admin/staticpage/status/{{$c->id}}" class="label label-success">Hiện</a>
                                           @else
                                                <a href="admin/staticpage/status/{{$c->id}}" class="label label-danger">Ẩn</a>
                                           @endif
                                       </td>

                                       <td>
                                          <a href="admin/staticpage/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <a href="admin/staticpage/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$staticpage->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
