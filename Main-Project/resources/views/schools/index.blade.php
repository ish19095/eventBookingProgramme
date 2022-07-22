@extends('layouts.app')

@section('content')
<h1>School Bookings: </h1>
<ul>
    @foreach($forms as $form)
        <li><a href="{{route('schools.edit', $form->schfrm_id)}}">{{$form->schfrm_code}}</a></li>
    @endforeach
</ul>

<button class="btn btn-dark" type="button"><a href="{{route('schools.create')}}" style="color:white">School From</a></button>
@endsection