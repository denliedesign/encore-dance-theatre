<?php

use Illuminate\Support\Facades\Route;

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

Route::get('mission', function () {
    return view('mission');
});

Route::get('staff', function () {
    return view('staff');
});

Route::get('dance-class', function () {
    return view('dance-class');
});

Route::get('wear', function () {
    return view('wear');
});

//Route::get('summer', function () {
//    return view('summer');
//});

Route::get('teams', function () {
    return view('teams');
});

Route::get('news', function () {
    return view('news');
});

Route::get('fall', function () {
    return view('fall');
});

Route::get('prices', function () {
    return view('prices');
});

Route::get('/recital', function () {
    return view('/recital');
});

//Route::get('dancily', function () {
//    return view('dancily');
//});

Route::get('contact', 'ContactUsController@create')->name('contact.create');
Route::post('contact', 'ContactUsController@store')->name('contact.store');

Route::get('trial', 'FreeTrialController@create')->name('trial.create');
Route::post('trial', 'FreeTrialController@store')->name('trial.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
