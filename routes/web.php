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
Route::get('admin', 'Admin\DashboardController@index');

Route::resource('/admin/universities', 'Admin\UniversityController');
// Auth
Auth::routes();
// FrontEnd
Route::get('/', 'HomeController@index')->name('home');
