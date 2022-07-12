<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuCont extends Controller
{
    public function showHome(){
        return view('home');
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

    public function showStatistics(){
        return view('statistics');
    }
}
