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

Route::get('/', function () {
	return view('welcome');
});
// Routing for redirect home url 
Route::get('/home', function () {
	return redirect('/');
});
// Routing for viewing user personal information.
Route::get('/user/update', 'UpdatePersonalInformationController@index')->name('user_update');
// Routing for updating user personal information.
Route::post('/user/update', 'UpdatePersonalInformationController@update')->name('user_update_returned');
// Routing for showing user body mass index (BMI).
Route::get('/user/bmi', 'UserHealthController@get_today_bmi')->name('user_bmi');
// Routing for showing user body fat percentage (BFP).
Route::get('/user/bfp', 'UserHealthController@get_today_bfp')->name('user_bfp');
// Routing for showing add weight page.
Route::get('user/weight', 'UserHealthController@add_today_weight')->name('user_view_weight');
// Routing for adding user today weight.
Route::post('user/store-weight', 'UserHealthController@store_today_weight')->name('user_record_weight');
// Routing for timeline user weight, bmi and bfp.
Route::get('/user/trendline', 'UserHealthController@get_weight_trendline')->name('user_weight_trendline');
// Routing for sitemap.xml.
Route::get('/sitemap', 'SitemapController@index');
Route::get('/sitemap.xml', function(){
	return redirect('sitemap');
});

/** ??? */
// Routing for viewing contact_us 
Route::get('/contact_us', function () {
	return view('contact_us');
});
// Routing for get google map
Route::get('/contact_us', 'MapController@index');
// Routing for set locale



// Route::get('setlocale/{locale}', function ($locale) {
//   if (in_array($locale, \Config::get('app.locales'))) {
//     Session::put('locale', $locale);
//   }
//   return redirect()->back();
// });

// Routing for language switcher
Route::post('/language', 'LanguageSwitchController@update')->name('language_switcher');