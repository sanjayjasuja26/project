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
Route::get('/login','LoginController@index');
Route::get('/logout','LoginController@getLogout');
Route::get('/signUp','SignupController@index');
Route::post('/signUp','SignupController@create');
Route::post('/login','LoginController@create');
Route::get('/upload','UploadController@index');
Route::post('/upload','UploadController@image');

Route::get('/disp/{id}','DisplayController@index');
Route::post('/disp','DisplayController@create');
Route::get('/like/{id}','LikeController@create');
Route::get('/delete/{id}','DisplayController@delete');
Route::get('/dislike/{id}','LikeController@dislike');
