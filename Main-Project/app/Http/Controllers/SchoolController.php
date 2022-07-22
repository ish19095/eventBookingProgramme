<?php

namespace App\Http\Controllers;

use DateTime;
use DB;
use Illuminate\Validation\Rule;
use App\Http\Requests\CreateSchoolRequest;
use Illuminate\Http\Request;
use App\Models\Location as Location; 
use App\Models\SchoolForm as SchoolForm;
use App\Models\SchoolGrade as SchoolGrade;
use App\Models\School as School;
use App\Models\User as User;

class SchoolController extends Controller
{
    //a function to generate a code for the form
    public function genCode($locCode, $locId){
        //check if there is a least one record of a form with that location.
        if(SchoolForm::where('loc_id', $locId)->get()->isEmpty()){
            //if there isn t a record create a temp code
            //the temp code is created so that the actual code always start at 0001
            $lastCode = 'SCH-' . $locCode . '-0000';
        }else{
            //if there at least 1 record get the last one
            $lastCode = SchoolForm::where('loc_id', $locId)->orderBy('schfrm_id', 'desc')->first()->schfrm_code;
        }

        // Get last 4 digits of code
        $lastInc = substr($lastCode, -4);

        // Make a new code with appending last increment + 1
        $newCode = 'SCH-' . $locCode . '-' . str_pad($lastInc + 1, 4, 0, STR_PAD_LEFT);
        return $newCode;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = SchoolForm::all()->sortBy('loc_id');

        return view('schools.index', compact('forms'));
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

        // $future_events = SchoolForm
        //     ::where('sch_startDate', '>=', date('Y-m-d H:i:s'))
        //     ->select('sch_startDate')
        //     ->get();

        $users = User
            ::where('usr_isActive', true)
            ->get();

        $schools = School
            ::where('sch_isActive', true)
            ->get();

        $school_grades = SchoolGrade
            ::where('schgrd_isActive', true)
            ->orderBy('schgrd_order')
            ->get();

            
            // dd([$locations, $users, $school_names, $school_grades]);

            return view('schools.create')
            ->with('locations', $locations)
            ->with('users', $users)
            ->with('schools', $schools)
            ->with('school_grades', $school_grades);
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

        // $this->validate($request, ['school_event_date' => "required", Rule::unique("school_form")->where(function ($query) use ($request){
        //     return $query->whereDate('schfrm_startDate', $request->school_event_date);
        //     	})
        // ]);

        try{
            $date = new DateTime($request->school_event_date);
            $timeFrom = new DateTime('09:00:00');
            $timeTo = new DateTime('12:30:00');

            $startDate = new DateTime($date->format('Y-m-d') .' ' .$timeFrom->format('H:i:s'));
            $startDate->format('Y-m-d H:i:s'); 
            $endDate = new DateTime($date->format('Y-m-d') .' ' .$timeTo->format('H:i:s'));
            $endDate->format('Y-m-d H:i:s');

            // Get the location code and id to be used as parameters to generate the form's code
            $locCode = DB::table('location')->where('loc_id', $request->loc_id)->value('loc_code');
            $locId = $request->loc_id;
            $code = $this->genCode($locCode, $locId);

            $newbooking = new SchoolForm;     
            $newbooking->schfrm_code = $code;           
            $newbooking->schfrm_startDate = $startDate;
            $newbooking->schfrm_endDate = $endDate;

            $newbooking->loc_id = $request->loc_id;
            $newbooking->schfrm_handler = $request->schfrm_handler;
            $newbooking->sch_id = $request->sch_id;
            $newbooking->schgrd_id = $request->schgrd_id;

            $newbooking->schfrm_noOfStudent = $request->schfrm_noOfStudent;
            $newbooking->schfrm_teacherName = $request->schfrm_teacherName;
            $newbooking->schfrm_teacherNo = $request->schfrm_teacherNo;
            $newbooking->schfrm_teacherEmail = $request->schfrm_teacherEmail;
            $newbooking->schfrm_donation = $request->schfrm_donation;
            $newbooking->schfrm_sales = $request->schfrm_sales;
            $newbooking->evtstat_id = DB::table('event_status')->where('evtstat_code', 'drft')->value('evtstat_id'); 

            // dd([$newbooking, $request->all()]);
            $newbooking->save();
            return redirect('/schools');
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
    public function show($id)
    {
        $form = SchoolForm::findOrFail($id);
        
        return view('schools.show', compact('form'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = SchoolForm::findOrFail($id);

        $locations = Location
            ::where('loc_isActive', true)
            ->get();

        $users = User
            ::where('usr_isActive', true)
            ->get();

        $schools = School
            ::where('sch_isActive', true)
            ->get();

        $school_grades = SchoolGrade
            ::where('schgrd_isActive', true)
            ->orderBy('schgrd_order')
            ->get();

        return view('schools.edit', compact('form'))
            ->with('locations', $locations)
            ->with('users', $users)
            ->with('schools', $schools)
            ->with('school_grades', $school_grades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $schoolForm = SchoolForm::findOrFail($id);
        $schoolForm->update($request->all());
        return redirect('/schools');
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
