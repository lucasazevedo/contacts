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

Route::get('/', 'ContactController@index');
Route::get('/contact/create', 'ContactController@create');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/contact/store', 'ContactController@store');
