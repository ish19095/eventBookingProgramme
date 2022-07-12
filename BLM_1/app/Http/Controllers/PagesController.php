<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showMenu(){
        return view('index');
    }

    public function showAdmin(){
        return view('admin');
    }

    public function showCalendar(){
        return view('calendar');
    }

    public function showEditEmployee(){
        return view('edit_employee');
    }

    public function showEditLocation(){
        return view('edit_location');
    }

    public function showAddOrRemove(){
        return view('add_or_remove');
    }

    public function showRunReport(){
        return view('run_report');
    }

    public function showTest(){
        return view('test');
    }

    public function showTest2(){
        return view('test2');
    }

}