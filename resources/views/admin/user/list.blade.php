@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Người dùng</h1>
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
                       {{--  @can('delete') --}}
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist">
                                 <a class="btn btn-add" href="admin/user/add"> <i class="fa fa-plus"></i> Thêm người dùng
                                 </a>
                              </div>

                           </div>
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist">
                                 <a class="btn btn-add" href="{{Route('role.index')}}"> Vai trò
                                 </a>
                              </div>

                           </div>

                        {{--    @endcan --}}
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Tên</th>
                                       <th>Email</th>
                                      <th>Vai trò</th>

                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($user as $c)
                                    @if($c->id != Auth::user()->id)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->name}}</td>

                                       <td>{{$c->email}}</td>
                                       <td>
                                        <ul>
                                            @foreach($c->roles as $r)
                                            <li>{{$r->name}}</li>
                                            @endforeach
                                        </ul>
                                       </td>
                                       <td>
                                            <a href="admin/user/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i> </a>
                                          <a href="admin/user/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endif
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$user->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
