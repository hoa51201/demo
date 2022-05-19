<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Backend;
use App\Http\Controllers\Frontend;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
*/

 Route::group(['namespace' =>  'Frontend'], function () {
    Route::group(['namespace' => 'Auth','prefix' => 'account'], function () {
        Route::get('login','LoginController@getLogin')->name('get.login');
        Route::post('login','LoginController@postLoginUser');
        Route::get('register','RegisterController@getRegister')->name('get.register');
        Route::post('register','RegisterController@postRegister');
        Route::get('logout','LoginController@getLogout')->name('get.logout');
        //Lấy lại mật khẩu
        Route::get('reset-password','ResetPasswordcontroller@getEmailReset')->name('get.email_reset_password');
        Route::post('reset-password','ResetPasswordcontroller@checkEmailResetPassword')->name('get.email_reset_password');
        //Route::get('change-password','ResetPasswordcontroller@changePassword')->name('get.change_password');
        Route::get('new-password','ResetPasswordcontroller@newPassword')->name('get.new_password');
        Route::post('new-password','ResetPasswordcontroller@savePassword');
        //đăng nhập vs google
        Route::get('/{social}/redirect', 'SocialAuthController@redirect')->name('get.login.social');
        Route::get('/{social}/callback', 'SocialAuthController@callback')->name('get.login.social_callback');
        //Xác thực email đki
        Route::get('email/verify','EmailVerifyController@getEmailVerify')->name('get.email_verify');
        Route::get('email/verify/register','EmailVerifyController@postRegister')->name('get.email_verify.register');
        Route::post('email/verify/register','EmailVerifyController@postRegister');
    });


    Route::get('','HomeController@index')->name('get.home');//Trang chủ
    Route::get('autocomplete','HomeController@autocomplete')->name('get.autocomplete');
    Route::get('do-uong-theo-loai/1','SanPhamTheoLoaiController@GetData');
    Route::get('do-uong-theo-loai/{slug}','SanPhamTheoLoaiController@index')
       ->where('slug', '[a-zA-Z0-9-_]+') // Bắt buộc phải là chuỗi a-z hoặc A-Z hoặc 0-9 hoặc - hoặc _
   // ->where('id', '[0-9]+')
        ->name('get.san_pham_theo_loai');//danh mục phẩm

    Route::get('chi-tiet-do-uong/{slug}','ChiTietSanPhamController@index')
       ->where('slug', '[a-zA-Z0-9-_]+') // Bắt buộc phải là chuỗi a-z hoặc A-Z hoặc 0-9 hoặc - hoặc _
        ->name('get.chi_tiet_san_pham');//chi tiết sản phẩm

    Route::get('lien-he','LienHeController@index')->name('get.lien_he');//liên hệ
    Route::get('chung-toi','VeChungToiController@index')->name('get.ve_chung_toi');//về chúng tôi
    Route::get('chinh-sach','ChinhSachController@index')->name('get.chinh_sach');//chính sách
    Route::get('tin-tuc','TinTucController@index')
     // ->where('slug', '[a-zA-Z0-9-_]+') // Bắt buộc phải là chuỗi a-z hoặc A-Z hoặc 0-9 hoặc - hoặc _
        ->name('get.bai_viet');//menu bài viết

    Route::get('chi-tiet-tin-tuc/{slug}','ChiTietTinTucController@index')
        ->where('slug', '[a-zA-Z0-9-_]+') // Bắt buộc phải là chuỗi a-z hoặc A-Z hoặc 0-9 hoặc - hoặc _
        //->where('id', '[0-9]+')//Phải là số từu 0-9
        ->name('get.chi_tiet_bai_viet');//chi tiết bài viết
    Route::get('gio-hang.html','GioHangController@index')->name('get.gio_hang');//giỏ hàng
    Route::get('thanh_toan.html','GioHangController@checkout')->name('get.gio_hang.thanh_toan');//đặt hàng
    Route::post('thanh_toan.html','GioHangController@pay');//thanh toán


    Route::group(['namespace' =>  'Ajax','prefix'=>'ajax'], function () {
        Route::get('add/cart/{id}','AjaxShoppingCartController@add')->name('get_ajax.shopping.add');
        Route::get('delete/cart/{id}','AjaxShoppingCartController@delete')->name('get_ajax.shopping.delete');
        Route::get('update/cart/{id}','AjaxShoppingCartController@update')->name('get_ajax.shopping.update');

    });

});
include 'route_admin.php';
include 'route_user.php';
