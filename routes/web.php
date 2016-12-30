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
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@create');


/*
|--------------------------------------------------------------------------
| admin routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

  Route::get('/', 'Admin\AdminController@index');
  Route::get('logout', 'LoginController@getLogout');

  Route::group(['prefix'=>'post'], function (){

  Route::get('/', 'Admin\ManagepostController@index');
  Route::get('create', 'Admin\PostController@index');
  Route::post('create', 'Admin\PostController@create');
  Route::get('delete/{id}', 'Admin\PostController@delete');
  Route::get('edit/{id}', 'Admin\PostController@edit');

  });


});
