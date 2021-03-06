

<?php $__env->startSection('content'); ?>
<h1>Event Booking</h1>
<ul class="nav nav-tabs nav-justified nav-bordered mb-3">
    <li class="nav-item">
        <a href="#internal_content" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <i class="mdi d-md-none d-block">Internal Form</i>
            <span class="d-none d-md-block">Internal Form</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#external_content" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="mdi d-md-none d-block">External Form</i>
            <span class="d-none d-md-block">External Form</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane show active" id="internal_content">
        <form id="internal_form" method="post" action="/events">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <!-- Date -->
                        <label for="internal_event_date" class="form-label">Date:</label>
                        <input type="text" class="form-control date" id="internal_event_date" data-toggle="date-picker" data-cancel-class="btn-warning">
                        <br>
                        <!-- Time -->
                        <label for="internal_event_time" class="form-label">Event time:</label>
                        <ul style="list-style-type:none">
                            <li>Time From:<input class="form-control" type="time" id="internal_event_time_from" name="internal_event_time"></li>
                            <li>Time To:<input class="form-control" type="time" id="internal_event_time_to" name="internal_event_time"></li>
                            <li class="form-check-label" ><input type="checkbox" class="form-check-input" id="internal_event_all_day" name="internal_event_all_day">  All Day</li>
                        </ul>
                        <br>
                        <!-- Site -->
                        <label for="internal_event_site" class="form-label">Event Site:</label>
                        <select id="internal_event_site" name="internal_event_site" class="form-select">
                            <option disabled selected>--Choose Site--</option>
                            <option value="sl">Salina</option>
                            <option value="sr">Simar</option>
                            <option value="gh">Ghadira</option>
                            <option value="fr">Foresta 2000</option>
                            <option value="ot">Other</option>
                        </select>
                        <br>
                        <!-- Type -->
                        <label for="internal_event_type" class="form-label">Event Type:</label>
                        <select id="internal_event_type" name="internal_event_type" class="form-select">
                            <option  disabled selected>--Choose Type--</option>
                            <option value="sm">Staff Meeting</option>
                            <option value="cm">Council Meeting</option>
                            <option value="sse">Staff Social Event</option>
                        </select>
                        <br>
                        <!-- BLM Dept -->
                        <label for="internal_event_dept" class="form-label">Main BLM Department responsible for event:</label>
                        <select id="internal_event_dept" name="internal_event_dept" class="form-select">
                            <option value="" disabled selected>--Choose Department--</option>
                            <option value="admin">Administration</option>
                            <option value="manage">Management</option>
                            <option value="conser">Conversation</option>
                        </select>
                        <br>
                        <!-- Staff person handling event -->
                        <label for="internal_event_staff_member" class="form-label">Staff member handling event:</label>
                        <select id="internal_event_staff_member" name="internal_event_staff_member" class="form-select">
                            <option value="" disabled selected>--Choose Staff Member--</option>
                            <option value="m1">Thomas Shelby</option>
                            <option value="m2">Grace Burgess</option>
                        </select>
                        <br>
                        <!-- Other person to be notified -->
                        <label for="internal_event_other_member" class="form-label">Other person to be notified:</label>
                        <select id="internal_event_other_member" name="internal_event_other_member" class="form-select">
                            <option value="" disabled selected>--Choose Staff Member--</option>
                            <option value="m1">Ada Shelby</option>
                            <option value="m2">Freddie Thorne</option>
                        </select>
                        <br>
                        <!-- Requirements -->           
                        <label class="form-label" id="internal_event_req" name="internal_event_req">Requirements:</label>
                        <ul style="list-style-type:none">
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Desk</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Chairs</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Tea/Coffee</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Projector</li>
                        </ul>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <?php echo e(csrf_field()); ?>

            <br>
            <button class="btn btn-primary" type="submit" id="internal" name="internal">Save</button>
        </form>
    </div>

    <div class="tab-pane" id="external_content">
        <form id="external_form" method="post" action="/events">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <!-- Date -->
                        <label for="external_event_date" class="form-label">Date:</label>
                        <input type="text" class="form-control date" id="external_event_date" data-toggle="date-picker" data-cancel-class="btn-warning">
                        <br>
                        <!-- Time -->
                        <label for="external_event_time" class="form-label">Event time:</label>
                        <ul style="list-style-type:none">
                            <li>Time From:<input class="form-control" type="time" id="external_event_time_from" name="external_event_time"></li>
                            <li>Time To:<input class="form-control" type="time" id="external_event_time_to" name="external_event_time"></li>
                        </ul>
                        <br>
                        <!-- Site -->
                        <label for="external_event_site" class="form-label">Event Site:</label>
                        <select id="external_event_site" name="external_event_site" class="form-select">
                            <option disabled selected>--Choose Site--</option>
                            <option value="sl">Salina</option>
                            <option value="sr">Simar</option>
                            <option value="gh">Ghadira</option>
                            <option value="fr">Foresta 2000</option>
                            <option value="ot">Other</option>
                        </select>
                        <br>
                        <!-- BLM Event -->
                        <label class="form-check-label">BLM Event:</label>
                        <input type="checkbox" id="external_event_BLM" class="form-check-input"></input>
                        <br>      
                        <!-- Type   -->
                        <label for="external_event_type" class="form-label">Event Type:</label>
                        <select id="external_event_type" name="external_event_type" class="form-select">
                            <option value="" disabled selected>--Choose Type--</option>
                            <option value="sm">Staff Meeting</option>
                            <option value="cm">Council Meeting</option>
                            <option value="sse">Staff Social Event</option>
                        </select>
                        <br>
                        <!-- Number Of Participants -->
                        <label class="form-label" for="external_expected_participants">No of Participants:</label>
                        <input data-toggle="touchspin" id="external_expected_participants" name="external_expected_participants" type="text" value="0">
                        <br>
                        <!-- Type Of Participants -->
                        <label class="form-label" for="external_event_type_participant">Type of Participants:</label>
                        <ul style="list-style-type:none">
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Locals</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Tourists</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Adults</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Children</li>
                        </ul>
                        <br>
                        <!-- BLM Main Depts -->
                        <label for="external_event_main_dept" class="form-label">Main BLM Department responsible for event:</label>
                        <select id="external_event_dept" name="external_event_main_dept" class="form-select">
                            <option value="" disabled selected>--Choose Department--</option>
                            <option value="dp1">Dept 1</option>
                            <option value="dp2">Dept 2</option>
                            <option value="dp3">Dept 3</option>
                        </select>
                        <br>
                        <!-- BLM Secondary Depts -->
                        <label for="external_event_sec_dept" class="form-label">Secondary BLM Department responsible for event:</label>
                        <select id="external_event_dept" name="external_event_sec_dept" class="form-select">
                            <option value="" disabled selected>--Choose Department--</option>
                            <option value="dp1">Dept 1</option>
                            <option value="dp2">Dept 2</option>
                            <option value="dp3">Dept 3</option>
                        </select>
                        <br>
                        <!-- BLM Tertiary Depts -->
                        <label for="external_event_third_dept" class="form-label">Tertiary BLM Department responsible for event:</label>
                        <select id="external_event_dept" name="external_event_third_dept" class="form-select">
                            <option value="" disabled selected>--Choose Department--</option>
                            <option value="dp1">Dept 1</option>
                            <option value="dp2">Dept 2</option>
                            <option value="dp3">Dept 3</option>
                        </select>
                        <br>
                        <!-- Staff person handling event -->
                        <label for="internal_event_staff_member" class="form-label">Staff member handling event:</label>
                        <select id="internal_event_staff_member" name="internal_event_staff_member" class="form-select">
                            <option value="" disabled selected>--Choose Staff Member--</option>
                            <option value="m1">Thomas Shelby</option>
                            <option value="m2">Grace Burgess</option>
                        </select>
                        <br>
                        <!-- Other persons required -->           
                        <label for="internal_event_other_member" class="form-label">Other persons required for the running of the event:</label>
                        <ul style="list-style-type:none">
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Employee</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Employee</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Employee</li>
                            <li class="form-check-label"><input type="checkbox" class="form-check-input">  Employee</li>
                        </ul>
                        <br>
                        <!-- Will a fee be charged -->
                        <label class="form-label">Will a fee be charged:</label>
                        <input type="checkbox" id="external_event_fee" checked data-switch="success"/>
                        <label for="external_event_fee" data-on-label="Yes" data-off-label="No"></label>
                        <br>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
            <!-- Finance stuff -->
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <!-- Greyed out if BLM event -->
                        <label for="external_event_company_name" class="form-label">Company/NGO Name:</label>
                        <input type="text" id="external_event_company_name" class="form-control">

                        <label for="external_event_contact_person" class="form-label">Contact Person:</label>
                        <input type="text" id="external_event_contact_person" class="form-control">

                        <label for="external_event_contact_email" class="form-label">Contact Email:</label>
                        <input type="text" id="external_event_contact_email" class="form-control">

                        <label for="external_event_contact_number" class="form-label">Contact Number:</label>
                        <input type="text" id="external_event_contact_number" class="form-control">

                        <label for="external_event_vat" class="form-label">VAT Number:</label>
                        <input type="text" id="external_event_vat" class="form-control">
                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->


            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="external_event_req" class="form-label">Requirements:</label>
                            <ul style="list-style-type:none">
                                <li class="form-check-label"><input type="checkbox" class="form-check-input">  Desk</li>
                                <li class="form-check-label"><input type="checkbox" class="form-check-input">  Chairs</li>
                                <li class="form-check-label"><input type="checkbox" class="form-check-input">  Tea/Coffee</li>
                                <li class="form-check-label"><input type="checkbox" class="form-check-input">  Projector</li>
                            </ul>
                        <br>
                        <label for="external_event_payment_amount" class="form-label">Payment Amount:</label>
                        <input type="text" id="external_event_payment_amount" class="form-control">                        
                        <br>
                        <label class="form-label">Payment Confirmed:</label>
                        <input type="checkbox" id="external_event_payment" checked data-switch="success"/>
                        <label for="external_event_payment" data-on-label="Yes" data-off-label="No"></label>
                        <br>
                        <label class="form-label" for="external_actual_participants">Actual Number of Participants:</label>
                        <input data-toggle="touchspin" id="external_actual_participants" name="external_actual_participants" type="text" value="0">
                        <br>
                        <label class="form-label" for="external_blm_members">Number of BLM members attending:</label>
                        <input data-toggle="touchspin" id="external_blm_members" name="external_blm_members" type="text" value="0">
                        <br>
                        <label for="external_event_income" class="form-label">Income:</label>
                        <input type="text" id="external_event_income" class="form-control"> 
                        <br>
                        <label class="form-label">Sales:</label>
                        <input type="checkbox" id="external_event_sales" checked data-switch="success"/>
                        <label for="external_event_sales" data-on-label="Yes" data-off-label="No"></label>
                        <br>
                        <label class="form-label">Membership:</label>
                        <input type="checkbox" id="external_event_member" checked data-switch="success"/>
                        <label for="external_event_member" data-on-label="Yes" data-off-label="No"></label>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <?php echo e(csrf_field()); ?>

            <br>
            <button class="btn btn-primary" type="submit" id="external" name="external">Save</button>
        </form>
    </div>
</div>

<!-- <div class="mb-3">
    <div class="action_btn">
        <button class="btn btn-primary" name="submit" type="submit" value="draft" onclick="Save()">Save as Draft</button>
        <button class="btn btn-primary" name="submit" type="submit" value="submit" onclick="Submit()">Submit Event</button>
        <button class="btn btn-primary" name="submit" type="submit" value="confirm" onclick="Confirm()">Confirm Event</button>
        <button class="btn btn-primary" name="submit" type="submit" value="cancel" onclick="Cancel()">Cancel Event</button>
    </div>
</div> -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ishma\Desktop\BirdlifeMITA\EventBookingRepos\eventBookingProgramme\Main-Project\resources\views/events/create.blade.php ENDPATH**/ ?>