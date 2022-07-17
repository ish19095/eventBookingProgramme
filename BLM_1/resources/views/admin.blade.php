@extends('layouts.app')



@section('content')
           
    
        <div class="row">

            
            <div class="col-md-4" >
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">                            
                            <a href="employee" class="btn btn-primary mt-2 stretched-link">Edit Employee </a>
                        </blockquote>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-md-4" >
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <blockquote class="card-bodyquote">                            
                            <a href="location" class="btn btn-primary mt-2 stretched-link">Edit Location </a>
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


        </div>
       

@endsection
       


@section('footer')


@endsection

    </body>
</html>