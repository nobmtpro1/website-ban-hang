<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);

// admin
Route::group(['prefix' => 'admin','namespace'=>'admin','middleware'=>'admin'], function() {
    Route::get('/', 'dashboardcontroller@index');
    // category
    Route::group(['prefix' => 'category'], function() {
        Route::match(['get', 'post'], '', 'categorycontroller@list')->middleware('permission:Xem loại sản phẩm');
        Route::match(['get', 'post'], 'add', 'categorycontroller@add')->middleware('permission:Thêm loại sản phẩm');
        Route::match(['get', 'post'], 'edit/{id}', 'categorycontroller@edit')->middleware('permission:Sửa loại sản phẩm');
        Route::match(['get', 'post'], 'delete/{id}', 'categorycontroller@delete')->middleware('permission:Xóa loại sản phẩm');
        Route::match(['get', 'post'], 'status/{id}', 'categorycontroller@status')->middleware('permission:Sửa loại sản phẩm');
        Route::match(['get', 'post'], 'hot/{id}', 'categorycontroller@hot')->middleware('permission:Sửa loại sản phẩm');
     });
    // keyword
    Route::group(['prefix' => 'keyword'], function() {
        Route::match(['get', 'post'], '', 'keywordcontroller@list');
        Route::match(['get', 'post'], 'add', 'keywordcontroller@add');
        Route::match(['get', 'post'], 'edit/{id}', 'keywordcontroller@edit');
        Route::match(['get', 'post'], 'delete/{id}', 'keywordcontroller@delete');
        Route::match(['get', 'post'], 'hot/{id}', 'keywordcontroller@hot');

     });
    // product
    Route::group(['prefix' => 'product'], function() {
        Route::match(['get', 'post'], '', 'productcontroller@list')->middleware('permission:Xem sản phẩm');
        Route::match(['get', 'post'], 'add', 'productcontroller@add')->middleware('permission:Thêm sản phẩm');
        Route::match(['get', 'post'], 'edit/{id}', 'productcontroller@edit')->middleware('permission:Sửa sản phẩm');
        Route::match(['get', 'post'], 'delete/{id}', 'productcontroller@delete')->middleware('permission:Xóa sản phẩm');
        Route::match(['get', 'post'], 'status/{id}', 'productcontroller@status')->middleware('permission:Sửa sản phẩm');
        Route::match(['get', 'post'], 'hot/{id}', 'productcontroller@hot')->middleware('permission:Sửa sản phẩm');
        Route::match(['get', 'post'], 'deleteimage/{id}', 'productcontroller@deleteimage')->middleware('permission:Sửa sản phẩm');
     });
    // attr
    Route::group(['prefix' => 'attr'], function() {
        Route::match(['get', 'post'], '', 'attrcontroller@list')->middleware('permission:Xem thuộc tính');
        Route::match(['get', 'post'], 'add', 'attrcontroller@add')->middleware('permission:Thêm thuộc tính');
        Route::match(['get', 'post'], 'edit/{id}', 'attrcontroller@edit')->middleware('permission:Sửa thuộc tính');
        Route::match(['get', 'post'], 'delete/{id}', 'attrcontroller@delete')->middleware('permission:Xóa thuộc tính');
        Route::match(['get', 'post'], 'status/{id}', 'attrcontroller@status')->middleware('permission:Sửa thuộc tính');
        Route::match(['get', 'post'], 'hot/{id}', 'attrcontroller@hot')->middleware('permission:Sửa thuộc tính');
     });
    // user
    Route::group(['prefix' => 'user'], function() {
        Route::match(['get', 'post'], '', 'usercontroller@list')->middleware('permission:Xem người dùng');
        Route::match(['get', 'post'], 'add', 'usercontroller@add')->middleware('permission:Thêm người dùng');
        Route::match(['get', 'post'], 'edit/{id}', 'usercontroller@edit')->middleware('permission:Sửa người dùng');
        Route::match(['get', 'post'], 'delete/{id}', 'usercontroller@delete')->middleware('permission:Xóa người dùng');


     });
    // transaction
    Route::group(['prefix' => 'transaction'], function() {
        Route::match(['get', 'post'], '', 'transactioncontroller@list')->middleware('permission:Xem đơn hàng');
        Route::match(['get', 'post'], 'delete/{id}', 'transactioncontroller@delete')->middleware('permission:Xóa đơn hàng');
        Route::match(['get', 'post'], 'status/{status}/{id}', 'transactioncontroller@status')->middleware('permission:Sửa đơn hàng');
     });
    // articlecategory
    Route::group(['prefix' => 'articlecategory'], function() {
        Route::match(['get', 'post'], '', 'articlecategorycontroller@list')->middleware('permission:Xem loại bài viết');
        Route::match(['get', 'post'], 'add', 'articlecategorycontroller@add')->middleware('permission:Thêm loại bài viết');
        Route::match(['get', 'post'], 'edit/{id}', 'articlecategorycontroller@edit')->middleware('permission:Sửa loại bài viết');
        Route::match(['get', 'post'], 'delete/{id}', 'articlecategorycontroller@delete')->middleware('permission:Xóa loại bài viết');
        Route::match(['get', 'post'], 'status/{id}', 'articlecategorycontroller@status')->middleware('permission:Sửa loại bài viết');

     });
    // article
    Route::group(['prefix' => 'article'], function() {
        Route::match(['get', 'post'], '', 'articlecontroller@list')->middleware('permission:Xem bài viết');
        Route::match(['get', 'post'], 'add', 'articlecontroller@add')->middleware('permission:Thêm bài viết');
        Route::match(['get', 'post'], 'edit/{id}', 'articlecontroller@edit')->middleware('permission:Sửa bài viết');
        Route::match(['get', 'post'], 'delete/{id}', 'articlecontroller@delete')->middleware('permission:Xóa bài viết');
        Route::match(['get', 'post'], 'status/{id}', 'articlecontroller@status')->middleware('permission:Sửa bài viết');
        Route::match(['get', 'post'], 'hot/{id}', 'articlecontroller@hot')->middleware('permission:Sửa bài viết');
     });
    // slide
    Route::group(['prefix' => 'slide'], function() {
        Route::match(['get', 'post'], '', 'slidecontroller@list')->middleware('permission:Xem slide');
        Route::match(['get', 'post'], 'add', 'slidecontroller@add')->middleware('permission:Thêm slide');
        Route::match(['get', 'post'], 'edit/{id}', 'slidecontroller@edit')->middleware('permission:Sửa slide');
        Route::match(['get', 'post'], 'delete/{id}', 'slidecontroller@delete')->middleware('permission:Xóa slide');
        Route::match(['get', 'post'], 'status/{id}', 'slidecontroller@status')->middleware('permission:Sửa slide');
        Route::match(['get', 'post'], 'hot/{id}', 'slidecontroller@hot')->middleware('permission:Sửa slide');
     });
    // review
    Route::group(['prefix' => 'review'], function() {
        Route::match(['get', 'post'], '', 'reviewcontroller@list')->middleware('permission:Xem đánh giá');
        Route::match(['get', 'post'], 'add', 'reviewcontroller@add')->middleware('permission:Xem đánh giá');
        Route::match(['get', 'post'], 'edit/{id}', 'reviewcontroller@edit')->middleware('permission:Xem đánh giá');
        Route::match(['get', 'post'], 'delete/{id}', 'reviewcontroller@delete')->middleware('permission:Xem đánh giá');
        Route::match(['get', 'post'], 'status/{id}', 'reviewcontroller@status')->middleware('permission:Xem đánh giá');
        Route::match(['get', 'post'], 'hot/{id}', 'reviewcontroller@hot')->middleware('permission:Xem đánh giá');
     });
    // config
    Route::group(['prefix' => 'config'], function() {
        Route::match(['get', 'post'], '', 'configcontroller@list')->middleware('permission:Xem cài đặt thông tin');
        Route::match(['get', 'post'], 'add', 'configcontroller@add')->middleware('permission:Thêm cài đặt thông tin');
        Route::match(['get', 'post'], 'edit/{id}', 'configcontroller@edit')->middleware('permission:Sửa cài đặt thông tin');
        Route::match(['get', 'post'], 'delete/{id}', 'configcontroller@delete')->middleware('permission:Xóa cài đặt thông tin');
     });
    // staticpage
    Route::group(['prefix' => 'staticpage'], function() {
        Route::match(['get', 'post'], '', 'staticpagecontroller@list')->middleware('permission:Xem trang tĩnh');
        Route::match(['get', 'post'], 'add', 'staticpagecontroller@add')->middleware('permission:Thêm trang tĩnh');
        Route::match(['get', 'post'], 'edit/{id}', 'staticpagecontroller@edit')->middleware('permission:Sửa trang tĩnh');
        Route::match(['get', 'post'], 'delete/{id}', 'staticpagecontroller@delete')->middleware('permission:Xóa trang tĩnh');
        Route::match(['get', 'post'], 'status/{id}', 'staticpagecontroller@status')->middleware('permission:Sửa trang tĩnh');

     });
    // coupon
    Route::group(['prefix' => 'coupon'], function() {
        Route::match(['get', 'post'], '', 'couponcontroller@list')->middleware('permission:Xem mã giảm giá');
        Route::match(['get', 'post'], 'add', 'couponcontroller@add')->middleware('permission:Thêm mã giảm giá');
        Route::match(['get', 'post'], 'edit/{id}', 'couponcontroller@edit')->middleware('permission:Sửa mã giảm giá');
        Route::match(['get', 'post'], 'delete/{id}', 'couponcontroller@delete')->middleware('permission:Xóa mã giảm giá');
        Route::match(['get', 'post'], 'status/{id}', 'couponcontroller@status')->middleware('permission:Sửa mã giảm giá');

     });
    //

    Route::resource('role','rolecontroller')->middleware('permission:Xem vai trò');

});
// export
Route::post('admin/export', 'exportcontroller@export');
// frontend
Route::get('', 'indexcontroller@index');
Route::match(['get', 'post'], 'category/{c_slug}', 'categorycontroller@index');
Route::get('product/{p_slug}/', 'productdetailcontroller@index');
Route::match(['get', 'post'], 'articlecategory/{slug}', 'articlecontroller@articlecategory');
Route::match(['get', 'post'], 'articledetail/{slug}', 'articlecontroller@articledetail');
Route::match(['get', 'post'], 'static/{slug}', 'staticpagecontroller@index');
Route::match(['get', 'post'], 'formsearch', 'indexcontroller@formsearch');
Route::get( 'contact', function ()
{
    return view('page.staticpage.contact');
});

