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

Route::get('/home', 'FrontendController@index')->name('frontend');
Route::get('/', 'FrontendController@index')->name('frontend');
Route::get('/canton/{id}', 'FrontendController@canton')->name('canton');
Route::match(['get', 'post'],'search', 'FrontendController@search');

Auth::routes();

Route::get('/profil', 'HomeController@index')->name('profil');


