

<?php $__env->startSection('content'); ?>
<h1>Admin</h1>
<div class="row">
    <div class="col-md-4" >
        <div class="card bg-primary">
            <div class="card-body">
                <blockquote class="card-bodyquote">                            
                    <a href="/employees" class="btn btn-primary mt-2 stretched-link">Edit Employee </a>
                </blockquote>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-md-4" >
        <div class="card text-white bg-primary">
            <div class="card-body">
                <blockquote class="card-bodyquote">                            
                    <a href="/locations" class="btn btn-primary mt-2 stretched-link">Edit Location </a>
                </blockquote>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-md-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <blockquote class="card-bodyquote">                            
                    <a href="runreport" class="btn btn-primary mt-2 stretched-link">Run Report</a>
                </blockquote>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-md-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <blockquote class="card-bodyquote">                            
                    <a href="https://www.google.com.mt" class="btn btn-primary mt-2 stretched-link">Edit Event Form</a>
                </blockquote>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->      
</div> <!-- end row -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ishma\Desktop\BirdlifeMITA\EventBookingRepos\eventBookingProgramme\Main-Project\resources\views/admins/index.blade.php ENDPATH**/ ?>