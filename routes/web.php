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



Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
route::get('/list','PostsController@index');

Route::get('/adopter/login', 'Auth\AdoptersLoginController@showLoginForm')->name('adopter.login');
Route::post('/adopter/login', 'Auth\AdoptersLoginController@login')->name('adopter.login.submit');
Route::get('/adopter', 'AdoptersController@index');


Route::resource('posts','PostsController');
Auth::routes();


Route::get('/dashboard', 'DashboardController@index');
