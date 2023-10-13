
@extends("layouts.home", ["title" => "A Propos"])

@section('content')
    @include('partials.home_partials._hero', ["title" => "A propos"])
    @include('partials.home_partials._about')

@endsection