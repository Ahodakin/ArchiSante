@extends("layouts.home", ["title" => "Ordonnace"])

@section('content')
    @include('partials.home_partials._hero', ["title" => "Ordonnace"])
    @include('partials.home_partials._ordonnance')

@endsection
