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
Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'Admin\UserController@index')->name('admin.user');
        Route::get('edit/{id?}', 'Admin\UserController@edit')->name('admin.user.edit');
        Route::post('edit/{id}', 'Admin\UserController@update');
        Route::get('delete/{id}', 'Admin\UserController@destroy')->name('admin.user.delete');
        Route::get('get-url-delete', 'Admin\UserController@getUrlDelete')->name('admin.user.getUrlDelete');
    });

    Route::group(['prefix' => 'page'], function () {
        Route::get('/', 'Admin\PageController@index')->name('admin.page.index');
        Route::get('/create', 'Admin\PageController@create')->name('admin.page.create');
        Route::post('/create', 'Admin\PageController@store')->name('admin.page.store');
        Route::get('/edit/{id}', 'Admin\PageController@edit')->name('admin.page.edit');
        Route::put('/edit/{id}', 'Admin\PageController@update')->name('admin.page.update');
        Route::get('delete/{id}', 'Admin\PageController@destroy')->name('admin.page.delete');
        Route::get('get-url-delete', 'Admin\PageController@getUrlDelete')->name('admin.page.getUrlDelete');
        Route::get('/edit-page/{id}', 'Admin\PageController@editPage')->name('admin.page.editpage');
        Route::put('/edit-page/{id}', 'Admin\PageController@updatePage')->name('admin.page.updatePage');
    });

    Route::group(['prefix' => 'page-field'], function () {
        Route::get('/', 'Admin\PageFieldController@index')->name('admin.pagefield.index');
        Route::get('/create', 'Admin\PageFieldController@create')->name('admin.pagefield.create');
        Route::post('/create', 'Admin\PageFieldController@store')->name('admin.pagefield.store');
        Route::get('/edit/{id}', 'Admin\PageFieldController@edit')->name('admin.pagefield.edit');
        Route::put('/edit/{id}', 'Admin\PageFieldController@update')->name('admin.pagefield.update');
        Route::delete('/{id}', 'Admin\PageFieldController@destroy')->name('admin.pagefield.delete');
    });

    Route::group(['prefix' => 'rating'], function () {
        Route::get('/', 'Admin\RatingController@index')->name('admin.rating.index');
        Route::get('/create', 'Admin\RatingController@create')->name('admin.rating.create');
        Route::post('/create', 'Admin\RatingController@store')->name('admin.rating.store');
        Route::get('/edit/{id}', 'Admin\RatingController@edit')->name('admin.rating.edit');
        Route::put('/edit/{id}', 'Admin\RatingController@update')->name('admin.rating.update');
        Route::get('delete/{id}', 'Admin\RatingController@destroy')->name('admin.rating.delete');
        Route::get('get-url-delete', 'Admin\RatingController@getUrlDelete')->name('admin.rating.getUrlDelete');
    });

    Route::group(['prefix' => 'guide'], function () {
        Route::get('/', 'Admin\GuideController@index')->name('admin.guide.index');
        Route::get('/create', 'Admin\GuideController@create')->name('admin.guide.create');
        Route::post('/create', 'Admin\GuideController@store')->name('admin.guide.store');
        Route::get('/edit/{id}', 'Admin\GuideController@edit')->name('admin.guide.edit');
        Route::put('/edit/{id}', 'Admin\GuideController@update')->name('admin.guide.update');
        Route::get('delete/{id}', 'Admin\GuideController@destroy')->name('admin.guide.delete');
        Route::get('get-url-delete', 'Admin\GuideController@getUrlDelete')->name('admin.guide.getUrlDelete');
    });

    Route::group(['prefix' => 'guide-topic'], function () {
        Route::get('/', 'Admin\GuideTopicController@index')->name('admin.guideTopic.index');
        Route::get('/create', 'Admin\GuideTopicController@create')->name('admin.guideTopic.create');
        Route::post('/create', 'Admin\GuideTopicController@store')->name('admin.guideTopic.store');
        Route::get('/edit/{id}', 'Admin\GuideTopicController@edit')->name('admin.guideTopic.edit');
        Route::put('/edit/{id}', 'Admin\GuideTopicController@update')->name('admin.guideTopic.update');
        Route::get('delete/{id}', 'Admin\GuideTopicController@destroy')->name('admin.guideTopic.delete');
        Route::get('get-url-delete', 'Admin\GuideTopicController@getUrlDelete')->name('admin.guideTopic.getUrlDelete');
    });

    Route::group(['prefix' => 'guide-question'], function () {
        Route::get('/', 'Admin\GuideQuestionController@index')->name('admin.guideQuestion.index');
        Route::get('/create', 'Admin\GuideQuestionController@create')->name('admin.guideQuestion.create');
        Route::post('/create', 'Admin\GuideQuestionController@store')->name('admin.guideQuestion.store');
        Route::get('/edit/{id}', 'Admin\GuideQuestionController@edit')->name('admin.guideQuestion.edit');
        Route::put('/edit/{id}', 'Admin\GuideQuestionController@update')->name('admin.guideQuestion.update');
        Route::get('delete/{id}', 'Admin\GuideQuestionController@destroy')->name('admin.guideQuestion.delete');
        Route::get('get-url-delete', 'Admin\GuideQuestionController@getUrlDelete')->name('admin.guideQuestion.getUrlDelete');
        Route::post('guide-topic/{id}', 'Admin\GuideQuestionController@ajax')->name('admin.guideQuestion.ajax');
    });

    Route::group(['prefix' => 'course'], function () {
        Route::get('', 'Admin\CourseController@index')->name('admin.course');
        Route::get('create', 'Admin\CourseController@create')->name('admin.course.create');
        Route::post('create', 'Admin\CourseController@store');
        Route::get('edit/{id?}', 'Admin\CourseController@edit')->name('admin.course.edit');
        Route::post('edit/{id?}', 'Admin\CourseController@update');
        Route::get('delete/{id}', 'Admin\CourseController@destroy')->name('admin.course.delete');
        Route::get('get-url-delete', 'Admin\CourseController@getUrlDelete')->name('admin.course.getUrlDelete');
        Route::get('null-subject-slug', 'Admin\CourseController@nullSubjectSlugList')->name('admin.course.nullSubjectSlugList');
    });

    Route::group(['prefix' => 'universities'], function () {
        Route::get('/', 'Admin\UniversityController@index')->name('admin.universities.index');
        Route::get('/create', 'Admin\UniversityController@create')->name('admin.universities.create');
        Route::post('/create', 'Admin\UniversityController@store')->name('admin.universities.store');
        Route::get('/edit/{id}', 'Admin\UniversityController@edit')->name('admin.universities.edit');
        Route::put('/edit/{id}', 'Admin\UniversityController@update')->name('admin.universities.update');
        Route::get('delete/{id}', 'Admin\UniversityController@destroy')->name('admin.universities.delete');
        Route::get('get-url-delete', 'Admin\UniversityController@getUrlDelete')->name('admin.universities.getUrlDelete');
    });

    Route::group(['prefix' => 'universities-meta'], function () {
        Route::get('/', 'Admin\UniversityMetaController@index')->name('admin.universityMeta.index');
        Route::get('/create', 'Admin\UniversityMetaController@create')->name('admin.universityMeta.create');
        Route::post('/create', 'Admin\UniversityMetaController@store')->name('admin.universityMeta.store');
        Route::get('/edit/{id}', 'Admin\UniversityMetaController@edit')->name('admin.universityMeta.edit');
        Route::put('/edit/{id}', 'Admin\UniversityMetaController@update')->name('admin.universityMeta.update');
        Route::get('delete/{id}', 'Admin\UniversityMetaController@destroy')->name('admin.universityMeta.delete');
        Route::get('get-url-delete', 'Admin\UniversityMetaController@getUrlDelete')->name('admin.universityMeta.getUrlDelete');
    });

    Route::group(['prefix' => 'universities-ranking'], function () {
        Route::get('/', 'Admin\UniversityRankingController@index')->name('admin.universityRank.index');
        Route::get('/create', 'Admin\UniversityRankingController@create')->name('admin.universityRank.create');
        Route::post('/create', 'Admin\UniversityRankingController@store')->name('admin.universityRank.store');
        Route::get('/edit/{id}', 'Admin\UniversityRankingController@edit')->name('admin.universityRank.edit');
        Route::put('/edit/{id}', 'Admin\UniversityRankingController@update')->name('admin.universityRank.update');
        Route::get('delete/{id}', 'Admin\UniversityRankingController@destroy')->name('admin.universityRank.delete');
        Route::get('get-url-delete', 'Admin\UniversityRankingController@getUrlDelete')->name('admin.universityRank.getUrlDelete');
    });

    Route::group(['prefix' => 'universities-statistic'], function () {
        Route::get('/', 'Admin\UniversityStatisticController@index')->name('admin.universityStatistic.index');
        Route::get('/create', 'Admin\UniversityStatisticController@create')->name('admin.universityStatistic.create');
        Route::post('/create', 'Admin\UniversityStatisticController@store')->name('admin.universityStatistic.store');
        Route::get('/edit/{id}', 'Admin\UniversityStatisticController@edit')->name('admin.universityStatistic.edit');
        Route::put('/edit/{id}', 'Admin\UniversityStatisticController@update')->name('admin.universityStatistic.update');
        Route::get('delete/{id}', 'Admin\UniversityStatisticController@destroy')->name('admin.universityStatistic.delete');
        Route::get('get-url-delete', 'Admin\UniversityStatisticController@getUrlDelete')->name('admin.universityStatistic.getUrlDelete');
    });

    Route::group(['prefix' => 'career'], function () {
        Route::get('/', 'Admin\CareerController@index')->name('admin.career.index');
        Route::get('/create', 'Admin\CareerController@create')->name('admin.career.create');
        Route::post('/create', 'Admin\CareerController@store')->name('admin.career.store');
        Route::get('/edit/{id}', 'Admin\CareerController@edit')->name('admin.career.edit');
        Route::put('/edit/{id}', 'Admin\CareerController@update')->name('admin.career.update');
        Route::get('delete/{id}', 'Admin\CareerController@destroy')->name('admin.career.delete');
        Route::get('get-url-delete', 'Admin\CareerController@getUrlDelete')->name('admin.career.getUrlDelete');
    });

    Route::group(['prefix' => 'subject'], function () {
        Route::get('/', 'Admin\SubjectController@index')->name('admin.subject.index');
        Route::get('/create', 'Admin\SubjectController@create')->name('admin.subject.create');
        Route::post('/create', 'Admin\SubjectController@store')->name('admin.subject.store');
        Route::get('/edit/{id}', 'Admin\SubjectController@edit')->name('admin.subject.edit');
        Route::put('/edit/{id}', 'Admin\SubjectController@update')->name('admin.subject.update');
        Route::get('delete/{id}', 'Admin\SubjectController@destroy')->name('admin.subject.delete');
        Route::get('get-url-delete', 'Admin\SubjectController@getUrlDelete')->name('admin.subject.getUrlDelete');
    });

    Route::group(['prefix' => 'subject-career'], function () {
        Route::get('/', 'Admin\SubjectCareerController@index')->name('admin.subjectCareer.index');
        Route::get('/create', 'Admin\SubjectCareerController@create')->name('admin.subjectCareer.create');
        Route::post('/create', 'Admin\SubjectCareerController@store')->name('admin.subjectCareer.store');
        Route::get('/edit/{id}', 'Admin\SubjectCareerController@edit')->name('admin.subjectCareer.edit');
        Route::put('/edit/{id}', 'Admin\SubjectCareerController@update')->name('admin.subjectCareer.update');
        Route::get('delete/{id}', 'Admin\SubjectCareerController@destroy')->name('admin.subjectCareer.delete');
        Route::get('get-url-delete', 'Admin\SubjectCareerController@getUrlDelete')->name('admin.subjectCareer.getUrlDelete');
    });

    Route::group(['prefix' => 'map'], function () {
        Route::get('/', 'Admin\MapController@index')->name('admin.map.index');
        Route::get('/create', 'Admin\MapController@create')->name('admin.map.create');
        Route::post('/create', 'Admin\MapController@store')->name('admin.map.store');
        Route::get('/edit/{id}', 'Admin\MapController@edit')->name('admin.map.edit');
        Route::put('/edit/{id}', 'Admin\MapController@update')->name('admin.map.update');
        Route::get('delete/{id}', 'Admin\MapController@destroy')->name('admin.map.delete');
        Route::get('get-url-delete', 'Admin\MapController@getUrlDelete')->name('admin.map.getUrlDelete');
    });

    Route::group(['prefix' => 'map-location'], function () {
        Route::get('/', 'Admin\MapLocationController@index')->name('admin.mapLocation.index');
        Route::get('/create', 'Admin\MapLocationController@create')->name('admin.mapLocation.create');
        Route::post('/create', 'Admin\MapLocationController@store')->name('admin.mapLocation.store');
        Route::get('/edit/{id}', 'Admin\MapLocationController@edit')->name('admin.mapLocation.edit');
        Route::put('/edit/{id}', 'Admin\MapLocationController@update')->name('admin.mapLocation.update');
        Route::get('delete/{id}', 'Admin\MapLocationController@destroy')->name('admin.mapLocation.delete');
        Route::get('get-url-delete', 'Admin\MapLocationController@getUrlDelete')->name('admin.mapLocation.getUrlDelete');
    });

    //Menu

    Route::group(['prefix'=>'menu'], function () {
        Route::get('', 'Admin\MenuController@index')->name('admin.menu');
        Route::get('create', 'Admin\MenuController@create')->name('admin.menu.create');
        Route::get('update-1', 'Admin\MenuController@update1')->name('admin.menu.update1');
        Route::get('update-2', 'Admin\MenuController@update2')->name('admin.menu.update2');
        Route::get('update-3', 'Admin\MenuController@update3')->name('admin.menu.update3');
        Route::get('update-4', 'Admin\MenuController@update4')->name('admin.menu.update4');
        Route::get('get-url-delete', 'Admin\MenuController@getUrlDelete')->name('admin.menu.getUrlDelete');
        Route::get('destroy/{id}', 'Admin\MenuController@destroy')->name('admin.menu.delete');

        Route::post('create', 'Admin\MenuController@store');
        Route::post('get-country', 'Admin\MenuController@getCountry')->name('admin.menu.getCountry');
        Route::post('get-university', 'Admin\MenuController@getUniversity')->name('admin.menu.getUniversity');
    });

    Route::group(['prefix' => 'slider'], function () {
        Route::get('', 'Admin\SliderController@index')->name('admin.slider');
        Route::get('create', 'Admin\SliderController@create')->name('admin.slider.create');
        Route::post('create', 'Admin\SliderController@store');
        Route::get('edit/{id}', 'Admin\SliderController@edit')->name('admin.slider.edit');
        Route::post('edit/{id}', 'Admin\SliderController@update');
        Route::get('delete/{id}', 'Admin\SliderController@destroy')->name('admin.slider.delete');
        Route::get('get-image', 'Admin\SliderController@getImage')->name('admin.slider.getImage');
        Route::post('image-upload', 'Admin\SliderController@uploadImage')->name('admin.slider.uploadImage');
        Route::post('image-remove', 'Admin\SliderController@removeImage')->name('admin.slider.removeImage');
    });

    Route::group(['prefix' => 'scholarship'], function () {
        Route::get('', 'Admin\ScholarshipController@index')->name('admin.scholarship');
        Route::get('create', 'Admin\ScholarshipController@getCreate')->name('admin.scholarship.create');
        Route::post('create', 'Admin\ScholarshipController@postCreate')->name('admin.scholarship.create.post');
        Route::get('edit/{id}', 'Admin\ScholarshipController@edit')->name('admin.scholarship.edit');
		Route::get('remove/{id}', 'Admin\ScholarshipController@destroy')->name('admin.scholarship.remove');
        Route::post('edit/{id}', 'Admin\ScholarshipController@update');
		Route::post('search-course', 'Admin\ScholarshipController@searchCourse')->name('admin.scholarship.searchCourse');
//		Route::get('delete/{id}', 'Admin\SliderController@destroy')->name('admin.slider.delete');
//		Route::get('get-image', 'Admin\SliderController@getImage')->name('admin.slider.getImage');
//		Route::post('image-upload', 'Admin\SliderController@uploadImage')->name('admin.slider.uploadImage');
//		Route::post('image-remove', 'Admin\SliderController@removeImage')->name('admin.slider.removeImage');
    });

    Route::group(['prefix' => 'pathway'], function () {
        Route::get('', 'Admin\PathwayController@index')->name('admin.pathway');
        Route::get('create', 'Admin\PathwayController@getCreate')->name('admin.pathway.create');
        Route::post('create', 'Admin\PathwayController@postCreate')->name('admin.pathway.create.post');
		Route::get('edit/{id}', 'Admin\PathwayController@edit')->name('admin.pathway.edit');
		Route::post('edit/{id}', 'Admin\PathwayController@update');
		Route::get('remove/{id}', 'Admin\PathwayController@destroy')->name('admin.pathway.remove');
//		Route::get('get-image', 'Admin\SliderController@getImage')->name('admin.pathway.getImage');
//		Route::post('image-upload', 'Admin\SliderController@uploadImage')->name('admin.pathway.uploadImage');
//		Route::post('image-remove', 'Admin\SliderController@removeImage')->name('admin.pathway.removeImage');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('', 'Admin\ContactController@index')->name('admin.contact');
        Route::get('show/{id}', 'Admin\ContactController@show')->name('admin.contact.show');
        Route::get('destroy/{id}', 'Admin\ContactController@destroy')->name('admin.contact.destroy');
        Route::get('detail/{id}', 'Admin\ContactController@detail')->name('admin.contact.detail');
        Route::get('reply/{id}', 'Admin\ContactController@reply')->name('admin.contact.reply');
    });

    Route::group(['prefix' => 'custom-field'], function () {
        Route::get('', 'Admin\CustomFieldController@index')->name('admin.customField');
        Route::get('create', 'Admin\CustomFieldController@create')->name('admin.customField.create');
        Route::get('edit/{id}', 'Admin\CustomFieldController@edit')->name('admin.customField.edit');
        Route::get('destroy/{id}', 'Admin\CustomFieldController@destroy')->name('admin.customField.destroy');
        Route::get('get-slug', 'Admin\CustomFieldController@getSlug')->name('admin.customField.getSlug');
        Route::post('create', 'Admin\CustomFieldController@store');
        Route::post('edit/{id}', 'Admin\CustomFieldController@update');
    });
    Route::group(['prefix' => 'subject-career'], function () {
        Route::get('/', 'Admin\SubjectCareerController@index')->name('admin.subjectCareer.index');
        Route::get('/create', 'Admin\SubjectCareerController@create')->name('admin.subjectCareer.create');
        Route::post('/create', 'Admin\SubjectCareerController@store')->name('admin.subjectCareer.store');
        Route::get('/edit/{id}', 'Admin\SubjectCareerController@edit')->name('admin.subjectCareer.edit');
        Route::put('/edit/{id}', 'Admin\SubjectCareerController@update')->name('admin.subjectCareer.update');
        Route::get('delete/{id}', 'Admin\SubjectCareerController@destroy')->name('admin.subjectCareer.delete');
        Route::get('get-url-delete', 'Admin\SubjectCareerController@getUrlDelete')->name('admin.subjectCareer.getUrlDelete');
    });

    Route::group(['prefix' => 'map'], function () {
        Route::get('/', 'Admin\MapController@index')->name('admin.map.index');
        Route::get('/create', 'Admin\MapController@create')->name('admin.map.create');
        Route::post('/create', 'Admin\MapController@store')->name('admin.map.store');
        Route::get('/edit/{id}', 'Admin\MapController@edit')->name('admin.map.edit');
        Route::put('/edit/{id}', 'Admin\MapController@update')->name('admin.map.update');
        Route::get('delete/{id}', 'Admin\MapController@destroy')->name('admin.map.delete');
        Route::get('get-url-delete', 'Admin\MapController@getUrlDelete')->name('admin.map.getUrlDelete');
    });

    Route::group(['prefix' => 'map-location'], function () {
        Route::get('/', 'Admin\MapLocationController@index')->name('admin.mapLocation.index');
        Route::get('/create', 'Admin\MapLocationController@create')->name('admin.mapLocation.create');
        Route::post('/create', 'Admin\MapLocationController@store')->name('admin.mapLocation.store');
        Route::get('/edit/{id}', 'Admin\MapLocationController@edit')->name('admin.mapLocation.edit');
        Route::put('/edit/{id}', 'Admin\MapLocationController@update')->name('admin.mapLocation.update');
        Route::get('delete/{id}', 'Admin\MapLocationController@destroy')->name('admin.mapLocation.delete');
        Route::get('get-url-delete', 'Admin\MapLocationController@getUrlDelete')->name('admin.mapLocation.getUrlDelete');

        Route::group(['prefix' => 'slider'], function () {
            Route::get('', 'Admin\SliderController@index')->name('admin.slider');
            Route::get('create', 'Admin\SliderController@create')->name('admin.slider.create');
            Route::post('create', 'Admin\SliderController@store');
            Route::get('edit/{id}', 'Admin\SliderController@edit')->name('admin.slider.edit');
            Route::post('edit/{id}', 'Admin\SliderController@update');
            Route::get('delete/{id}', 'Admin\SliderController@destroy')->name('admin.slider.delete');
            Route::get('get-image', 'Admin\SliderController@getImage')->name('admin.slider.getImage');
            Route::post('image-upload', 'Admin\SliderController@uploadImage')->name('admin.slider.uploadImage');
            Route::post('image-remove', 'Admin\SliderController@removeImage')->name('admin.slider.removeImage');

        });
    });

    Route::group(['prefix' => 'apply-course'], function () {
        Route::get('', 'Admin\ApplyCourseController@index')->name('admin.applyCourse');
        Route::get('information/{user_id?}', 'Admin\ApplyCourseController@information')->name('admin.applyCourse.information');
    });

    Route::group(['prefix' => 'fair'], function () {
        Route::get('', 'Admin\FairController@index')->name('admin.fair');
        Route::get('popularity', 'Admin\FairController@indexPopularity')->name('admin.fair.popularity');
        Route::get('edit-popularity/{id}', 'Admin\FairController@editPopularity')->name('admin.fair.editPopularity');
        Route::post('edit-popularity/{id}', 'Admin\FairController@updatePopularity');
        Route::get('create-popularity', 'Admin\FairController@createPopularity')->name('admin.fair.createPopularity');
        Route::get('get-url-delete-popularity', 'Admin\FairController@getUrlDeletePopularity')->name('admin.fair.getUrlDeletePopularity');
        Route::get('delete-popularity/{id}', 'Admin\FairController@deletePopularity')->name('admin.fair.deletePopularity');
        Route::post('create-popularity', 'Admin\FairController@storePopularity');

        Route::get('register', 'Admin\FairController@indexRegister')->name('admin.fair.register');
        Route::get('show-register/{id}', 'Admin\FairController@showRegister')->name('admin.fair.showRegister');
        Route::get('delete-register/{id}', 'Admin\FairController@deleteRegister')->name('admin.fair.deleteRegister');
    });

    Route::group(['prefix'  =>  'configure', 'namespace' => 'Admin', 'as' => 'admin.'], function() {
        Route::get('', 'ConfigureController@index')->name('configure');
        Route::post('', 'ConfigureController@update');
    });
});
Route::get('/admin/countries', 'Admin\CountryController@index')->name('admin.countries');
Route::get('/admin/countries/{country}/edit', 'Admin\CountryController@edit');
Route::post('/admin/countries/{country}/edit', 'Admin\CountryController@update')->name('countries.update');
Route::post('/admin/countries/{country}/delete', 'Admin\CountryController@destroy')->name('countries.destroy');

