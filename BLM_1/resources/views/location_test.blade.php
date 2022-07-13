@extends('layouts.app')

@section('content')

    @foreach ($locations as $location)
    <div>
        {{$location->name}} - {{ $location->address_no }} - {{ $location->street }} - {{ $location->locality }}
    </div>
        
    @endforeach


@endsection




@section('footer')


@endsection

</body>
</html>