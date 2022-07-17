<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\LocationTest;
use App\Models\LocationTest as ModelsLocationTest;

class PagesController extends Controller
{

    public function retriveLocationsTest(){

        $locations = ModelsLocationTest::all();
        //$locations = ModelsLocationTest::orderBy('street', 'desc')->get();
        //$locations = ModelsLocationTest::where('address_no', '21')->get();


        return view('location_test', ['locations'=>$locations,]);

    }

    public function storeLocationTest(){

        return redirect('/');

    }

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

    public function storeEditLocation(){

        error_log(request('name'));

        return redirect('/');

    }

    // Testing forms:


        public function showTestForm(){
            return view('testForm');
        }
    
        public function storeTestForm(Request $request){
    
            return $request->name;

            // Model::create($request->all());
    
            // return redirect('/');
    
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