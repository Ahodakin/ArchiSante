@extends("layouts.home", ["title" => "Consultations"])

@section('content')
    @include('partials.home_partials._hero', ["title" => "Consultations"])
    @include('partials.home_partials._consultation')

@endsection
