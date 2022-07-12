@extends('layouts.app')

@section('content')
{{-- 
<ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
    <li class="nav-item">
        <a href="#1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
            <i class="mdi mdi-home-variant d-md-none d-block"></i>
            <span class="d-none d-md-block">Employees</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#2" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
            <i class="mdi mdi-account-circle d-md-none d-block"></i>
            <span class="d-none d-md-block">Sites</span>
        </a>
    </li>

</ul>

<div class="tab-content">
    <div class="tab-pane" id="1">
        <p>remove employee</p>
    </div>
    <div class="tab-pane show active" id="2">
        <p>remove site</p>
    </div>

</div> --}}



<ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
    <li class="nav-item">
        <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
            <i class="mdi mdi-home-variant d-md-none d-block"></i>
            <span class="d-none d-md-block">Employee</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
            <i class="mdi mdi-account-circle d-md-none d-block"></i>
            <span class="d-none d-md-block">Location</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane" id="home1">
        <p>Employee</p>
    </div>
    <div class="tab-pane show active" id="profile1">
        <p>Location</p>
    </div>
</div>


@endsection




@section('footer')


@endsection

</body>
</html>