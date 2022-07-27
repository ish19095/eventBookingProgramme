@extends('layouts.app')

@section('content')
<h1>Create School Booking</h1>
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
<form autocomplete="off" method="post" action="{{route('schools.store')}}">
    <div class="col-lg-6">
        <div class="card widget-flat">
            <div class="card-body">
                <!-- Date -->
                <label for="school_event_date" class="form-label">Event Date:</label>
                <input id="school_event_date" name="school_event_date" class="form-control datepicker">

                <!-- <label for="school_event_date">Date:</label>
                <input type="date" class="form-control datepicker" id="school_event_date" name="school_event_date"> -->


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
                <select id="loc_id" name="loc_id" class="form-select"  >
                    <option value="" disabled selected>--Choose Site--</option>
                    @foreach($locations as $location)
                        <option value="{{$location->loc_id}}">{{$location->loc_name}}</option>
                    @endforeach
                </select> 
                <br>                        
                <!-- Staff member handling school visit -->
                <label for="schfrm_handler" class="form-label">Staff member handling school visit:</label>
                <select id="schfrm_handler" name="schfrm_handler" class="form-select"  >
                    <option value="" disabled selected>--Choose Staff Member--</option>
                    @foreach($users as $user)
                        <option value="{{$user->usr_id}}">{{$user->usr_email}}</option>
                    @endforeach
                </select>
                <br>
                <!-- School Name -->
                <label for="sch_id" class="form-label">School Name:</label>
                <select id="sch_id" name="sch_id" class="form-select"  >
                    <option value="" disabled selected>--Choose School Name--</option>
                    @foreach($schools as $school)
                        <option value="{{$school->sch_id}}">{{$school->sch_name}}</option>
                    @endforeach
                </select>
                <br>
                <!-- School Year -->
                <label for="schgrd_id" class="form-label">School Year:</label>
                <select id="schgrd_id" name="schgrd_id" class="form-select"  >
                    <option value="" disabled selected>--Choose School Year--</option>
                    @foreach($school_grades as $school_grade)
                        <option value="{{$school_grade->schgrd_id}}">{{$school_grade->schgrd_name}}</option>
                    @endforeach
                </select>
                <br>
                <!-- Number of students -->            
                <label for="schfrm_noOfStudent" class="form-label">Number Of Students:</label>
                <input data-toggle="touchspin" type="text" id="schfrm_noOfStudent" name="schfrm_noOfStudent" value="0"  >
                <br>
                <!-- Teacher Name -->
                <label for="schfrm_teacherName" class="form-label">Teacher Name:</label>
                <input type="text" id="schfrm_teacherName" name="schfrm_teacherName" class="form-control"  >
                <br>
                <!-- Teacher contact number -->
                <label for="schfrm_teacherNo" class="form-label">Teacher Contact Number:</label>
                <input type="text" id="schfrm_teacherNo" name="schfrm_teacherNo" class="form-control"  >
                <br>
                <!-- Teacher Email -->
                <label for="schfrm_teacherEmail" class="form-label">Teacher Email:</label>
                <input type="text" id="schfrm_teacherEmail" name="schfrm_teacherEmail" class="form-control"  >
                <br>
                <!-- Donation -->
                <label class="form-label" for="schfrm_donation">Donation:</label>
                <input data-toggle="touchspin" type="text" data-bts-prefix="€" id="schfrm_donation" name="schfrm_donation"  >
                <br>
                <!-- Sales -->
                <label class="form-check-label">Sales:</label>
                <input type="checkbox" id="schfrm_sales" name="schfrm_sales" class="form-check-input"  ></input>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    {{csrf_field()}}
    <br>
    <button class="btn btn-primary" type="submit" name="submit">Save</button>
</form> 
@endsection

@section('script')
<script>
    const events = JSON.parse(' {!! $future_events !!} ');
    var datesForDisable = [];
    
    for(let i = 0; i < events.length ; i++){
        const formatDate = (date) => {
            let d = new Date(date);
            let month = (d.getMonth() + 1).toString();
            let day = d.getDate().toString();
            let year = d.getFullYear();
            if (month.length < 2) {
                month = '0' + month;
            }
            if (day.length < 2) {
                day = '0' + day;
            }
            return [year, month, day].join('-');
        }
        // console.log(formatDate(events[i].temp_date));
        datesForDisable.push(formatDate(events[i].temp_date));
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