// Auth::routes();

Route::get('/home', 'indexcontroller@index')->name('home');
Route::group(['prefix' => 'account','namespace'=>'Auth'], function() {
    // Route::match(['get', 'post'], 'register', 'RegisterController@register')->name('register');
    Route::get('register', 'RegisterController@register');
    Route::post('register', 'RegisterController@register');
    Route::match(['get', 'post'], 'login', 'LoginController@login')->name('login');
    Route::match(['get', 'post'], 'logout', 'LoginController@logout')->name('logout');
    Route::get('register/verify/{code}','RegisterController@verify');
    Route::match(['get', 'post'], 'forgot-password', 'ResetPasswordController@forgot');
    Route::get('forgotpassword/verify/{code}','ResetPasswordController@verify');
    Route::post('resetpassword', 'ResetPasswordController@reset');

});
Route::match(['get', 'post'], 'account/info', 'accountcontroller@index')->middleware('auth');
Route::post( 'account/changepassword', 'accountcontroller@changepassword')->middleware('auth');
Route::post( 'account/changeinfo', 'accountcontroller@changeinfo')->middleware('auth');
Route::match(['get', 'post'], 'account/history', 'accountcontroller@history')->middleware('auth');
// Shopping cart
// Route::match(['get', 'post'], 'cart/add/{id}', 'cartcontroller@add');
Route::get('cart/add', 'cartcontroller@add');
Route::match(['get', 'post'], 'cart/list', 'cartcontroller@list');
Route::match(['get', 'post'], 'cart/delete/{id}', 'cartcontroller@delete');
Route::match(['get', 'post'], 'cart/update', 'cartcontroller@update');
Route::match(['get', 'post'], 'cart/pay', 'cartcontroller@pay');
Route::match(['get', 'post'], 'cart/destroy', 'cartcontroller@destroy');
Route::match(['get', 'post'], 'cart/setcoupon', 'cartcontroller@setcoupon');
Route::match(['get', 'post'], 'cart/removecoupon', 'cartcontroller@removecoupon');
// ajax
Route::get('ajax/vieworder', 'ajaxcontroller@vieworder');
Route::get('ajax/deleteorder/{id}/{transaction_id}', 'ajaxcontroller@deleteorder');
Route::get('search', 'ajaxcontroller@search');

// review
Route::post('review/add', 'productdetailcontroller@addreview');
    // login by google account
Route::group(['namespace'=>'Auth'], function() {
    Route::get('/google/redirect','LoginController@googleredirect' );
Route::get('/google/callback', 'LoginController@googlecallback');
});




