@extends("layouts.home", ["title" => "Appointment"])

@section('content')

    @include('partials.home_partials._hero', ["title" => "Appointment"] )
    @include('partials.home_partials._appointment')

    
@endsection