@extends('admin.layout.master')
@section('content')
     <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-edit"></i>
               </div>
               <div class="header-title">
                  <h1>Đơn hàng</h1>
                  <br>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
               {{--  <form action="admin/export" method="post">
                <input type="text" multiple="multiple">
                <button >Export</button>
                </form> --}}
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">

                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <form method="post" action="admin/export">@csrf
                                <div class="row">
                                    <div class="col-sm-1">
                                        <div  id="inputFormRow">
                                            <div class=" w-25 m-2">
                                                <input  style="width: 80px;" type="number" placeholder="ID" required="" name="id[]" class="form-control "  >
                                                <div style="display: flex;" class="input-group-append ">

                                                </div>
                                            </div>
                                        </div>

                                        <div id="newRow"></div>

                                    </div>
                                    <div class="col-sm-4">
                                            <button id="addRow" type="button" class="label label-info"><i class="fa fa-plus"></i></button>
                                        <button type="submit" class="btn btn-success btn-sm">Xuất ra excel</button>
                                        </div>

                                </div>
                            </form><br>
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              {{-- <table id="dataTableExample1" class="table table-bordered table-striped table-hover"> --}}

                                 <table  id="myTable" class="display" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Thông tin</th>
                                                <th>Tổng tiền</th>
                                                <th>ID người dùng</th>
                                                <th>Ghi chú</th>
                                                <th>Trạng thái</th>
                                                <th>Thời gian đặt</th>
                                                <th>Thực hiện</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                    @foreach($transaction as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>
                                        <ul>
                                            <li>Tên: {{$c->name}}</li>
                                            <li>Email: {{$c->email}}</li>
                                            <li>SĐT: {{$c->phone}}</li>
                                            <li>Địa chỉ: {{$c->address}}</li>

                                        </ul>

                                    </td>

                                       <td>{{$c->total_money}}</td>
                                       <td>
                                        @if($c->user_id>0)
                                             {{$c->user_id}}
                                        @else
                                            Không có
                                            @endif
                                       </td>
                                       <td  style="font-size: 10px">{{$c->note}}</td>


                                       <td>

                                                <p  class="label label-{{$c->getstatus('class')}}">{{$c->getstatus('name')}}</p>
                                                <br>
                                                <div class="dropdown ">
                                                  <button class="label label-primary  dropdown-toggle" type="button" data-toggle="dropdown">Thay đổi
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="admin/transaction/status/1/{{$c->id}}">Tiếp nhận</a></li>
                                                    <li><a href="admin/transaction/status/2/{{$c->id}}">Đang vận chuyển</a></li>
                                                    <li><a href="admin/transaction/status/3/{{$c->id}}">Đã chuyển hàng</a></li>
                                                    <li><a href="admin/transaction/status/4/{{$c->id}}">Đã Hủy</a></li>
                                                  </ul>
                                                </div>

                                       </td>
                                       <td>{{$c->created_at}}</td>

                                       <td>
                                        <button onclick="vieworder({{$c->id}})" type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#mymodal"><i class="fa fa-eye"></i></button>
                                          <a href="admin/transaction/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
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
                <!-- Modal -->
                    {{--  @foreach($transaction as $c) --}}
                      <div class="modal fade" id="mymodal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Chi tiết đơn hàng </h4>
                            </div>
                            <div class="modal-body">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>

                                  </tr>
                                </thead>
                                <tbody id="tableorder">
                                {{--     @foreach($c->order as $o)
                                    <tr>
                                    <td>{{$o->id}}</td>
                                    <td>{{$o->product->p_name}}</td>
                                    <td><img width='100px' src='upload/{{$o->product->p_avatar}}' ></td>
                                    <td>{{number_format($o->product->p_price)}}đ
                                        @if($o->product->p_sale_type =='%')
                                        ({{-$o->product->p_sale}}%)
                                        @else
                                         ({{-$o->product->p_sale}}đ)
                                    @endif</td>
                                    <td>{{$o->qty}}</td>
                                    <td>@if($o->product->p_sale_type =='%'){{number_format($o->product->p_price*$o->qty*(100-$o->product->p_sale)/100)}}đ@else {{number_format($o->product->p_price-$o->product->p_sale)*$o->qty}}đ@endif</td>

                                  </tr> --}}
                                {{--   @endforeach --}}
                                </tbody>
                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                          </div>
                        </div>
                    </div>

                 {{--    @endforeach --}}
                    <script type="text/javascript">
                        function vieworder(id) {
                            $.get('ajax/vieworder',{transaction_id:id},function (data) {
                                $('#tableorder').html(data);
                            })
                        }
                        function deleteorder(id,transaction_id) {
                            $.get('ajax/deleteorder',{id:id,transaction_id:transaction_id},function (data) {
                                $('#tableorder').html(data);
                            })
                        }


                    </script>
                    <script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div  id="inputFormRow"><div class="input-group mb-3"><input required="" style="width: 80px;" type="number" placeholder="ID" name="id[]" class="form-control m-input"  ><div style="display: flex;" class="input-group-append "><button  id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></div></div></div>'

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>

            </section>

@endsection
