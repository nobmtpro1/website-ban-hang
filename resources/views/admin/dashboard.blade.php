@extends('admin.layout.master')
@section('css')
<style>
   .highcharts-figure, .highcharts-data-table table {
  min-width: 360px;
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
   font-family: Verdana, sans-serif;
   border-collapse: collapse;
   border: 1px solid #EBEBEB;
   margin: 10px auto;
   text-align: center;
   width: 100%;
   max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
   font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
   {{--  --}}
   .highcharts-figure, .highcharts-data-table table {
  min-width: 320px;
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
   font-family: Verdana, sans-serif;
   border-collapse: collapse;
   border: 1px solid #EBEBEB;
   margin: 10px auto;
   text-align: center;
   width: 100%;
   max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
   font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}


input[type="number"] {
   min-width: 50px;
}
</style>


@endsection
@section('script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script type="text/javascript">
   Highcharts.chart('container2', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Biểu đồ doanh thu các ngày trong tháng'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]
  },
  yAxis: {
    title: {
      text: ''
    },
    labels: {
      formatter: function () {
        return this.value + '';
      }
    }
  },
  tooltip: {
    crosshairs: true,
    shared: true
  },
  plotOptions: {
    spline: {
      marker: {
        radius: 4,
        lineColor: '#666666',
        lineWidth: 1
      }
    }
  },
  series: [{
    name: 'Doanh thu',
    marker: {
      symbol: 'square'
    },
    data: [
    @foreach($listday as $l => $v)
      {{$v}},
    @endforeach

    ]

  }]
});
   {{--  --}}
     Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Thống kê trạng thái đơn hàng'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  @if(count($newtransaction)>0)
  series: [{
    name: '% ',
    colorByPoint: true,
    data: [{
      name: 'Tiếp nhận',
      y: {{$tiepnhan*100 / ($tiepnhan+$dangvanchuyen+$dachuyen+$huy)}},
      sliced: true,
      selected: true
    }, {
      name: 'Đang vận chuyển',
      y: {{$dangvanchuyen*100 / ($tiepnhan+$dangvanchuyen+$dachuyen+$huy)}}
    }, {
      name: 'Đã chuyển hàng',
      y: {{$dachuyen*100 / ($tiepnhan+$dangvanchuyen+$dachuyen+$huy)}}
    }, {
      name: 'Đã hủy',
      y: {{$huy*100 / ($tiepnhan+$dangvanchuyen+$dachuyen+$huy)}}
    } ]
  }]

@endif
});
  </script>
@endsection
@section('content')


         <!-- Content Wrapper. Contains page content -->

            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1>CRM Admin Dashboard</h1>
                  <small>Very detailed & featured admin.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <a href="admin/transaction">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-first-order fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="">{{$transaction}}</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Tổng số đơn hàng</h3>
                        </div>
                     </div>
                  </div>
                  </a>
                  <a href="admin/user">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="">{{$user}}</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Tổng số người dùng</h3>
                        </div>
                     </div>
                  </div>
               </a>
               <a href="admin/product">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-product-hunt fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="">{{$product}}</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Tổng số sản phẩm</h3>
                        </div>
                     </div>
                  </div>
               </a>
               <a href="admin/review">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-star fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="">{{$review}}</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Tổng số đánh giá</h3>
                        </div>
                     </div>
                  </div>
               </a>

               </div>
               <div class="row">
                  <div class="col-md-8">
                     <figure class="highcharts-figure">
                          <div id="container2"></div>

                        </figure>
                  </div>
                  <div class="col-md-4">
                     <figure class="highcharts-figure">
                          <div id="container"></div>

                        </figure>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd ">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Top Bán chạy</h4>
                           </div>
                        </div><?php $i=0 ?>
                        @foreach($topbuy as $t)<?php $i++ ?>
                        <div class="panel-body">
                           <div class="runnigwork">
                              <span class="label-success label label-default pull-right">{{$t->p_buy}}</span>
                              <b>{{$i}} &nbsp</b>
                              <img width="50px" src="upload/{{$t->p_avatar}}" alt="">
                              <a >&nbsp {{$t->p_name}}</a><br>


                           </div>

                        </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd ">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Top xem nhiều</h4>
                           </div>
                        </div>

                           <?php $i=0 ?>
                        @foreach($topview as $t)<?php $i++ ?>
                        <div class="panel-body">
                           <div class="runnigwork">
                              <span class="label-success label label-default pull-right">{{$t->p_view}}</span>
                              <b>{{$i}} &nbsp</b>
                              <img width="50px" src="upload/{{$t->p_avatar}}" alt="">
                              <a >&nbsp {{$t->p_name}}</a><br>


                           </div>

                        </div>
                        @endforeach

                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="panel panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Đơn hàng mới</h4>
                           </div>
                            </div>
                           <div class="panel panel-body">
                                 <table   class="display" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Info</th>
                                                <th>Total</th>
                                                <th>Customer</th>
                                                <th>Note</th>
                                                <th>Status</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                    @foreach($newtransaction as $c)
                                    <tr>

                                       <td>{{$c->id}}</td>
                                       <td>
                                        <ul>
                                            <li>Name: {{$c->name}}</li>
                                            <li>Email: {{$c->email}}</li>
                                            <li>Phone: {{$c->phone}}</li>
                                            <li>Address: {{$c->address}}</li>

                                        </ul>

                                    </td>

                                       <td>{{$c->total_money}}</td>
                                       <td>
                                        @if($c->user_id>0)
                                            User: {{$c->user_id}}
                                        @else
                                            Khách
                                            @endif
                                       </td>
                                       <td>{{$c->note}}</td>


                                       <td>

                                                <p  class="label label-{{$c->getstatus('class')}}">{{$c->getstatus('name')}}</p>
                                                <br>
                                                <div class="dropdown ">
                                                  <button class="label label-primary  dropdown-toggle" type="button" data-toggle="dropdown">Change
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
                                        <button onclick="vieworder({{$c->id}})" type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></button>
                                          <a href="admin/transaction/delete/{{$c->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa không?')"><i class="fa fa-trash-o"></i> </a>
                                       </td>
                                    </tr>
                                    @endforeach

                                 </tbody>


                              </table>
                              </div>


                  </div>

               </div>

            </section>



@endsection
