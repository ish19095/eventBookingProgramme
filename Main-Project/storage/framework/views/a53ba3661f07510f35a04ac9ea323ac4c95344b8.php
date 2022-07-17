

<?php $__env->startSection('content'); ?>
<ul class="nav nav-tabs nav-justified nav-bordered mb-3">
    <li class="nav-item">
        <a href="#leave_content" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <i class="mdi d-md-none d-block">Book VL / Report SL</i>
            <span class="d-none d-md-block">Book VL / Report SL</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#attendance_sheet" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="mdi d-md-none d-block">Attendance Sheet</i>
            <span class="d-none d-md-block">Attendance Sheet</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane show active" id="leave_content">
        <form id="leave_form" method="post" action="/attendance">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <!-- Date From -->
                        <label for="leave_date_from" class="form-label">Date From:</label>
                        <input type="text" class="form-control date" id="leave_date_from" data-toggle="date-picker" data-single-date-picker="true">
                        <br>
                        <!-- Date To -->
                        <label for="leave_date_to" class="form-label">Date To:</label>
                        <input type="text" class="form-control date" id="leave_date_to" data-toggle="date-picker" data-single-date-picker="true">
                        <br>
                        <!-- Time From -->
                        <label for="leave_time_from" class="form-label">Time From:</label>
                        <input class="form-control" type="time" id="leave_time_from" name="leave_time_from">
                        <br>
                        <!-- Time To -->
                        <label for="leave_time_to" class="form-label">Time To:</label>
                        <input class="form-control" type="time" id="leave_time_to" name="leave_time_to">
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <?php echo e(csrf_field()); ?>

            <br>
            <button type="submit" name="submit">Save</button>
        </form>
        <!-- <div class="mb-3">
            <div class="action_btn">
                <button class="btn btn-primary" name="save" type="submit" value="save" onclick="Save()">Save</button>
                <button class="btn btn-primary" name="cancel" type="submit" value="cancel" onclick="Cancel()">Cancel</button>
            </div>
        </div> -->
    </div>

    <div class="tab-pane" id="attendance_sheet">
        <form>
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ishma\Desktop\Code\tempProject\resources\views/attendance/create.blade.php ENDPATH**/ ?>