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
})->name('home');



Route::resource('/events', '\App\Http\Controllers\EventController');
// Route::get('/events/create', '\App\Http\Controllers\EventController@create')->name('events/create');

Route::resource('/statistics', '\App\Http\Controllers\StatisticController');
Route::get('/statistics/create', '\App\Http\Controllers\StatisticController@create')->name('statistics');

Route::resource('/admins', '\App\Http\Controllers\AdminController');
Route::get('/admins/index', '\App\Http\Controllers\AdminController@index')->name('admins');

Route::resource('/locations', '\App\Http\Controllers\LocationController');
Route::get('/locations/create', '\App\Http\Controllers\LocationController@create')->name('locations');

Route::resource('/attendance', '\App\Http\Controllers\AttendanceController');
Route::get('/attendance/create', '\App\Http\Controllers\AttendanceController@create')->name('attendance');

Route::resource('/employees', '\App\Http\Controllers\EmployeeController');
Route::get('/employees/create', '\App\Http\Controllers\EmployeeController@create')->name('employees');

Route::group(['middleware'=>'web'], function(){

    Route::resource('/schools', '\App\Http\Controllers\SchoolController');
    // Route::get('schools/create', '\App\Http\Controllers\SchoolController@create')->name('schools/create');
    // Route::get('schools/{id}/edit', '\App\Http\Controllers\SchoolController@edit')->name('schools/edit');

});