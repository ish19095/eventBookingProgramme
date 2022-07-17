@extends('layouts.app')

@section('content')


<ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
    <li class="nav-item">
        <a href="#add" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
            <i class="mdi mdi-home-variant d-md-none d-block"></i>
            <span class="d-none d-md-block">Add</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#remove" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
            <i class="mdi mdi-account-circle d-md-none d-block"></i>
            <span class="d-none d-md-block">Remove</span>
        </a>
    </li>
</ul>

    
<div class="tab-content">
    <div class="tab-pane" id="add">     
        
        <div class="tab-content">
            <div class="tab-pane show active" id="input-types-preview">
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Name</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Surname</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>
                        </form>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <form>

                            <div class="form-group mb-3">
                                <label for="simpleinput">ID</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>
                    
                            <div class="form-group mb-3">
                                <label for="example-email">Email</label>
                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                            </div>

                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->                      
            </div> <!-- end preview-->

            
            <div class="card-body">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>

            <div class="card-body">
                <button type="button" onclick="window.location='{{ url("/admin") }}'" class="btn btn-primary" >Return to Admin Page</button>            
            </div>

        </div>    
        
        </div>
            <div class="tab-pane show active" id="remove">      
        

        <select class="custom-select custom-select-lg mb-3">
            <option selected>--Select Employee--</option>
            <option value="1">Emp1</option>
            <option value="2">Emp2</option>
            <option value="3">Emp3</option>
        </select>
          

        <div class="card-body">
            <button type="button" class="btn btn-primary">Remove</button>
        </div>

        <div class="card-body">
            <button type="button" onclick="window.location='{{ url("/admin") }}'" class="btn btn-primary" >Return to Admin Page</button>            
        </div>

    </div>
</div>


@endsection




@section('footer')


@endsection

</body>
</html>