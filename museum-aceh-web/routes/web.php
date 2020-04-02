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

Route::get('/', 'PagesController@home')->name('page.home');
Route::get('page/{slug}', 'PagesController@page')->name('page.page');
Route::get('posts', 'PagesController@posts')->name('page.posts');
Route::get('category/{slug}', 'PagesController@category')->name('page.category');
Route::get('post/{slug}', 'PagesController@post')->name('page.post');

Route::get('events', 'PagesController@events')->name('page.events');
Route::get('event/{slug}', 'PagesController@event')->name('page.event');

Route::get('contact', 'PagesController@contact')->name('page.contact');
Route::post('contact_submit', 'PagesController@contact_submit')->name('page.contact_submit');

Auth::routes([
    'register' => false
]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function(){

    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    Route::get('post/data', 'PostController@data')->name('post.data');
    Route::resource('post', 'PostController');

    Route::get('page/data', 'PageController@data')->name('page.data');
    Route::resource('page', 'PageController');

    Route::get('event/data', 'EventController@data')->name('event.data');
    Route::resource('event', 'EventController');

    Route::get('category/data', 'CategoryController@data')->name('category.data');
    Route::resource('category', 'CategoryController');

    Route::get('user/data', 'UserController@data')->name('user.data');
    Route::resource('user', 'UserController');

    Route::get('contact_message/data', 'ContactMessageController@data')->name('contact_message.data');
    Route::resource('contact_message', 'ContactMessageController');

});