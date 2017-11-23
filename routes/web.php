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

Route::get('/home', 'BaseController@index')->name('home');

// Controller for updating user personal information.
Route::get('/user/update', 'UpdatePersonalInformationController@index')->name('user_update');
Route::post('/user/update', 'UpdatePersonalInformationController@update')->name('user_update_returned');
