@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Sửa trang tĩnh</h1>
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
                           <form  class="col-sm-6" action="admin/staticpage/edit/{{$staticpage->id}}" method="post" enctype="multipart/form-data" >@csrf
                             <div class="form-group">
                                 <label>Tiêu đề</label>
                                 <input type="text" class="form-control"  required="" name="title" value="{{$staticpage->title}}">
                              </div>
                              <div class="form-group">
                                 <label>Vị trí</label>
                                 <select class="form-control"  required="" name="position" id="" >
                                     <option @if($staticpage->position ==0){{'selected'}}@endif value="0">Footer</option>
                                     <option @if($staticpage->position ==1){{'selected'}}@endif  value="1">Header</option>

                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Nội dung</label>

                                <textarea  name="content" id="editor">{{$staticpage->content}}</textarea>
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
@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