// auth
Auth::routes();
Route::get('active', 'Admin\SystemController@activeAccount')->name('system.activeAccount');
// FrontEnd
Route::get('/', 'User\HomeController@index')->name('home');
//Route::post('/language-chooser', 'Language\LanguageController@changeLanguage');
//Route::post('/language/', array('before' => 'csrf', 'as'=>'language-chooser', 'uses' => 'Language\LanguageController@changeLanguage',) );

Route::get('menu', 'HomeController@index')->name('menu');
Route::get('home', function () {
    return view('home');
});
//Route::get('subject/{subject?}', 'HomeController@subject')->name('subject');

// html
Route::get('/html/guide-list', function () {
    return view('user.guide-list');
});

Route::get('/html/guide-detail', function () {
    return view('user.guide-detail');
});

Route::get('/html/apply', function () {
    return view('user.apply_html');
});

Route::get('/html/fair', function () {
    return view('user.fair_html');
});

Route::get('/html/compare', function () {
    return view('user.compare_html');
});

Route::get('/html/course-detail', function () {
    return view('user.course-detail-html');
});

Route::get('/html/search', function () {
    return view('user.search');
});

Route::get('/html/confirmation', function () {
    return view('user.confirmation');
});

Route::get('/guide', 'User\GuideController@index')->name('user.guide');
Route::get('/guide/{slug}', 'User\GuideController@search')->name('user.guide.search');
Route::get('/guide/category/{slug}', 'User\GuideController@guideCategory')->name('user.guide.category');
Route::get('search/autocomplete', 'User\GuideController@autocomplete')->name('user.search.ajax');
Route::get('university/{slug}', 'User\UniversityController@viewDetail')->name('user.university.detail');
Route::get('university/set-cookie/cookie-frequently-visited', 'User\UniversityController@setCookieFrequentlyVisitedUniversityIds')->name('user.university.setCookieFrequentlyVisitedUniversityIds');
Route::get('career/{slug}', 'User\CareerController@viewDetail')->name('user.career.detail');
Route::get('career/set-cookie/cookie-frequently-visited', 'User\CareerController@setCookieFrequentlyVisitedCareerIds')->name('user.career.setCookieFrequentlyVisitedCareerIds');
Route::get('subject/{slug}', 'User\SubjectController@viewDetail')->name('user.subject.detail');
Route::get('subject/set-cookie/cookie-frequently-visited', 'User\SubjectController@setCookieFrequentlyVisitedSubjectIds')->name('user.subject.setCookieFrequentlyVisitedSubjectIds');
//COMPARE AND APPLY COURSE
Route::get('get-course-count', 'User\HomeController@getCourseCount')->name('getCourseCount');
Route::get('subject/cookie-compare/set', 'User\SubjectController@setCookie')->name('user.subject.setCookie');
Route::get('subject/cookie-apply/set', 'User\SubjectController@setCookieApplyCourse')->name('user.subject.setCookieApplyCourse');
Route::get('compare', 'User\CourseController@compare')->name('user.course.compare');

