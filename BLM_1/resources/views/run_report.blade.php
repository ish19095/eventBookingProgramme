@extends('layouts.app')

@section('content')

<ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
    <li class="nav-item">
        <a href="#no_of_events" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
            <i class="mdi mdi-home-variant d-md-none d-block"></i>
            <span class="d-none d-md-block">Number of Events</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#visitors_demographics" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
            <i class="mdi mdi-account-circle d-md-none d-block"></i>
            <span class="d-none d-md-block">Visitors Demographics</span>
        </a>
    </li>

</ul>

<div class="tab-content">
    <div class="tab-pane" id="no_of_events">
        <p>Number of events</p>
    </div>
    <div class="tab-pane show active" id="visitors_demographics">
        <p>Visitors Demographics</p>
    </div>

</div>









@endsection






@section('footer')

@endsection

</body>
</html>