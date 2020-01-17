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


Auth::routes();

// Route::get('/', 'ArticleController@index');

Route::get('/home', 'ArticleController@index');

Route::get('/UserMiddleware/routes', 'ArticleController@index')->middleware('auth');


Route::prefix('/article')->group(function(){

	Route::post('/create', 'ArticleController@create')->middleware('auth'); //post

	Route::post('/store', 'ArticleController@store')->middleware('auth');

	Route::get('/show/{id}', 'ArticleController@show');

	Route::get('/edit/{id}', 'ArticleController@edit')->middleware(['Article','auth']);

	Route::post('/update/{id}', 'ArticleController@update')->middleware('auth');

	Route::get('/delete/{id}', 'ArticleController@destory')->middleware(['Article','auth']);
});

Route::fallback(function() {
    return redirect('/home');
});

