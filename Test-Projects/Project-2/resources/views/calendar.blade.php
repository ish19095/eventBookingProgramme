@extends('layouts.app')

@section('content')
    <h1>Calendar Page</h1>
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="/event" data-toggle="modal" data-target="#" class="btn btn-lg font-16 btn-primary btn-block  ">
                                    <i class="mdi mdi-plus-circle-outline"></i> Create New Event
                                </a>
                                <div id="external-events" class="m-t-20">
                                    
                                </div>
                            </div> <!-- end col-->

                            <div class="col-lg-9">
                                <div id="calendar"></div>
                            </div> <!-- end col -->

                        </div>  <!-- end row -->
                    </div> <!-- end card body-->
                </div> <!-- end card -->

                <!-- Add New Event MODAL -->
                <div class="modal fade" id="event-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header pr-4 pl-4 border-bottom-0 d-block">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Add New Event</h4>
                            </div>
                            <div class="modal-body pt-3 pr-4 pl-4">
                            </div>
                            <div class="text-right pb-4 pr-4">
                                <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event  ">Create event</button>
                                <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">Delete</button>
                            </div>
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>
                <!-- end modal-->
            </div>
            <!-- end col-12 -->
        </div> <!-- end row -->
    </div>
    <!-- container -->

@endsection