@extends("layouts.home", ["title" => "Consultations"])

@section('content')
    @include('partials.home_partials._hero', ["title" => "Voir Les Données"])

    <nav>
        <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ Route('dossier') }}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('')}}">Données Consultation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('')}}">Données Ordonnance</a>
        </li>
      </ul>
    </nav>
@endsection
