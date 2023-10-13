@extends("layouts.home", ["title" => "Liste des patients"])

@section('content')

    @include('partials.home_partials._hero', ["title" => "Liste Des Patients"] )
    @include('partials.home_partials._liste_patients')

@endsection
