@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Sửa bài viết</h1>
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
                           <form  class="col-sm-6" action="admin/article/edit/{{$article->id}}" method="post" enctype="multipart/form-data"  >@csrf
                              <div class="form-group">
                                 <label>Tên</label>
                                 <input type="text" class="form-control"  required="" name="name" value="{{$article->name}}">
                              </div>


                              <div class="form-group">
                                 <label>Mô tả</label>
                                 <textarea class="form-control" name="description"  cols="30" rows="5" style="resize: none;">{{$article->description}}</textarea>
                              </div>
                              <div class="form-group">
                                 <label>Loại bài viết</label>

                                 <select name="articlecategory_id" class="form-control" required>
                                     @foreach($articlecategory as $c)
                                        <option @if($article->articlecategory_id==$c->id){{'selected'}}@endif value="{{$c->id}}">{{$c->name}}</option>
                                     @endforeach
                                 </select>
                              </div>

                              <div class="form-group">
                                 <label>Nội dung</label>
                                 <textarea id="editor" name="content">
                                    {{$article->content}}
                                   </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                              </div>
                              <div class="form-group">
                                 <label>Ảnh</label>
                                 <input type="file" class="form-control-file" id="imgInp"   name="avatar">
                                 <img class="m-2" width="150px" id="blah" src="upload/{{$article->avatar}}"  />
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

                    $('#checkboxattr ').change(function() {
                        // this will contain a reference to the checkbox
                        if (this.checked) {
                            $(this).siblings('select').removeAttr('disabled')
                        } else {
                            $(this).siblings('select').attr('disabled','')
                        }
                    });
                    $(".js-example-tokenizer").select2({
                            tags: true,
                            tokenSeparators: [',', ' ']
                        })
            </script>
@endsection
