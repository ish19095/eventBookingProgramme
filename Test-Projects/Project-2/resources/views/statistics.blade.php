@extends('layouts.app')

@section('content')
<h1>Nature Reserve Visitor Statistics</h1> 
    <form id="nrv_stats">
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
                    <label class="form-label">Total number of Visitors:</label>
                    <input data-toggle="touchspin" id="total_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <!-- Local visitors  -->
                    <label class="form-label">Local Visitors:</label>
                    <input data-toggle="touchspin" id="local_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                    <!-- Foreign visitors  -->
                    <label class="form-label">Foreign Visitors:</label>
                    <input data-toggle="touchspin" id="foreign_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <!-- Local visitors  -->
                    <label class="form-label">First Time Visitors:</label>
                    <input data-toggle="touchspin" id="first_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                    <!-- Foreign visitors  -->
                    <label class="form-label">Repeat Visitors:</label>
                    <input data-toggle="touchspin" id="repeat_visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <!-- BLM Member Visitors  -->
                    <label class="form-label">BLM Members:</label>
                    <input data-toggle="touchspin" id="member-visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                    <!-- BLM Non-Member Visitors  -->
                    <label class="form-label">BLM Non-Members:</label>
                    <input data-toggle="touchspin" id="non-member-visitors" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        

        <div class="col-lg-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <!-- Number of Photography hide sessions booked  -->
                    <label class="form-label">Number of Photography hide sessions booked:</label>
                    <input data-toggle="touchspin" id="hide-booked" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                    <!-- Number of Photographers booking hide  -->
                    <label class="form-label">Number of Photographers booking hide:</label>
                    <input data-toggle="touchspin" id="photo-hide-booked" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                    <!-- Number of tours taken by visitors  -->
                    <label class="form-label">Number of tours taken by visitors:</label>
                    <input data-toggle="touchspin" id="tours" data-bts-max="9999" value="0" data-btn-vertical="true" type="text">
                    <!-- Sales -->
                    <label class="form-label" for="nrv_stat_sales">Sales:</label>
                    <input data-toggle="touchspin" type="text" data-bts-prefix="€" data-decimals="2" value="0.00" id="nrv_stat_sales" name="nrv_stat_sales">
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    <br>
    <div class="buttons">
        <div class="action_btn">
            <button name="submit" type="submit" value="draft" onclick="Save()" class="btn btn-primary">Save</button>
            <button name="submit" type="submit" value="cancel" onclick="Cancel()" class="btn btn-primary">Cancel</button>
        </div>
    </div> 
@endsection