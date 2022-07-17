<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', '\App\Http\Controllers\MenuCont@showHome');

Route::get('/home', '\App\Http\Controllers\MenuCont@showHome');

// Route::get('/admin', '\App\Http\Controllers\MenuCont@showAdmin');

// Route::get('/event', '\App\Http\Controllers\MenuCont@showEvent');

// Route::get('/calendar', '\App\Http\Controllers\MenuCont@showCalendar');

// // Route::get('/school', '\App\Http\Controllers\MenuCont@showSchool');

// Route::get('/attendance', '\App\Http\Controllers\MenuCont@showAttendance');

// Route::get('/statistics', '\App\Http\Controllers\MenuCont@showStatistics');

Route::resource('/school', '\App\Http\Controllers\SchoolController');