@extends("layouts.home", ["title" => "Accueil"])

@section('content')

    @include('partials.home_partials._carousel')
    @include('partials.home_partials._banner')
    @include('partials.home_partials._about')
    @include('partials.home_partials._offer')
    @include('partials.home_partials._pricing')
    {{-- @include('partials.home_partials._team') --}}

@endsection
