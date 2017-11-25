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

Route::get('/home', function () {
    return redirect('/');
});

// Routing for viewing user personal information.
Route::get('/user/update', 'UpdatePersonalInformationController@index')->name('user_update');
// Routing for updating user personal information.
Route::post('/user/update', 'UpdatePersonalInformationController@update')->name('user_update_returned');
// Routing for prompting user missing profile. UNDONE
Route::get('/user/bmi', 'UserHealthController@get_today_bmi');

// Routing for showing add weight page.
Route::get('user/weight', 'UserHealthController@add_today_weight')->name('user_view_weight');
// Routing for adding user today weight.
Route::post('user/store-weight', 'UserHealthController@store_today_weight')->name('user_record_weight');