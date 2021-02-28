@extends('admin.layout.master')
@section('content')
                <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Thêm sản phẩm</h1>
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
                           <form  class="col-sm-6" action="admin/product/add" method="post" enctype="multipart/form-data"  >@csrf
                              <div class="form-group">
                                 <label>Tên</label>
                                 <input type="text" class="form-control"  required="" name="p_name">
                              </div>
                              <div class="form-group">
                                 <label>Giá</label>
                                 <input type="number" class="form-control"  required="" name="p_price">
                              </div>
                              <div class="form-group">
                                 <label>Kiểu giảm giá</label>
                                 <select required class="form-control" name="p_sale_type" >
                                     <option value="%">%</option>
                                     <option value="amount">Amount</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Giá giảm</label>
                                 <input type="number" class="form-control"  required="" name="p_sale">
                              </div>


                              <div class="form-group">
                                 <label>Loại sản phẩm</label>

                                 <select id="p_category_id" name="p_category_id" class="form-control" required>
                                     @foreach($category as $c)
                                        <option value="{{$c->id}}">{{$c->c_name}}</option>
                                     @endforeach
                                 </select>
                              </div>
{{--
                              <div class="form-group">
                                 <label>Chi tiết</label>
                                 <textarea class="form-control" name="p_content"  cols="30" rows="5" style="resize: none;"></textarea>
                              </div> --}}
                              <div class="form-group">
                                 <label>Chi tiết</label>
                                 <textarea id="editor" name="p_content">

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
                                 <input type="file" class="form-control-file" id="imgInp"  required="" name="p_avatar">
                                 <img class="m-2" width="150px" id="blah" src="#"  />
                              </div>
                              <div class="form-group">
                                 <label>Album ảnh</label>
                                 <input type="file" multiple id="gallery-photo-add" name="image[]">
                                    <div  class="col-md-12" id="gallery">
                              </div>

                              <div class="form-group">
                                 <label>Số lượng</label>
                                 <input type="number" class="form-control" min="1"  required="" name="p_qty">

                              </div>
                              <hr>
                              <h3 class="text-center" >Thuộc tính</h3>
                              @foreach($category as $c)
                              <div  id="{{$c->id}}"  class="form-group attr_category">

                                 <label>{{$c->c_name}}</label>
                                 @foreach($c->attr->where('a_parent_id',0) as $a)
                                 <p> - {{$a->a_name}}</p>
                                 <select  name="attr_id[]" class="form-control js-example-tokenizer" multiple="multiple"  >
                                        <option selected=""  value=""></option>
                                     @foreach($a->child as $x)

                                        <option  value="{{$x->id}}">{{$x->a_name}}</option>
                                     @endforeach
                                 </select>
                                 @endforeach
                              </div>
                               @endforeach

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
            <script type="text/javascript">
                 $(function() {
                    // Multiple images preview in browser
                    var imagesPreview = function(input, placeToInsertImagePreview) {
                        if (input.files) {
                            var filesAmount = input.files.length;
                            for (i = 0; i < filesAmount; i++) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $($.parseHTML('<img width="150px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                                }
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    };

                    $('#gallery-photo-add').on('change', function() {
                        $('#gallery').html('');
                        imagesPreview(this, '#gallery');
                    });
                });
</script>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#p_category_id').change(function () {
                $('.attr_category').attr('hidden','');
                $('#'+$(this).val()).removeAttr('hidden');
        })
        })
    </script>
@endsection
