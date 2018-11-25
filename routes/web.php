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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/profil', 'ProfilController@index')->name('profil');
    Route::put('/profil/{id}', 'ProfilController@update')->name('update');
    Route::get('/profil/jobs', 'ProfilController@jobs')->name('jobs');

    Route::resource('job', 'JobController');

});


