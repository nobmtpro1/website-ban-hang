@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>keyword</h1>
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
                                 <a class="btn btn-add" href="admin/keyword/add"> <i class="fa fa-plus"></i> Add keyword
                                 </a>
                              </div>

                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Description</th>
                                       <th>Hot</th>


                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($keyword as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>{{$c->k_name}}</td>

                                       <td>{{$c->k_description}}</td>



                                       <td>
                                           @if($c->k_hot==1)
                                                <a href="admin/keyword/hot/{{$c->id}}" class="label label-success">Hot</a>
                                           @else
                                                <a href="admin/keyword/hot/{{$c->id}}" class="label label-danger">None</a>
                                           @endif
                                       </td>
                                       <td>
                                          <a href="admin/keyword/edit/{{$c->id}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
                                          <a href="admin/keyword/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                              <p>{{$keyword->links()}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </section>
@endsection
