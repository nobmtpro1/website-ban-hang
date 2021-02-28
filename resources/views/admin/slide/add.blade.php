@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Thêm slide</h1>
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
                           <form  class="col-sm-6" action="admin/slide/add" method="post" enctype="multipart/form-data" >@csrf
                              <div class="form-group">
                                 <label>Tiêu đề</label>
                                 <input type="text" class="form-control"  name="title">
                              </div>
                              <div class="form-group">
                                 <label>Nội dung</label>
                                 <input type="text" class="form-control"  name="content">
                              </div>
                              <div class="form-group">
                                 <label>Link</label>
                                 <input type="text" class="form-control"   name="link">
                              </div>

                              <div class="form-group">
                                 <label>Thứ tự</label>
                                 <input type="number" min="0" class="form-control"  required="" name="sort">
                              </div>
                              <div class="form-group">
                                 <label>Ảnh</label>

                                 <input type="file" class="form-control-file" id="imgInp"  required="" name="image">
                                 <img class="m-2" width="150px" id="blah" src="#" alt="your image" />
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
            <script type="text/javascript">
                function readURL(input) {
                      if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                          $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                      }
                    }

                    $("#imgInp").change(function() {
                      readURL(this);
                    });
            </script>
@endsection
