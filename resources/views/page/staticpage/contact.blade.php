@extends('layout.master')
@section('content')
      <div class="main-contact-area">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="contact-us-area">
              <!-- google-map-area start -->

              <!-- google-map-area end -->
              <!-- contact us form start -->
              <div class="contact-us-form">
                <div class="sec-heading-area">
                  <h2>Liên hệ</h2>
                </div>
                <div class="contact-form">
                  <span class="legend">Thông tin liên lạc</span>
                  <form action="#" method="post">
                    <div class="form-top">
                      <div class="form-group col-sm-6 col-md-6 col-lg-5">
                        <label>Tên <sup>*</sup></label>
                        <input type="text" class="form-control">
                      </div>


                      <div class="form-group col-sm-6 col-md-6 col-lg-5">
                        <label>Email <sup>*</sup></label>
                        <input type="email" class="form-control">
                      </div>
                      <div class="form-group col-sm-6 col-md-6 col-lg-5">
                        <label>Địa chỉ <sup>*</sup></label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group col-sm-6 col-md-6 col-lg-5">
                        <label>SĐT <sup>*</sup></label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group col-sm-12 col-md-12 col-lg-10">
                        <label>Nội dung <sup>*</sup></label>
                        <textarea class="yourmessage"></textarea>
                      </div>
                      <div class="form-group col-sm-12 col-md-12 col-lg-10">
                         <p> <a href="#" class="add-tag-btn">Gửi</a></p>
                      </div>

                    </div>

                  </form>
                </div>
              </div>
              <!-- contact us form end -->
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
