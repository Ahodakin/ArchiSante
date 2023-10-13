@extends("layouts.home", ["title" => "Ajout Patient"])

@section('content')

    @include('partials.home_partials._hero', ["title" => "Ajouter Patient"] )
    @include('partials.home_partials._patient')

    
@endsection