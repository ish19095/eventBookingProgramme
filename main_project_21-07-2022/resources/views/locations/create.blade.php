@extends('layouts.app')

@section('content')
<h1>Edit Location</h1>
<ul class="nav nav-tabs nav-bordered mb-3">
    <li class="nav-item">
        <a href="#add_location" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <i class="mdi d-md-none d-block">Add Location</i>
            <span class="d-none d-md-block">Add Location</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#remove_location" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="mdi d-md-none d-block">Remove Location</i>
            <span class="d-none d-md-block">Remove Location</span>
        </a>
    </li>
</ul>

<div class="tab-content p-3 mb-2 bg-secondary-lighten">
    <div class="tab-pane show active" id="add_location">
        <form id="add_location" method="post" action="/locations">
            <div class="row">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="loc_name" class="form-label">Name:</label>
                        <input type="text" id="loc_name" name="loc_name" class="form-control" required>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="loc_code" class="form-label">Code:</label>
                        <input type="text" id="loc_code" name="loc_code" class="form-control" required>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
            </div>

            {{csrf_field()}}
            <br>
            <button class="btn btn-primary" type="submit" id="add" name="add">Add</button>
        </form>
    </div>

    <div class="tab-pane" id="remove_location">
        <form id="remove_location" method="post" action="/locations">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="loc_code" class="form-label">Code:</label>
                        <input type="text" id="loc_code" name="loc_code" class="form-control" placeholder="Site Code..." required>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            {{csrf_field()}}
            <br>
            <button class="btn btn-primary" type="submit" id="remove" name="remove">Remove</button>
        </form>
    </div>
</div>

@endsection