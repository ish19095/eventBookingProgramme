@extends('layouts.app')

@section('content')
<h1>Nature Reserve Visitor Statistics</h1> 
<form id="nrv_stats" method="post" action="/statistics">
    <div class="col-lg-6">
        <div class="card widget-flat">
            <div class="card-body">
                <!-- Date -->
                <label for="nrv_stat_date" class="form-label">Date:</label>
                <input type="date" id="nrv_stat_date" name="nrv_stat_date" class="form-control">
                <br>
                <!-- Site -->
                <label for="nrv_stat_site" class="form-label">Event Site:</label>
                <select id="nrv_stat_site" name="nrv_stat_site" class="form-select">
                    <option value="" disabled selected>--Choose Site--</option>
                    <option value="sl">Salina</option>
                    <option value="sr">Simar</option>
                    <option value="gh">Ghadira</option>
                    <option value="fr">Foresta 2000</option>
                    <option value="ot">Other</option>
                </select> 
                <br>
                <!-- Total visitors  -->
                <label for="total_visitors" class="form-label">Total number of Visitors:</label>
                <input data-toggle="touchspin" id="total_visitors" name="total_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card widget-flat">
            <div class="card-body">
                <!-- Local visitors  -->
                <label for="local_visitors" class="form-label">Local Visitors:</label>
                <input data-toggle="touchspin" id="local_visitors" name="local_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                <!-- Foreign visitors  -->
                <label for="foreign_visitors" class="form-label">Foreign Visitors:</label>
                <input data-toggle="touchspin" id="foreign_visitors" name="foreign_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card widget-flat">
            <div class="card-body">
                <!-- Local visitors  -->
                <label for="first_visitors" class="form-label">First Time Visitors:</label>
                <input data-toggle="touchspin" id="first_visitors" name="first_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                <!-- Foreign visitors  -->
                <label for="repeat_visitors" class="form-label">Repeat Visitors:</label>
                <input data-toggle="touchspin" id="repeat_visitors" name="repeat_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card widget-flat">
            <div class="card-body">
                <!-- BLM Member Visitors  -->
                <label for="member_visitors" class="form-label">BLM Members:</label>
                <input data-toggle="touchspin" id="member_visitors" name="member_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                <!-- BLM Non-Member Visitors  -->
                <label for="non_member_visitors" class="form-label">BLM Non-Members:</label>
                <input data-toggle="touchspin" id="non_member_visitors" name="non_member_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card widget-flat">
            <div class="card-body">
                <!-- Number of Photography hide sessions booked  -->
                <label for="hide_booked" class="form-label">Number of Photography hide sessions booked:</label>
                <input data-toggle="touchspin" id="hide_booked" name="hide_booked" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                <!-- Number of Photographers booking hide  -->
                <label for="photo_hide_booked" class="form-label">Number of Photographers booking hide:</label>
                <input data-toggle="touchspin" id="photo_hide_booked" name="photo_hide_booked" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                <!-- Number of tours taken by visitors  -->
                <label for="tours" class="form-label">Number of tours taken by visitors:</label>
                <input data-toggle="touchspin" id="tours" name="tours" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                <!-- Sales -->
                <label class="form-label" for="nrv_stat_sales">Sales:</label>
                <input data-toggle="touchspin" type="text" data-bts-prefix="€" data-decimals="2" value="0.00" id="nrv_stat_sales" name="nrv_stat_sales">
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    {{csrf_field()}}
    <br>
    <button class="btn btn-primary" type="submit" name="submit">Save</button>
</form>
<br>
<div class="buttons">
    <div class="action_btn">
        <button name="submit" type="submit" value="draft" onclick="Save()" class="btn btn-primary">Save</button>
        <button name="submit" type="submit" value="cancel" onclick="Cancel()" class="btn btn-primary">Cancel</button>
    </div>
</div> 
@endsection