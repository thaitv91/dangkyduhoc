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
	
	Route::group(['prefix'=>'page'], function() {
		Route::get('/', 'Admin\PageController@index')->name('admin.page.index');
		Route::get('/create','Admin\PageController@create')->name('admin.page.create');
		Route::post('/create','Admin\PageController@store')->name('admin.page.store');
		Route::get('/edit/{id}', 'Admin\PageController@edit')->name('admin.page.edit');
		Route::put('/edit/{id}', 'Admin\PageController@update')->name('admin.page.update');
		Route::get('delete/{id}', 'Admin\PageController@destroy')->name('admin.page.delete');
		Route::get('get-url-delete','Admin\PageController@getUrlDelete')->name('admin.page.getUrlDelete');
		Route::get('/edit-page/{id}','Admin\PageController@editPage')->name('admin.page.editpage');
		Route::put('/edit-page/{id}', 'Admin\PageController@updatePage')->name('admin.page.updatePage');
	});

	Route::group(['prefix'=>'page-field'], function(){
		Route::get('/', 'Admin\PageFieldController@index')->name('admin.pagefield.index');
		Route::get('/create', 'Admin\PageFieldController@create')->name('admin.pagefield.create');
		Route::post('/create','Admin\PageFieldController@store')->name('admin.pagefield.store');
		Route::get('/edit/{id}', 'Admin\PageFieldController@edit')->name('admin.pagefield.edit');
		Route::put('/edit/{id}', 'Admin\PageFieldController@update')->name('admin.pagefield.update');
		Route::delete('/{id}', 'Admin\PageFieldController@destroy')->name('admin.pagefield.delete');
	});

	Route::group(['prefix'=>'rating'], function(){
		Route::get('/', 'Admin\RatingController@index')->name('admin.rating.index');
		Route::get('/create', 'Admin\RatingController@create')->name('admin.rating.create');
		Route::post('/create','Admin\RatingController@store')->name('admin.rating.store');
		Route::get('/edit/{id}', 'Admin\RatingController@edit')->name('admin.rating.edit');
		Route::put('/edit/{id}', 'Admin\RatingController@update')->name('admin.rating.update');
		Route::get('delete/{id}', 'Admin\RatingController@destroy')->name('admin.rating.delete');
		Route::get('get-url-delete','Admin\RatingController@getUrlDelete')->name('admin.rating.getUrlDelete');
	});

});

Route::resource('/admin/universities', 'Admin\UniversityController');
Route::get('/admin/countries', 'Admin\CountryController@index')->name('admin.countries');
Route::get('/admin/countries/{country}/edit', 'Admin\CountryController@edit');
Route::post('/admin/countries/{country}/edit', 'Admin\CountryController@update')->name('countries.update');
Route::post('/admin/countries/{country}/delete', 'Admin\CountryController@destroy')->name('countries.destroy');

// auth
Auth::routes();

// FrontEnd
Route::get('/','User\HomeController@index');
//Route::post('/language-chooser', 'Language\LanguageController@changeLanguage');
//Route::post('/language/', array('before' => 'csrf', 'as'=>'language-chooser', 'uses' => 'Language\LanguageController@changeLanguage',) );

// html
Route::get('/html/guide', function() {
	return view('user.guide');
});
