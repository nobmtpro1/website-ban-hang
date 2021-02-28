@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Thêm thuộc tính sản phẩm</h1>
                  <br>
               </div>
            </section>

            <section class="content">
               <div class="row">

                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        @if ($errors->any())
                            <div class=" alert alert-danger ">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty(session('message')))
                            <p class="alert alert-success" >{{session('message')}}</p>
                        @endif

                        <div class="panel-body">
                           <form  class="col-sm-6" action="admin/attr/add" method="post" enctype="multipart/form-data"  >@csrf
                              <div class="form-group">
                                 <label>Tên</label>
                                 <input type="text" class="form-control"  required="" name="a_name">
                              </div>
                              <div class="form-group">
                                 <label>Loại</label>

                                 <select id="loai" name="a_parent_id" class="form-control" required>
                                    <option value="0"><b>Danh mục</b></option>
                                     @foreach($parent as $c)
                                        <option value="{{$c->id}}">{{$c->a_name}} ({{$c->category->c_name}})</option>
                                     @endforeach
                                 </select>
                              </div>
                              <div id="category" class="form-group">
                                 <label>Loại sản phẩm</label>

                                 <select  name="a_category_id" class="form-control" required>

                                     @foreach($category as $c)
                                        <option value="{{$c->id}}">{{$c->c_name}}</option>
                                     @endforeach
                                 </select>
                              </div>






                              <div >


                                 <button type="submit" class="btn btn-success">Lưu</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#loai').change(function () {

                if ($(this).val()!=0) {
                    $("#category").attr("hidden",'');
                }else{
                    $('#category').removeAttr('hidden')
                }
            })
        })
    </script>
@endsection
