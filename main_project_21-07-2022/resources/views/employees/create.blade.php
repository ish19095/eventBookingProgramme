@extends('layouts.app')

@section('content')
<h1>Edit Employee</h1>
@if(count($errors) > 0)
<br>
<div class="col-lg-6">
    <div class="card widget-flat">
        <div class="card-body alert alert-danger" role="alert">
            <ul style="list-style: none">
                @foreach($errors->all() as $error)
                    <li><strong>Error - </strong>{{$error}}</li>
                @endforeach
            </ul>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div> <!-- end col-->
<br>
@endif     

{{-- target="employee_action_selection_content" --}}

<ul id="employee_action_selection_tabs" class="nav nav-tabs nav-bordered mb-3">
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

<div id="employee_action_selection_content" class="tab-content p-3 mb-2 bg-secondary-lighten">
    <div class="tab-pane show active" id="add_employee">
        <form id="add_employee_form" method="post" action="/employees">
            <div class="row">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="emp_name" class="form-label">Name:</label>
                        <input type="text" id="emp_name" name="emp_name" class="form-control" >
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="emp_surname" class="form-label">Surname:</label>
                        <input type="text" id="emp_surname" name="emp_surname" class="form-control" >
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="emp_email" class="form-label">Email:</label>
                        <input type="text" id="emp_email" name="emp_email" class="form-control" >
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
            </div>

            {{csrf_field()}}
            <br>
            <button class="btn btn-primary" type="submit" id="add" name="add">Add</button>
        </form>         
    </div>
    

    <div class="tab-pane" id="remove_employee">
        <form id="remove_employee_form" method="post" action="/employees">
            <div class="col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body">
                        <label for="emp_email" class="form-label">Email:</label>
                        <input type="text" id="emp_email" name="emp_email" class="form-control" placeholder="Employee's Email..." >
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            {{csrf_field()}}
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

@endsection

@section('script')

<script>

    // $("#tabs").tabs("select", "#sample-tab-1");

    // $("#employee_action_selection").tabs("select", "#add_employee");


    // $("#employee_action_selection").tabs("select", "#remove_employee");

    // $( "#employee_action_selection" ).tabs();


    $(function() {  
            
            
            // $("employee_action_selection a").click(function(e){
                
            //     $("employee_action_selection li").removeClass("tab-pane show active");
            //     $(this).parent("li").addClass("tab-pane show active");

            //     var page = this.hash.substr(1);
            //     $("#content_wrapper").block();
            //     $.get(page+".php", function(html){
            //         $("#content").html(html);
            //         $("#content_wrapper").unblock();
            //     });
            // });

            

            $("#employee_action_selection").tabs();

            console.log( $("a[href="+location.hash"]"));


            // $("a[href="+location.hash"]").click();
    }); 

</script>

@endsection