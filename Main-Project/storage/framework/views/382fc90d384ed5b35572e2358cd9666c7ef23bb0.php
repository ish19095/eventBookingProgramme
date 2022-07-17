

<?php $__env->startSection('content'); ?>
<h1>Edit Employee</h1>
<ul class="nav nav-tabs nav-justified nav-bordered mb-3">
    <li class="nav-item">
        <a href="#add_employee" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <i class="mdi d-md-none d-block">Add Employee</i>
            <span class="d-none d-md-block">Add Employee</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#remove_employee" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="mdi d-md-none d-block">Remove Employee</i>
            <span class="d-none d-md-block">Remove Employee</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane show active" id="add_employee">
        <form id="add_employee" method="post" action="/employees">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="emp_name" class="form-label">Name:</label>
                        <input type="text" id="emp_name" name="emp_name" class="form-control">
                        <br>
                        <label for="emp_surname" class="form-label">Surname:</label>
                        <input type="text" id="emp_surname" name="emp_surname" class="form-control">
                        <br>
                        <label for="emp_email" class="form-label">Email:</label>
                        <input type="text" id="emp_email" name="emp_email" class="form-control">
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <?php echo e(csrf_field()); ?>

            <br>
            <button class="btn btn-primary" type="submit" id="add" name="add">Add</button>
        </form>
    </div>

    <div class="tab-pane" id="remove_employee">
        <form id="remove_employee" method="post" action="/employees">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="emp_email" class="form-label">Email:</label>
                        <input type="text" id="emp_email" name="emp_email" class="form-control" placeholder="Employee's Email...">
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <?php echo e(csrf_field()); ?>

            <br>
            <button class="btn btn-primary" type="submit" id="remove" name="remove">Remove</button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ishma\Desktop\BirdlifeMITA\EventBookingRepos\eventBookingProgramme\Main-Project\resources\views/employees/create.blade.php ENDPATH**/ ?>