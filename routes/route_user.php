<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'User','prefix' => 'user','middleware' => 'CheckLoginUser'], function () {
    Route::get('','UserController@index')->name('get_user.home');//Trang chủ
    Route::get('thong_tin_ca_nhan/{id}','ProfileController@index')->name('get_user.thong_tin_ca_nhan.index');
    Route::post('thong_tin_ca_nhan/{id}','ProfileController@update');
    
    Route::get('don_hang','OrderController@index')->name('get_user.don_hang.index');
    Route::get('view/{id}','OrderController@view')->name('get_user.don_hang.view');
    Route::get('success/{id}','OrderController@success')->name('get_user.don_hang.success');
    Route::get('cancel/{id}','OrderController@cancel')->name('get_user.don_hang.cancel');
    Route::get('delete/{id}','OrderController@delete')->name('get_user.don_hang.delete');
});
 ?>