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

Route::get('/', '\App\Http\Controllers\NavController@showHome');

Route::get('/index', '\App\Http\Controllers\NavController@showHome');

Route::get('/admin', '\App\Http\Controllers\NavController@showAdmin');

Route::get('/event', '\App\Http\Controllers\NavController@showEvent');

Route::get('/calendar', '\App\Http\Controllers\NavController@showCalendar');

Route::get('/school', '\App\Http\Controllers\NavController@showSchool');

Route::get('/attendance', '\App\Http\Controllers\NavController@showAttendance');


