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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('/schools', '\App\Http\Controllers\SchoolController');

Route::resource('/events', '\App\Http\Controllers\EventController');

Route::resource('/statistics', '\App\Http\Controllers\StatisticController');

Route::resource('/admins', '\App\Http\Controllers\AdminController');

Route::resource('/attendance', '\App\Http\Controllers\AttendanceController');

Route::resource('/calendar', '\App\Http\Controllers\CalendarController');