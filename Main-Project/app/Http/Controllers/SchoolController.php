<?php

namespace App\Http\Controllers;

use DateTime;
use DB;
use Illuminate\Validation\Rule;
use App\Http\Requests\CreateSchoolRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Location as Location; 
use App\Models\SchoolForm as SchoolForm;
use App\Models\SchoolGrade as SchoolGrade;
use App\Models\School as School;
use App\Models\User as User;
use App\Models\EventStatus as EventStatus; 

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

    //a funciton that goes through the database to check if date already exists
    public function checkDate($request){
        $dateExists = DB::table('school_form')
        ->where('temp_date', date($request->school_event_date))
        ->first();

        if($dateExists === null)
            return false;
        else
            return true;
    }

    public function updateDate($request){
        $dateExists = DB::table('school_form')
        ->where('temp_date', date($request->school_event_date))
        ->where('schfrm_id', '!=', $request->schfrm_id)
        ->get();

        if(count($dateExists) <= 1)
            return false;
        else
            return true;
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

        $future_events = SchoolForm
            ::where('temp_date', '>=', date('Y-m-d'))
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

        return view('schools.create')
        ->with('locations', $locations)
        ->with('users', $users)
        ->with('schools', $schools)
        ->with('future_events', $future_events)
        ->with('school_grades', $school_grades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // School::create($request->all());
        // return redirect('/home');

        // $this->validate($request, ['school_event_date' => "required", Rule::unique("school_form")->where(function ($query) use ($request){
        //     return $query->whereDate('schfrm_startDate', $request->school_event_date);
        //     	})
        // ]);
        $messages = [
            'school_event_date.required' => 'Date is missing!',
            'loc_id.required' => 'Site is missing!',
            'schfrm_handler.required' => 'Staff Member is missing!',
            'sch_id.required' => 'School Name is missing!',
            'schgrd_id.required' => 'School Year is missing!',
            'schfrm_noOfStudent.required' => 'Number of Students is missing!',
            'schfrm_noOfStudent.min' => 'Number of Students cannot be 0!',
            'schfrm_teacherName.required' => 'Teacher\'s Name missing!',
            'schfrm_teacherNo.required' => 'Teacher\'s Number missing!',
            'schfrm_teacherEmail.required' => 'Teacher\'s Email is missing!'
        ];

        $validator = Validator::make($request->all(), [
            'school_event_date' => 'required',
            'loc_id' => 'required',
            'schfrm_handler' => 'required',
            'sch_id' => 'required',
            'schgrd_id' => 'required',
            'schfrm_noOfStudent' => 'required|numeric|min:1',
            'schfrm_teacherName' => 'required',
            'schfrm_teacherNo' => 'required|numeric',
            'schfrm_teacherEmail' => 'required|email:rfc,dns'
        ], $messages);

        if ($validator->fails()) {
            return redirect('schools/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($this->checkDate($request) == true){
            return abort(404); 
        }

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
                if($request->schfrm_sales == 'on'){
                    $newbooking->schfrm_sales = true;
                }
                else{
                    $newbooking->schfrm_sales = false;
                }
            $newbooking->evtstat_id = DB::table('event_status')->where('evtstat_code', 'drft')->value('evtstat_id'); 
            $newbooking->temp_date = $request->school_event_date;

            // dd([$request->all(), $newbooking]);
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
        // $form = SchoolForm::findOrFail($id);
        
        // return view('schools.show', compact('form'));
    
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

        $future_events = SchoolForm
            ::where('temp_date', '>=', date('Y-m-d'))
            ->get();

        $event_status = EventStatus
            ::where('evtstat_isActive', true)
            ->get();

        return view('schools.edit', compact('form'))
            ->with('future_events', $future_events)
            ->with('locations', $locations)
            ->with('users', $users)
            ->with('schools', $schools)
            ->with('event_status', $event_status)
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
        $messages = [
            'school_event_date.required' => 'Date is missing!',
            'loc_id.required' => 'Site is missing!',
            'schfrm_handler.required' => 'Staff Member is missing!',
            'sch_id.required' => 'School Name is missing!',
            'schgrd_id.required' => 'School Year is missing!',
            'schfrm_noOfStudent.required' => 'Number of Students is missing!',
            'schfrm_noOfStudent.min' => 'Number of Students cannot be 0!',
            'schfrm_teacherName.required' => 'Teacher\'s Name missing!',
            'schfrm_teacherNo.required' => 'Teacher\'s Number missing!',
            'schfrm_teacherEmail.required' => 'Teacher\'s Email is missing!'
        ];

        $validator = Validator::make($request->all(), [
            'school_event_date' => 'required',
            'loc_id' => 'required',
            'schfrm_handler' => 'required',
            'sch_id' => 'required',
            'schgrd_id' => 'required',
            'schfrm_noOfStudent' => 'required|numeric|min:1',
            'schfrm_teacherName' => 'required',
            'schfrm_teacherNo' => 'required|numeric',
            'schfrm_teacherEmail' => 'required|email:rfc,dns'
        ], $messages);

        if ($validator->fails()) {
            return redirect('schools/edit')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($this->updateDate($request) == true){
            return "Date in use"; 
        }

        // dd([$request->all(), $schoolForm]);

        $schoolForm = SchoolForm::findOrFail($id);
        if($request->has('confirm'))
            $schoolForm->evtstat_id = DB::table('event_status')->where('evtstat_code', 'conf')->value('evtstat_id');
        $schoolForm->update($request->all());
        return redirect('/schools');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = SchoolForm::where('schfrm_id', $id)->delete();
        return redirect('/schools');
    }
}
