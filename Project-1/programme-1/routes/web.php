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
//     return view('welcome');
// });

// Route::get('/post/{num}', '\App\Http\Controllers\FirstController@index');

// Route::resource('posts', '\App\Http\Controllers\FirstController');

// Route::resource('/menu', '\App\Http\Controllers\MenuController');

// Route::get('/event', function(){
//     return view('event');
// });


Route::get('/', '\App\Http\Controllers\MenuController@showMenu');

Route::get('/menu', '\App\Http\Controllers\MenuController@showMenu');

Route::get('/admin', '\App\Http\Controllers\MenuController@showAdmin');

Route::get('/event', '\App\Http\Controllers\MenuController@showEvent');

Route::get('/calendar', '\App\Http\Controllers\MenuController@showCalendar');

Route::get('/school', '\App\Http\Controllers\MenuController@showSchool');

Route::get('/attendance', '\App\Http\Controllers\MenuController@showAttendance');
