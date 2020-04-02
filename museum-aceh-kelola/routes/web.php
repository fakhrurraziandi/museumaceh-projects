<?php

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

Auth::routes();

Route::group(['as' => 'app.', 'prefix' => 'app', 'namespace' => 'App', 'middleware' => ['auth']], function(){

    Route::get('beranda', 'BerandaController@index')->name('beranda');

    Route::get('user/data', 'UserController@data')->name('user.data');
    Route::resource('user', 'UserController');

    Route::get('collection/data', 'CollectionController@data')->name('collection.data');
    Route::resource('collection', 'CollectionController');

    Route::resource('collection_geologika', 'CollectionGeologikaController')->except(['index']);
    Route::resource('collection_biologika', 'CollectionBiologikaController')->except(['index']);
    Route::resource('collection_etnografika', 'CollectionEtnografikaController')->except(['index']);
    Route::resource('collection_arkeologika', 'CollectionArkeologikaController')->except(['index']);
    Route::resource('collection_historika', 'CollectionHistorikaController')->except(['index']);
    Route::resource('collection_numismatika', 'CollectionNumismatikaController')->except(['index']);
    Route::resource('collection_filologika', 'CollectionFilologikaController')->except(['index']);
    Route::resource('collection_keramonologika', 'CollectionKeramonologikaController')->except(['index']);
    Route::resource('collection_seni_rupa', 'CollectionSeniRupaController')->except(['index']);
    Route::resource('collection_teknologika', 'CollectionTeknologikaController')->except(['index']);

    Route::get('collection/{collection}/image_archive/data', 'ImageArchiveController@data')->name('collection.image_archive.data');
    Route::resource('collection.image_archive', 'ImageArchiveController');

    Route::get('collection/{collection}/digital_collection/data', 'DigitalCollectionController@data')->name('collection.digital_collection.data');
    Route::get('collection/store_ajax', 'DigitalCollection@store_ajax')->name('collection.digital_collection.store_ajax');
    Route::resource('collection.digital_collection', 'DigitalCollectionController');


    Route::get('event2/data', 'Event2Controller@data')->name('event2.data');
    Route::resource('event2', 'Event2Controller');

    Route::get('pegawai_pns/data', 'PegawaiPnsController@data')->name('pegawai_pns.data');
    Route::resource('pegawai_pns', 'PegawaiPnsController');

    Route::get('archive/data', 'ArchiveController@data')->name('archive.data');
    Route::resource('archive', 'ArchiveController');

    Route::get('pegawai_non_pns/data', 'PegawaiNonPnsController@data')->name('pegawai_non_pns.data');
    Route::resource('pegawai_non_pns', 'PegawaiNonPnsController');

    Route::resource('kunjungan', 'KunjunganController')->only(['index']);
    Route::resource('pendapatan', 'PendapatanController')->only(['index']);
    Route::resource('website', 'WebsiteController')->only(['index']);
    
    
});
