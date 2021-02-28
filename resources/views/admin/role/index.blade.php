@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Vai trò </h1>
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
                                 <a class="btn btn-add" href="{{Route('role.create')}}"> <i class="fa fa-plus"></i> Thêm
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
                                       <th>Quyền</th>


                                       <th>Thực hiện</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($role as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->name}}</td>
                                       <td>
                                           <ul>
                                            @foreach($c->permissions as $p)
                                               <li>{{$p->name}}</li>
                                               @endforeach
                                           </ul>
                                       </td>

                                       <td>
                                          <a href="{{Route('role.edit',$c->id)}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <form action="{{Route('role.destroy',$c->id)}}" method="post">
                                           @method('DELETE')
                                           @csrf
                                          <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </button>
                                      </form>
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
