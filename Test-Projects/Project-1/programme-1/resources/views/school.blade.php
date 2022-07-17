@extends('layouts.app')

@section('content')
    <h1>School Booking</h1> 
        <form id="school_form">
            <label for="school_event_date">Date:</label>
            <input type="date" id="school_event_date" name="school_event_date">
            <br><br>
            <label for="school_event_site">Event Site:</label>
            <select id="school_event_site" name="school_event_site">
                <option value="" disabled selected>--Choose Site--</option>
                <option value="sl">Salina</option>
                <option value="sr">Simar</option>
                <option value="gh">Ghadira</option>
                <option value="fr">Foresta 2000</option>
                <option value="ot">Other</option>
            </select>
            <br><br>            
            <label for="school_event_time">Event time:</label>
            <input type="time" id="school_event_time_from" name="school_event_time" value="09:00" disabled><input type="time" id="school_event_time_to" name="school_event_time" value="12:30" disabled>
            <br><br>
            <label for="school_event_staff_member">Staff member handling school visit:</label>
            <select id="school_event_staff_member" name="school_event_staff_member">
                <option value="" disabled selected>--Choose Staff Member--</option>
                <option value="m1">Thomas Shelby</option>
                <option value="m2">Grace Burgess</option>
            </select>
            <br><br>
            <label for="school_event_school_name">School Name:</label>
            <select id="school_event_school_name" name="school_event_school_name">
                <option value="" disabled selected>--Choose School Name--</option>
                <option value="s1">St Martins</option>
                <option value="s2">De La Salle</option>
            </select>
            <br><br>
            <label for="school_event_school_year">School Year:</label>
            <select id="school_event_school_year" name="school_event_school_year">
                <option value="" disabled selected>--Choose School Year--</option>
                <option value="y1">Year 1</option>
                <option value="y2">Year 2</option>
                <option value="y3">Year 3</option>
                <option value="y4">Year 4</option>
            </select>
            <br><br>
            <label for="school_event_num_students">Number Of Students:</label>
            <input type="numeric" id="school_event_num_students" name="school_event_num_students" pattern="[0-9]+">
            <br><br>
            <label for="school_event_teacher_name">Teacher Name:</label>
            <input type="text" id="school_event_teacher_name" name="school_event_teacher_name">
            <br><br>
            <label for="school_event_teacher_number">Teacher Contact Number:</label>
            <input type="text" id="school_event_teacher_number" name="school_event_teacher_number">
            <br><br>
            <label for="school_event_teacher_email">Teacher Email:</label>
            <input type="text" id="school_event_teacher_email" name="school_event_teacher_email">
            <br><br>
            <label for="school_event_donation">Donation:</label>
            <input type="numeric" id="school_event_donation" name="school_event_donation" pattern="[0-9]+">
            <br><br>
            <label>Sales:</label>
            <input type="checkbox" id="school_event_sales"></input>
        </form>
        <br>
        <div class="buttons">
            <div class="action_btn">
                <button name="submit" type="submit" value="draft" onclick="Save()">Save as Draft</button>
                <button name="submit" type="submit" value="confirm" onclick="Confirm()">Confirm Booking</button>
                <button name="submit" type="submit" value="amend" onclick="Amend()">Amend & Complete Booking</button>
                <button name="submit" type="submit" value="cancel" onclick="Cancel()">Cancel Event</button>
            </div>
        </div> 
@endsection