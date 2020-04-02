<?php

use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('qr-code', function () {
    return QrCode::size(100)->generate('Welcome to kerneldev.com!');
});

Auth::routes([
    'register' => false
]);


Route::resource('booking', 'BookingController')->only(['index', 'create', 'store']);

Route::group(['as' => 'app.', 'prefix' => 'app', 'namespace' => 'App', 'middleware' => ['auth']], function(){

    Route::get('beranda', 'BerandaController@index')->name('beranda');

    Route::get('activity_log/data', 'ActivityLogController@data')->name('activity_log.data');
    Route::resource('activity_log', 'ActivityLogController');

    Route::get('kategori_pengunjung/data', 'KategoriPengunjungController@data')->name('kategori_pengunjung.data');
    Route::resource('kategori_pengunjung', 'KategoriPengunjungController');

    

    Route::get('user/data', 'UserController@data')->name('user.data');
    Route::resource('user', 'UserController');

    Route::post('kunjungan/submit_kode_booking', 'KunjunganController@submit_kode_booking')->name('kunjungan.submit_kode_booking');
    Route::get('kunjungan/{kunjungan}/cetak_ticket', 'KunjunganController@cetak_ticket')->name('kunjungan.cetak_ticket');
    Route::get('kunjungan/data', 'KunjunganController@data')->name('kunjungan.data');
    Route::resource('kunjungan', 'KunjunganController');

    Route::get('check_in/data', 'CheckInController@data')->name('check_in.data');
    Route::get('check_in', 'CheckInController@index')->name('check_in.index');
    Route::post('check_in/find', 'CheckInController@find')->name('check_in.find');

    Route::get('laporan_kunjungan', 'LaporanKunjunganController@index')->name('laporan_kunjungan.index');
    Route::get('laporan_kunjungan/pdf', 'LaporanKunjunganController@pdf')->name('laporan_kunjungan.pdf');

    Route::get('laporan_kunjungan_tahunan', 'LaporanKunjunganTahunanController@index')->name('laporan_kunjungan_tahunan.index');
    Route::get('laporan_kunjungan_tahunan/pdf', 'LaporanKunjunganTahunanController@pdf')->name('laporan_kunjungan_tahunan.pdf');

    Route::get('laporan_pendapatan', 'LaporanPendapatanController@index')->name('laporan_pendapatan.index');
    Route::get('laporan_pendapatan/pdf', 'LaporanPendapatanController@pdf')->name('laporan_pendapatan.pdf');

    Route::get('laporan_pendapatan_tahunan', 'LaporanPendapatanTahunanController@index')->name('laporan_pendapatan_tahunan.index');
    Route::get('laporan_pendapatan_tahunan/pdf', 'LaporanPendapatanTahunanController@pdf')->name('laporan_pendapatan_tahunan.pdf');

    
});
