<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchoolRequest;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\Location as Location; 
use App\Models\SchoolForm as SchoolForm;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location
        ::where('loc_isActive', true)
        ->get();

        //dd($locations);

        return view('schools.create')
        ->with('locations',$locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location
            ::where('loc_isActive', true)
            ->get();

        $future_events = SchoolForm
            ::where('sch_startDate', '>=', date('Y-m-d H:i:s'))
            ->select('sch_startDate')
            ->get();

            dd($future_events);
            //dd($locations);

            return view('schools.create')
            ->with('locations',$locations);
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

                $date = new DateTime($request->school_event_date);
                $timeFrom = new DateTime('09:00:00');
                $timeTo = new DateTime('12:30:00');

                $startDate = new DateTime($date->format('Y-m-d') .' ' .$timeFrom->format('H:i:s'));
                $startDate->format('Y-m-d H:i:s'); 
                $endDate = new DateTime($date->format('Y-m-d') .' ' .$timeTo->format('H:i:s'));
                $endDate->format('Y-m-d H:i:s');

                $handler = array();
                $handler = seperateName($request->school_event_staff_member);

                $newbooking = new School;                
                $newbooking->sch_startDate = $startDate;
                $newbooking->sch_endDate = $endDate;

                $newbooking->loc_id = $request->school_event_site;
                $newbooking->sch_handler = DB::table('`user`')->where([['name', $handler->firstname], ['surname', $handler->lastname]])->value('usr_id');
                $newbooking->schnm_id = DB::table('school_name')->where('schnm_name', $request->school_event_school_name)->value('schnm_id');
                $newbooking->schgr_id = DB::table('school_grade')->where('schgr_name', $request->school_event_school_year)->value('schgr_id');

                $newbooking->sch_noOfStudent = $request->school_event_num_students;
                $newbooking->sch_teacherName = $request->school_event_teacher_name;
                $newbooking->sch_teacherNo = $request->school_event_teacher_number;
                $newbooking->sch_teacherEmail = $request->school_event_teacher_email;
                $newbooking->sch_donation = $request->school_event_donation;
                $newbooking->sch_sales = $request->school_event_sales;

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
        $locations = Location
        ::where('loc_isActive', true)
        ->get();

        //$school = School::where($sch_id = )

        //dd($locations);

        return view('schools.create')
        ->with('locations',$locations);
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

    // this function takes a whole name and seperated it into the first and last name.
    // the values will be returned in an array always the firstname first and lastname second.
    public function seperateName($name){
        $parts = explode(" ", $name);
        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
        else
        {
            $firstname = $name;
            $lastname = " ";
        }
        $names = array($firstname, $lastname);
        return $names;
    }

}