Route::group(['prefix' => 'apply'], function () {
    Route::get('', 'User\CourseController@apply')->name('user.course.apply');
    Route::get('confirmation/{send_mail?}', 'User\ApplyCourseController@confirmation')->name('user.apply.confirmation');
    Route::post('', 'User\ApplyCourseController@applyCourse')->name('user.course.applyCourse');
    Route::post('submit-personal-detail', 'User\ApplyCourseController@storePersonalDetail')->name('user.apply.storePersonalDetail');
    Route::post('submit-education-work', 'User\ApplyCourseController@storeEducationAndWork')->name('user.apply.storeEducationAndWork');
    Route::post('submit-verification', 'User\ApplyCourseController@storeVerification')->name('user.apply.storeVerification');
    Route::post('submit-document', 'User\ApplyCourseController@storeDocument')->name('user.apply.storeDocument');
    Route::post('submit', 'User\ApplyCourseController@submit')->name('user.apply.submit');

    Route::post('upload-file', 'User\ApplyCourseController@uploadFile')->name('user.apply.uploadFile');
    Route::post('remove-file', 'User\ApplyCourseController@removeFile')->name('user.apply.removeFile');
    Route::get('get-file', 'User\ApplyCourseController@getFile')->name('user.apply.getFile');
});
Route::get('get-university', 'User\CourseController@getUniversity')->name('user.apply.getUniversity');
Route::get('get-course', 'User\CourseController@getCourse')->name('user.apply.getCourse');
Route::get('add-course', 'User\CourseController@addCourse')->name('user.apply.addCourse');

