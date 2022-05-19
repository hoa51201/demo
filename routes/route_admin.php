<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::group(['namespace' => 'Backend'], function () {
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('admin/login','AdminLoginController@getLoginAdmin')->name('get_backend.login');
        Route::post('admin/login','AdminLoginController@postLoginAdmin');
        Route::get('logout','AdminLoginController@getLogout')->name('get_backend.logout');
    });
});

Route::group(['namespace' => 'Backend','prefix' => 'admin','middleware' => 'CheckLoginAdmin'], function () {

    Route::get('','BackendHomeController@index')->name('get_backend.home');//Trang chủ
    Route::prefix('tong_quan')->group( function () {
        Route::get('','BackendHomeController@index')->name('get_backend.home');//Trang chủ
  });




    Route::prefix('loai_do_uong')->group( function () {
        Route::get('','BackendLoaiDoUongController@index')->name('get_backend.loai_do_uong.index');

        Route::get('create','BackendLoaiDoUongController@create')->name('get_backend.loai_do_uong.create');
        Route::post('create','BackendLoaiDoUongController@store');

        Route::get('update/{id}','BackendLoaiDoUongController@edit')->name('get_backend.loai_do_uong.update');
        Route::post('update/{id}','BackendLoaiDoUongController@update');

        Route::get('delete/{id}','BackendLoaiDoUongController@delete')->name('get_backend.loai_do_uong.delete');

  });

  Route::prefix('do_uong')->group( function () {
    Route::get('','BackendDoUongController@index')->name('get_backend.do_uong.index');

    Route::get('create','BackendDoUongController@create')->name('get_backend.do_uong.create');
    Route::post('create','BackendDoUongController@store');

    Route::get('update/{id}','BackendDoUongController@edit')->name('get_backend.do_uong.update');
    Route::post('update/{id}','BackendDoUongController@update');

    Route::get('view/{id}','BackendDoUongController@editview')->name('get_backend.do_uong.view');

    Route::get('delete/{id}','BackendDoUongController@delete')->name('get_backend.do_uong.delete');
    Route::post('paging', 'BackendDoUongController@paging');

});



Route::prefix('gia_ban')->group( function () {
    Route::get('','BackendGiaBanController@index')->name('get_backend.gia_ban.index');

    Route::get('create','BackendGiaBanController@create')->name('get_backend.gia_ban.create');
    Route::post('create','BackendGiaBanController@store');

    Route::get('update/{id}','BackendGiaBanController@edit')->name('get_backend.gia_ban.update');
    Route::post('update/{id}','BackendGiaBanController@update');

    Route::get('delete/{id}','BackendGiaBanController@delete')->name('get_backend.gia_ban.delete');

});

Route::prefix('nha_cung_cap')->group( function () {
    Route::get('','BackendNhaCungCapController@index')->name('get_backend.nha_cung_cap.index');

    Route::get('create','BackendNhaCungCapController@create')->name('get_backend.nha_cung_cap.create');
    Route::post('create','BackendNhaCungCapController@store');

    Route::get('update/{id}','BackendNhaCungCapController@edit')->name('get_backend.nha_cung_cap.update');
    Route::post('update/{id}','BackendNhaCungCapController@update');

    Route::get('delete/{id}','BackendNhaCungCapController@delete')->name('get_backend.nha_cung_cap.delete');

});





Route::prefix('hoa_don_nhap')->group( function () {
    Route::get('','BackendHoaDonNhapController@index')->name('get_backend.hoa_don_nhap.index');

    Route::get('create','BackendHoaDonNhapController@create')->name('get_backend.hoa_don_nhap.create');
    Route::post('create','BackendHoaDonNhapController@store');

    Route::get('update/{id}','BackendHoaDonNhapController@edit')->name('get_backend.hoa_don_nhap.update');
    Route::post('update/{id}','BackendHoaDonNhapController@update');

    Route::get('show/{id}','BackendHoaDonNhapController@show')->name('get_backend.hoa_don_nhap.show');

    Route::post('create_item/{id}','BackendChiTietHoaDonNhapController@store_item');

    Route::get('update_item/{id}','BackendChiTietHoaDonNhapController@edit_item')->name('get_backend.chi_tiet_hoa_don_nhap.update');
    Route::post('update_item/{id}','BackendChiTietHoaDonNhapController@update_item');

    Route::get('delete_item/{id}','BackendChiTietHoaDonNhapController@delete_item')->name('get_backend.chi_tiet_hoa_don_nhap.delete');
});

Route::prefix('don_hang')->group( function () {
    Route::get('','BackendDonHangController@index')->name('get_backend.don_hang.index');
    Route::get('don-hang-dang-xu-li','BackendDonHangController@index')->name('get_backend.don_hang.index1');
    Route::get('don-hang-dang-giao','BackendDonHangController@index')->name('get_backend.don_hang.index2');
    Route::get('don-hang-da-giao','BackendDonHangController@index')->name('get_backend.don_hang.index3');
    Route::get('don-hang-bi-huy','BackendDonHangController@index')->name('get_backend.don_hang.index4');
    Route::get('view/{id}','BackendDonHangController@view')->name('get_backend.don_hang.view');
    Route::get('success1/{id}','BackendDonHangController@success1')->name('get_backend.don_hang.success1');
    Route::get('success2/{id}','BackendDonHangController@success2')->name('get_backend.don_hang.success2');

    Route::get('cancel/{id}','BackendDonHangController@cancel')->name('get_backend.don_hang.cancel');
    Route::get('delete/{id}','BackendDonHangController@delete')->name('get_backend.don_hang.delete');
    // Route::get('reporting', function(){
    //     $database = \Config::get('database.connections.mysql');
    //     $file_name = time();
    //     $output = public_path() . '/report/output/' . $file_name;
    //     $ext = "pdf";

    //     \JasperPHP::process(
    //         public_path() . '/report/Danh_sach_nguoi_dung.jasper',
    //         $output,
    //         array($ext),
    //         array(),
    //         $database,
    //         false,
    //         false
    //     )->execute();
    //     return Redirect::to(Asset('report/output/' . $file_name . '.' . $ext));
    // });
});
Route::prefix('chi_tiet_don_hang')->group( function () {
    Route::get('delete/{id}','BackendChiTietDonHangController@delete')->name('get_backend.chi_tiet_don_hang.delete');
});

Route::prefix('bai_viet')->group( function () {
    Route::get('','BackendTinTucController@index')->name('get_backend.tin_tuc.index');

    Route::get('create','BackendTinTucController@create')->name('get_backend.tin_tuc.create');
    Route::post('create','BackendTinTucController@store');

    Route::get('update/{id}','BackendTinTucController@edit')->name('get_backend.tin_tuc.update');
    Route::post('update/{id}','BackendTinTucController@update');

    Route::get('delete/{id}','BackendTinTucController@delete')->name('get_backend.tin_tuc.delete');

});


});
 ?>
