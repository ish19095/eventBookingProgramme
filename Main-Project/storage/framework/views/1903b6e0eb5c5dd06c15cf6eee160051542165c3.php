

<?php $__env->startSection('content'); ?>
<form method="post" action="/schools">
    <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <!-- Date -->
                        <label for="school_event_date" class="form-label">Date:</label>
                        <input type="date" id="school_event_date" name="school_event_date" class="form-control">
                        <br>
                        <!-- Site -->
                        <label for="school_event_site" class="form-label">Event Site:</label>
                        <select id="school_event_site" name="school_event_site" class="form-select">
                            <option value="" disabled selected>--Choose Site--</option>
                            <option value="sl">Salina</option>
                            <option value="sr">Simar</option>
                            <option value="gh">Ghadira</option>
                            <option value="fr">Foresta 2000</option>
                            <option value="ot">Other</option>
                        </select> 
                        <br>
                        <!-- Time -->
                        <label for="external_event_time" class="form-label">Event time:</label>
                        <ul style="list-style-type:none">
                            <li>Time From:<input class="form-control" type="time" id="school_event_time_from" name="external_event_time" value="09:00" disabled></li>
                            <li>Time To:<input class="form-control" type="time" id="school_event_time_to" name="external_event_time" value="12:30" disabled></li>
                        </ul>
                        <br>
                        <!-- Staff member handling school visit -->
                        <label for="school_event_staff_member" class="form-label">Staff member handling school visit:</label>
                        <select id="school_event_staff_member" name="school_event_staff_member" class="form-select">
                            <option value="" disabled selected>--Choose Staff Member--</option>
                            <option value="m1">Thomas Shelby</option>
                            <option value="m2">Grace Burgess</option>
                        </select>
                        <br>
                        <!-- School Name -->
                        <label for="school_event_school_name" class="form-label">School Name:</label>
                        <select id="school_event_school_name" name="school_event_school_name" class="form-select">
                            <option value="" disabled selected>--Choose School Name--</option>
                            <option value="s1">St Martins</option>
                            <option value="s2">De La Salle</option>
                        </select>
                        <br>
                        <!-- School Year -->
                        <label for="school_event_school_year" class="form-label">School Year:</label>
                        <select id="school_event_school_year" name="school_event_school_year" class="form-select">
                            <option value="" disabled selected>--Choose School Year--</option>
                            <option value="y1">Year 1</option>
                            <option value="y2">Year 2</option>
                            <option value="y3">Year 3</option>
                            <option value="y4">Year 4</option>
                        </select>
                        <br>
                        <!-- Number of students -->            
                        <label for="school_event_num_students" class="form-label">Number Of Students:</label>
                        <input data-toggle="touchspin" type="text" id="school_event_num_students" name="school_event_num_students" value="0">
                        <br>
                        <!-- Teacher Name -->
                        <label for="school_event_teacher_name" class="form-label">Teacher Name:</label>
                        <input type="text" id="school_event_teacher_name" name="school_event_teacher_name" class="form-control">
                        <br>
                        <!-- Teacher contact number -->
                        <label for="school_event_teacher_number" class="form-label">Teacher Contact Number:</label>
                        <input type="text" id="school_event_teacher_number" name="school_event_teacher_number" class="form-control">
                        <br>
                        <!-- Teacher Email -->
                        <label for="school_event_teacher_email" class="form-label">Teacher Email:</label>
                        <input type="text" id="school_event_teacher_email" name="school_event_teacher_email" class="form-control">
                        <br>
                        <!-- Donation -->
                        <label class="form-label" for="school_event_donation">Donation:</label>
                        <input data-toggle="touchspin" type="text" data-bts-prefix="€" id="school_event_donation" name="school_event_donation">
                        <br>
                        <!-- Sales -->
                        <label class="form-check-label">Sales:</label>
                        <input type="checkbox" id="school_event_sales" class="form-check-input"></input>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
    
    <?php echo e(csrf_field()); ?>

    <br>
    <button type="submit" name="submit">Save</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ishma\Desktop\Code\form-save-db\resources\views/schools/create.blade.php ENDPATH**/ ?>