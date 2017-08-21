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

// Admin
Route::get('admin', 'Admin\DashboardController@index')->name('admin');
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'user'], function() {
		Route::get('/', 'Admin\UserController@index')->name('admin.user');
		Route::get('edit/{id?}','Admin\UserController@edit')->name('admin.user.edit');
		Route::post('edit/{id}', 'Admin\UserController@update');
		Route::get('delete/{id}', 'Admin\UserController@destroy')->name('admin.user.delete');
		Route::get('get-url-delete','Admin\UserController@getUrlDelete')->name('admin.user.getUrlDelete');
	});
});

// Auth
Auth::routes();
// FrontEnd
Route::get('/', 'HomeController@index')->name('home');

// Route::prefix('en')->group(function () {
// 	// Auth
// 	Auth::routes();

// 	// FrontEnd
// 	Route::get('/', 'HomeController@index')->name('home');
// });

