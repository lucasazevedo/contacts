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
Route::get('/contact/create', 'ContactController@create')->middleware('auth');
Route::get('/contact/{contact}', 'ContactController@show');
Route::get('/contact/edit/{contact}', 'ContactController@edit')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact/delete/{contact}', 'ContactController@delete')->middleware('auth');

Route::post('/contact/store', 'ContactController@store')->middleware('auth');
Route::post('/contact/update/{contact}', 'ContactController@update')->middleware('auth');
