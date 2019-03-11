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

Route::get('/home', 'HomeController@index')->name('home');

// ログインユーザーのみ
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'UserController@index')->name('user_home');
    Route::post('/user/follow', 'UserController@follow');
    Route::post('/user/follow_request', 'UserController@follow_request');
    Route::resource('/tweet', 'TweetController');
});
