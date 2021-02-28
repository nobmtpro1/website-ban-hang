@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Sửa thông tin</h1>
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
                           <form  class="col-sm-6" action="admin/config/edit/{{$config->id}}" method="post" enctype="multipart/form-data" >@csrf
                              <div class="form-group">
                                 <label>Tên</label>
                                 <input type="text" class="form-control"  required="" name="name" value="{{$config->name}}">
                              </div>
                              <div class="form-group">
                                 <label>Nội dung</label>
                                 <input type="text" class="form-control"  required="" name="content" value="{{$config->content}}">
                              </div>

                              <div class="form-group">
                                 <label>Loại</label>

                                 <select class="form-control"  required="" name="type" id="type" >
                                     <option @if($config->type == 'info'){{'selected'}}@endif value="info">Thông tin</option>
                                     <option @if($config->type == 'link'){{'selected'}}@endif value="link">Link</option>
                                     <option @if($config->type == 'tel:'){{'selected'}}@endif value="tel:">Số điện thoại</option>
                                     <option @if($config->type == 'mailto:'){{'selected'}}@endif value="mailto:">Email</option>

                                 </select>
                              </div>
                              <div class="form-group" id="url" @if($config->type!='link'){{'hidden'}}@endif>
                                 <label>Link</label>
                                 <input type="text"  class="form-control"   name="link" value="{{$config->link}}">
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
<script type="text/javascript">
    $(document).ready(function () {
        $('#type').change(function () {
            if ($(this).val()=='link') {
            $('#url').removeAttr('hidden')
        }else{
            $('#url').attr('hidden','')
        }
        })


    })
</script>
@endsection
