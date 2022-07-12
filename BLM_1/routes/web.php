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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/calendar', function () {
//     return view('calendar');
// });

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/test2', function () {
//     return view('test2');
// });


Route::get('/', '\App\Http\Controllers\PagesController@showMenu');
Route::get('/calendar', '\App\Http\Controllers\PagesController@showCalendar');
Route::get('/admin', '\App\Http\Controllers\PagesController@showAdmin');
Route::get('/addorremove', '\App\Http\Controllers\PagesController@showAddOrRemove');
Route::get('/editemployee', '\App\Http\Controllers\PagesController@showEditEmployee');
Route::get('/editlocation', '\App\Http\Controllers\PagesController@showEditLocation');
Route::get('/runreport', '\App\Http\Controllers\PagesController@showRunReport');
Route::get('/test', '\App\Http\Controllers\PagesController@showTest');
Route::get('/test2', '\App\Http\Controllers\PagesController@showTest2');




