@extends('layouts.app')

@section('content')
<h1>Edit School Booking</h1>
@if(count($errors) > 0)
<br>
<div class="col-lg-6">
    <div class="card widget-flat">
        <div class="card-body alert alert-danger" role="alert">
            <ul style="list-style: none">
                @foreach($errors->all() as $error)
                    <li><strong>Error - </strong>{{$error}}</li>
                @endforeach
            </ul>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div> <!-- end col-->
<br>
@endif   
<form method="post" action="/schools/{{$form->schfrm_id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="schfrm_id" value="{{$form->schfrm_id}}">
    <div class="col-lg-6">
        <div class="card widget-flat">
            <div class="card-body">
                <!-- Date -->
                <label for="school_event_date" class="form-label">Event Date:</label>
                <input id="school_event_date" name="school_event_date" class="form-control datepicker"  value="{{$form->schfrm_startDate->format('Y-m-d')}}">
                <!-- <input id="school_event_date" name="school_event_date" placeholder="dd/mm/yyyy" data-date-assume-nearby-year="true" type="text" data-date-format="dd/mm/yyyy" data-date-today-btn="linked" data-date-start-date="0d" data-date-orientation="bottom" class="form-control" data-provide="datepicker" data-date-autoclose="true"> -->
                <br>
                <!-- Time -->
                <label for="school_event_time" class="form-label">Event time:</label>
                <ul style="list-style-type:none">
                    <li>Time From:<input class="form-control" type="time" id="school_event_time_from" name="external_event_time" value="09:00" disabled></li>
                    <li>Time To:<input class="form-control" type="time" id="school_event_time_to" name="external_event_time" value="12:30" disabled></li>
                </ul>
                <br>
                <!-- Site -->
                <label for="loc_id" class="form-label">Event Site:</label>
                <select id="loc_id" name="loc_id" class="form-select">
                    @foreach($locations as $location)
                        @if($location->loc_id == $form->loc_id)
                            <option value="{{$form->loc_id}}" selected>{{$location->loc_name}}</option>
                        @else
                            <option value="{{$location->loc_id}}">{{$location->loc_name}}</option>
                        @endif
                    @endforeach
                </select> 
                <br>                        
                <!-- Staff member handling school visit -->
                <label for="schfrm_handler" class="form-label">Staff member handling school visit:</label>
                <select id="schfrm_handler" name="schfrm_handler" class="form-select"  >
                    
                    @foreach($users as $user)
                        @if($user->usr_id == $form->schfrm_handler)
                            <option value="{{$form->schfrm_handler}}" selected>{{$user->usr_email}}</option>
                        @else
                            <option value="{{$user->usr_id}}">{{$user->usr_email}}</option>
                        @endif
                    @endforeach
                </select>
                <br>
                <!-- School Name -->
                <label for="sch_id" class="form-label">School Name:</label>
                <select id="sch_id" name="sch_id" class="form-select"  >
                    
                    @foreach($schools as $school)
                        @if($school->sch_id == $form->sch_id)
                            <option value="{{$form->sch_id}}" selected>{{$school->sch_name}}</option>
                        @else
                            <option value="{{$school->sch_id}}">{{$school->sch_name}}</option>
                        @endif
                    @endforeach
                </select>
                <br>
                <!-- School Year -->
                <label for="schgrd_id" class="form-label">School Year:</label>
                <select id="schgrd_id" name="schgrd_id" class="form-select"  >
                    @foreach($school_grades as $school_grade)    
                        @if($school_grade->schgrd_id == $form->schgrd_id)
                            <option value="{{$form->schgrd_id}}" selected>{{$school_grade->schgrd_name}}</option>
                        @else
                            <option value="{{$school_grade->schgrd_id}}">{{$school_grade->schgrd_name}}</option>
                        @endif 
                    @endforeach
                </select>
                <br>
                <!-- Number of students -->            
                <label for="schfrm_noOfStudent" class="form-label">Number Of Students:</label>
                <input data-toggle="touchspin" type="text" id="schfrm_noOfStudent" name="schfrm_noOfStudent" value="{{$form->schfrm_noOfStudent}}"  >
                <br>
                <!-- Teacher Name -->
                <label for="schfrm_teacherName" class="form-label">Teacher Name:</label>
                <input type="text" id="schfrm_teacherName" name="schfrm_teacherName" class="form-control" value="{{$form->schfrm_teacherName}}">
                <br>
                <!-- Teacher contact number -->
                <label for="schfrm_teacherNo" class="form-label">Teacher Contact Number:</label>
                <input type="text" id="schfrm_teacherNo" name="schfrm_teacherNo" class="form-control" value="{{$form->schfrm_teacherNo}}" >
                <br>
                <!-- Teacher Email -->
                <label for="schfrm_teacherEmail" class="form-label">Teacher Email:</label>
                <input type="text" id="schfrm_teacherEmail" name="schfrm_teacherEmail" class="form-control" value="{{$form->schfrm_teacherEmail}}" >
                <br>
                <!-- Donation -->
                <label class="form-label" for="schfrm_donation">Donation:</label>
                <input data-toggle="touchspin" type="text" data-bts-prefix="€" id="schfrm_donation" name="schfrm_donation" value="{{$form->schfrm_donation}}" >
                <br>
                <!-- Sales -->
                <label class="form-check-label">Sales:</label>
                <input type="checkbox" id="schfrm_sales" name="schfrm_sales" class="form-check-input" value="{{$form->schfrm_sales}}" ></input>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <br>
    <button class="btn btn-primary" type="submit" name="submit">Save</button>
</form> 

<ul id="days" style="display: none">
    @foreach($future_events as $future_event)
        <li id="{{$future_event->schfrm_id}}">{{$future_event->temp_date->format('Y-m-d')}}</li>
    @endforeach
</ul>
@endsection

@section('script')
<script>
    var datesForDisable = [];
    const temp = document.getElementById('days');
    const items = temp.getElementsByTagName('li');

    for(let i = 0; i < items.length ; i++){
        datesForDisable.push(items[i].innerHTML);
    }

    for(let i = 0; i < items.length ; i++){
        console.log(datesForDisable[i]);
    }

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        datesDisabled: datesForDisable
    });
 
</script>

<style>
    .datepicker{
        color: blue;
    }
</style>
@endsection