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

	Route::group(['prefix'=>'guide'],function(){
		Route::get('/', 'Admin\GuideController@index')->name('admin.guide.index');
		Route::get('/create', 'Admin\GuideController@create')->name('admin.guide.create');
		Route::post('/create','Admin\GuideController@store')->name('admin.guide.store');
		Route::get('/edit/{id}', 'Admin\GuideController@edit')->name('admin.guide.edit');
		Route::put('/edit/{id}', 'Admin\GuideController@update')->name('admin.guide.update');
		Route::get('delete/{id}', 'Admin\GuideController@destroy')->name('admin.guide.delete');
		Route::get('get-url-delete','Admin\GuideController@getUrlDelete')->name('admin.guide.getUrlDelete');
	});

	Route::group(['prefix'=>'guide-topic'],function(){
		Route::get('/', 'Admin\GuideTopicController@index')->name('admin.guideTopic.index');
		Route::get('/create', 'Admin\GuideTopicController@create')->name('admin.guideTopic.create');
		Route::post('/create','Admin\GuideTopicController@store')->name('admin.guideTopic.store');
		Route::get('/edit/{id}', 'Admin\GuideTopicController@edit')->name('admin.guideTopic.edit');
		Route::put('/edit/{id}', 'Admin\GuideTopicController@update')->name('admin.guideTopic.update');
		Route::get('delete/{id}', 'Admin\GuideTopicController@destroy')->name('admin.guideTopic.delete');
		Route::get('get-url-delete','Admin\GuideTopicController@getUrlDelete')->name('admin.guideTopic.getUrlDelete');
	});

	Route::group(['prefix'=>'guide-question'],function(){
		Route::get('/', 'Admin\GuideQuestionController@index')->name('admin.guideQuestion.index');
		Route::get('/create', 'Admin\GuideQuestionController@create')->name('admin.guideQuestion.create');
		Route::post('/create','Admin\GuideQuestionController@store')->name('admin.guideQuestion.store');
		Route::get('/edit/{id}', 'Admin\GuideQuestionController@edit')->name('admin.guideQuestion.edit');
		Route::put('/edit/{id}', 'Admin\GuideQuestionController@update')->name('admin.guideQuestion.update');
		Route::get('delete/{id}', 'Admin\GuideQuestionController@destroy')->name('admin.guideQuestion.delete');
		Route::get('get-url-delete','Admin\GuideQuestionController@getUrlDelete')->name('admin.guideQuestion.getUrlDelete');
		Route::post('guide-topic/{id}','Admin\GuideQuestionController@ajax')->name('admin.guideQuestion.ajax');
	});

	Route::group(['prefix'=>'universities'],function(){
		Route::get('/', 'Admin\UniversityController@index')->name('admin.universities.index');
		Route::get('/create', 'Admin\UniversityController@create')->name('admin.universities.create');
		Route::post('/create','Admin\UniversityController@store')->name('admin.universities.store');
		Route::get('/edit/{id}', 'Admin\UniversityController@edit')->name('admin.universities.edit');
		Route::put('/edit/{id}', 'Admin\UniversityController@update')->name('admin.universities.update');
		Route::get('delete/{id}', 'Admin\UniversityController@destroy')->name('admin.universities.delete');
		Route::get('get-url-delete','Admin\UniversityController@getUrlDelete')->name('admin.universities.getUrlDelete');
	});

	Route::group(['prefix'=>'universities-meta'],function(){
		Route::get('/', 'Admin\UniversityMetaController@index')->name('admin.universityMeta.index');
		Route::get('/create', 'Admin\UniversityMetaController@create')->name('admin.universityMeta.create');
		Route::post('/create','Admin\UniversityMetaController@store')->name('admin.universityMeta.store');
		Route::get('/edit/{id}', 'Admin\UniversityMetaController@edit')->name('admin.universityMeta.edit');
		Route::put('/edit/{id}', 'Admin\UniversityMetaController@update')->name('admin.universityMeta.update');
		Route::get('delete/{id}', 'Admin\UniversityMetaController@destroy')->name('admin.universityMeta.delete');
		Route::get('get-url-delete','Admin\UniversityMetaController@getUrlDelete')->name('admin.universityMeta.getUrlDelete');
	});

	Route::group(['prefix'=>'universities-ranking'],function(){
		Route::get('/', 'Admin\UniversityRankingController@index')->name('admin.universityRank.index');
		Route::get('/create', 'Admin\UniversityRankingController@create')->name('admin.universityRank.create');
		Route::post('/create','Admin\UniversityRankingController@store')->name('admin.universityRank.store');
		Route::get('/edit/{id}', 'Admin\UniversityRankingController@edit')->name('admin.universityRank.edit');
		Route::put('/edit/{id}', 'Admin\UniversityRankingController@update')->name('admin.universityRank.update');
		Route::get('delete/{id}', 'Admin\UniversityRankingController@destroy')->name('admin.universityRank.delete');
		Route::get('get-url-delete','Admin\UniversityRankingController@getUrlDelete')->name('admin.universityRank.getUrlDelete');
	});

	Route::group(['prefix'=>'universities-statistic'],function(){
		Route::get('/', 'Admin\UniversityStatisticController@index')->name('admin.universityStatistic.index');
		Route::get('/create', 'Admin\UniversityStatisticController@create')->name('admin.universityStatistic.create');
		Route::post('/create','Admin\UniversityStatisticController@store')->name('admin.universityStatistic.store');
		Route::get('/edit/{id}', 'Admin\UniversityStatisticController@edit')->name('admin.universityStatistic.edit');
		Route::put('/edit/{id}', 'Admin\UniversityStatisticController@update')->name('admin.universityStatistic.update');
		Route::get('delete/{id}', 'Admin\UniversityStatisticController@destroy')->name('admin.universityStatistic.delete');
		Route::get('get-url-delete','Admin\UniversityStatisticController@getUrlDelete')->name('admin.universityStatistic.getUrlDelete');
	});
});
	
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

Route::get('/html/subjects', function() {
	return view('user.subjects');
});

Route::get('/html/fair', function() {
	return view('user.fair');
});


Route::get('/guide', 'User\GuideController@index')->name('user.guide');
Route::get('/guide/{slug}','User\GuideController@search')->name('user.guide.search');
Route::get('search/autocomplete', 'User\GuideController@autocomplete')->name('user.search.ajax');
Route::get('university/{slug}','User\UniversityController@viewDetail')->name('user.university.detail');
Route::get('career/{slug}','User\CareerController@viewDetail')->name('user.career.detail');

