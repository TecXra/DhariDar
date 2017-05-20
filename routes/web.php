<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index','HomeController@index');
Route::get('/user','MainController@users');
Route::get('/serviceprovider','MainController@serviceProviders');
Route::get('/profile/{id}','MainController@profileOfServiceProvider');
Route::get('/category/{id}','MainController@CategoriesOfUser');
Route::get('/all_categories','MainController@AllCategories');
Route::get('/site_user_request/{id}','MainController@siteUserRequest');
