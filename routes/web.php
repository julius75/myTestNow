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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/posts', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show')->name('show');

Route::get('/posts/{id}/apply', 'PostController@apply')->name('apply');

Route::get('/store', 'ApplicationController@index')->name('store');