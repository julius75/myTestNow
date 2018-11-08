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

use App\Notifications\TaskCompleted;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    User::find(1)->notify(new TaskCompleted());
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create')->name('create');

//Route::get('/posts/{post}', 'PostController@show')->name('show');

//Route::get('/posts/{tags}/{post}/apply', 'PostController@apply')->name('apply');


Route::get('/store', 'ApplicationController@index')->name('store');

//Route::post('/posts/{tags}/{post}/subscriptions', 'SubsciptionController@store')->middleware('auth');

//tags
Route::get('/posts/{tags}/{post}', 'PostController@show')->name('show');

//displays all tags
Route::get('/posts/{tags}', 'PostController@index');

//Route::get('/posts/{id}/apply', 'PostController@apply')->name('apply');