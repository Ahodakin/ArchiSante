@extends("layouts.home", ["title" => "Modification Des Informations"])

@section('content')

    @include('partials.home_partials._hero', ["title" => "Modification Des Informations"] )
    @include('partials.home_partials._modifier')

@endsection
