@extends("layouts.home", ["title" => "Search"])

@section('content')

    @include('partials.home_partials._hero', ["title" => "Search"] )

    @if ($users->count() > 0)
                        <h2>Résultats de la recherche :</h2>
                        <ul>
                            @foreach ($users as $user)
                                <li>{{ $user->nom }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>Aucun utilisateur trouvé pour cette recherche.</p>
    @endif
    
@endsection