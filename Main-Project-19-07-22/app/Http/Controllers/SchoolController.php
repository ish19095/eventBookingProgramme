<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchoolRequest;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('schools.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSchoolRequest $request)
    {
        // School::create($request->all());
        // return redirect('/home');
        try{
            $curDate = date('Y-m-d');
            if($request->school_event_date <= $curDate)
                return "Date is incorrect";

            else{
                $newbooking = new School;                
                $newbooking->school_event_date = $request->school_event_date;
                $newbooking->school_event_time_from = '09:00';
                $newbooking->school_event_time_to = '12:30';
                $newbooking->school_event_site = $request->school_event_site;
                $newbooking->school_event_staff_member = $request->school_event_staff_member;
                $newbooking->school_event_school_name = $request->school_event_school_name;
                $newbooking->school_event_school_year = $request->school_event_school_year;
                $newbooking->school_event_num_students = $request->school_event_num_students;
                $newbooking->school_event_teacher_name = $request->school_event_teacher_name;
                $newbooking->school_event_teacher_number = $request->school_event_teacher_number;
                $newbooking->school_event_teacher_email = $request->school_event_teacher_email;
                $newbooking->school_event_donation = $request->school_event_donation;
                $newbooking->school_event_sales = $request->school_event_sales;

                $newbooking->save();
                return redirect('/home');
            }
        } catch(Exception $e){
            return "";
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
