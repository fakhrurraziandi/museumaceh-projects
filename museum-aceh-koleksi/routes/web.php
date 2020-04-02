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
    return redirect()->route('app.beranda.home');
});

Auth::routes();

Route::group(['as' => 'app.', 'prefix' => 'app', 'namespace' => 'App'], function(){

    Route::get('beranda/home', 'BerandaController@home')->name('beranda.home');
    Route::get('beranda/index', 'BerandaController@index')->name('beranda.index');

    Route::get('collection/data', 'CollectionController@data')->name('collection.data');
    Route::resource('collection', 'CollectionController');

    Route::get('collection_geologika/data', 'CollectionGeologikaController@data')->name('collection_geologika.data');
    Route::resource('collection_geologika', 'CollectionGeologikaController');
    
    Route::get('collection_biologika/data', 'CollectionBiologikaController@data')->name('collection_biologika.data');;
    Route::resource('collection_biologika', 'CollectionBiologikaController');
    
    Route::get('collection_etnografika/data', 'CollectionEtnografikaController@data')->name('collection_etnografika.data');;
    Route::resource('collection_etnografika', 'CollectionEtnografikaController');
    
    Route::get('collection_arkeologika/data', 'CollectionArkeologikaController@data')->name('collection_arkeologika.data');;
    Route::resource('collection_arkeologika', 'CollectionArkeologikaController');
    
    Route::get('collection_historika/data', 'CollectionHistorikaController@data')->name('collection_historika.data');;
    Route::resource('collection_historika', 'CollectionHistorikaController');
    
    Route::get('collection_numismatika/data', 'CollectionNumismatikaController@data')->name('collection_numismatika.data');;
    Route::resource('collection_numismatika', 'CollectionNumismatikaController');
    
    Route::get('collection_filologika/data', 'CollectionFilologikaController@data')->name('collection_filologika.data');;
    Route::resource('collection_filologika', 'CollectionFilologikaController');
    
    Route::get('collection_keramonologika/data', 'CollectionKeramonologikaController@data')->name('collection_keramonologika.data');;
    Route::resource('collection_keramonologika', 'CollectionKeramonologikaController');
    
    Route::get('collection_seni_rupa/data', 'CollectionSeniRupaController@data')->name('collection_seni_rupa.data');;
    Route::resource('collection_seni_rupa', 'CollectionSeniRupaController');
    
    Route::get('collection_teknologika/data', 'CollectionTeknologikaController@data')->name('collection_teknologika.data');;
    Route::resource('collection_teknologika', 'CollectionTeknologikaController');

    Route::get('collection/{collection}/image_archive/data', 'ImageArchiveController@data')->name('collection.image_archive.data');
    Route::resource('collection.image_archive', 'ImageArchiveController');

    Route::get('collection/{collection}/digital_collection/data', 'DigitalCollectionController@data')->name('collection.digital_collection.data');
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
