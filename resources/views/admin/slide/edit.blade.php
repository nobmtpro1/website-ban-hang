@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Sửa slide</h1>
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
                           <form  class="col-sm-6" action="admin/slide/edit/{{$slide->id}}" method="post" enctype="multipart/form-data" >@csrf
                              <div class="form-group">
                                 <label>Title</label>
                                 <input type="text" class="form-control"   name="title" value="{{$slide->title}}">
                              </div>
                              <div class="form-group">
                                 <label>Content</label>
                                 <input type="text" class="form-control"   name="content" value="{{$slide->content}}">
                              </div>
                              <div class="form-group">
                                 <label>Link</label>
                                 <input type="text" class="form-control"   name="link" value="{{$slide->link}}">
                              </div>

                              <div class="form-group">
                                 <label>Sort</label>
                                 <input type="number" min="0" class="form-control"  required="" name="sort" value="{{$slide->sort}}">
                              </div>
                              <div class="form-group">
                                 <label>Image</label>

                                 <input type="file" class="form-control-file" id="imgInp"  name="image">
                                 <img class="m-2" width="150px" id="blah" src="upload/{{$slide->image}}" alt="your image" />
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
