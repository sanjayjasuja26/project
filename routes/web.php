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


Route::get('/', 'DefaultController@index');
Route::get('/gaming', 'GamingController@index');
Route::get('/movie', 'MovieController@index');
Route::get('/nsfw', 'NsfwController@index');
Route::get('/gif','GifController@index');
Route::get('/login','LoginController@index');
Route::get('/logout','LoginController@getLogout');
Route::get('/signUp','SignupController@index');
Route::post('/signUp','SignupController@create');
Route::post('/login','LoginController@create');
Route::get('/upload','UploadController@index');
Route::post('/upload','UploadController@image');

Route::get('/disp/{id}','DisplayController@index');
