<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showMenu(){
        return view('menu');
    }

    public function showAdmin(){
        return view('admin');
    }

    public function showEvent(){
        return view('event');
    }

    public function showCalendar(){
        return view('calendar');
    }

    public function showSchool(){
        return view('school');
    }

    public function showAttendance(){
        return view('attendance');
    }
}
