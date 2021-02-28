@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Cài đặt thông tin</h1>
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
                                 <a class="btn btn-add" href="admin/config/add"> <i class="fa fa-plus"></i> Thêm
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
                                       <th>Nội dung</th>
                                       <th>Loại</th>



                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($config as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->name}}</td>

                                       <td>{{$c->content}}</td>



                                       <td>{{$c->type}}</td>

                                       <td>
                                        <a href="admin/config/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i> </a>
                                          <a href="admin/config/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$config->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
