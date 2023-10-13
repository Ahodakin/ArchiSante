@extends("layouts.home", ["title" => "Dossier"])

@section('content')

    @include('partials.home_partials._hero', ["title" => "Dossier"] )
    @include('partials.home_partials._dossier')


@endsection