Route::get('store-assessment', 'User\FreeAssessmentController@storeAssessment')->name('assessment.store');

//Chat-box
Route::group(['prefix' => 'message'], function () {

    Route::group(['prefix' => 'guest'], function () {
        Route::get('', function () {
            return view('message.chat');
        });
        Route::get('get-history-message', 'Admin\MessageController@getHistoryMessage')->name('getHistoryMessage');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('', function () {
            return view('message.chat_admin');
        });
        Route::get('get-history-message/{chat_session}', 'Admin\MessageController@getHistoryMessageAdmin')->name('getHistoryMessageAdmin');
    });

    Route::get('send-message', 'Admin\MessageController@sendMessage')->name('sendMessage');
    Route::get('new-message', 'Admin\MessageController@createFormChat')->name('createFormChat');
});

//Fair
Route::group(['prefix'=>'fair'], function() {
    Route::get('', 'User\FairController@index')->name('user.fair');
    Route::get('register', 'User\FairController@register')->name('user.fair.register');
    Route::get('html/mail', function() {
        return view('email.fair_register');
    });
});

// contact
Route::get('contact', 'User\ContactController@getContact')->name('getContact');
Route::post('contact', 'User\ContactController@postContact')->name('postContact');

Route::get('/course/{slug}', 'User\AjaxController@getCourseDetail');

// ajax
Route::post('/course/similar', 'User\AjaxController@getSimilar');
Route::post('/course/filter', 'User\AjaxController@postFilter');
Route::post('/course/filter-subject', 'User\AjaxController@postFilterSubject');
Route::post('/course/filter-career', 'User\AjaxController@postFilterCareer');

// OAuth Routes
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');