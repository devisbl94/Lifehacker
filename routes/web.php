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

Route::get('/', 'PagesController@home')->name('home');
Route::get('success', 'PagesController@success')->name('success');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register');

Route::get('login', 'Auth\LoginController@showLoginform')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('message', 'MessageController');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('task', 'TaskController');
});