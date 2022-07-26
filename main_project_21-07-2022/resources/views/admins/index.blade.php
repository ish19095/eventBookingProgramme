@extends('layouts.app')

@section('content')
<h1>Admin</h1>
<br>
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
                    <a href="editeventform" class="btn btn-primary mt-2 stretched-link">Edit Event Form</a>
                </blockquote>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->      
</div> <!-- end row -->

@endsection

