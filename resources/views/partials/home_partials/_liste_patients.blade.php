<!-- home.testimonial.blade.php -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-12">
            <div class="row justify-content-center">
                 <div class="col-lg-12">
                   <div class="testimonial p-5 ">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">
                            <form action="/filtre" method="GET">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label> Start Date </label>
                                            <input type="date" name="start_date"  class="form-control" placeholder=" Début Date">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="date" name="end_date"  class="form-control" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mt-4">Filtre</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> <br>

                        <div class="testimonial-item text-center text-white">
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prénom</th>
                                            <th scope="col">Sexe</th>
                                            <th scope="col">Date de naissance</th>
                                            <th scope="col">téléphone</th>
                                            <th scope="col">Numéros CNI</th>
                                            <th scope="col">Téléphone Urgence</th>
                                            <th scope="col">Situation Matrimoniale</th>
                                            <th scope="col">Commune</th>
                                            <th scope="col">Proffession</th>
                                            <th scope="col">Groupe Sanguin</th>
                                            <th scope="col">Allergies</th>
                                            <th scope="col">Editer</th>
                                            <th scope="col">Modifier</th>
                                            <th scope="col">Supprimer</th>
                                            <th scope="col">Ajouter</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">

                                        @foreach ($patients as $patient)
                                            <tr class="table-primary">
                                                <td scope="col">{{ $patient->id }}</td>
                                                <td scope="col">{{ $patient->nom }}</td>
                                                <td scope="col">{{ $patient->prenom }}</td>
                                                <td scope="col">{{ $patient->sexe }}</td>
                                                <td scope="col">{{ $patient->date_naiss }}</td>
                                                <td scope="col">{{ $patient->tel }}</td>
                                                <td scope="col">{{ $patient->assurance }}</td>
                                                <td scope="col">{{ $patient->tel_urgence }}</td>
                                                <td scope="col">{{ $patient->sutiation_matrimoniale }}</td>
                                                <td scope="col">{{ $patient->commune }}</td>
                                                <td scope="col">{{ $patient->proffession }}</td>
                                                <td scope="col">{{ $patient->groupe_sanguin }}</td>
                                                <td scope="col">{{ $patient->allergie }}</td>
                                                <td scope="col"><a href="/edit/{{ $patient->id }}" class="btn btn-primary py-2 px-4 ms-3"><i class="fas fa-edit"></i></a></td>
                                                <td scope="col"><a href="/modifier_patient/{{ $patient->id }}" class="btn btn-primary py-2 px-4 ms-3"><i class="fas fa-pencil-alt"></i></a></td>
                                                <td scope="col"><a href="/delete_patient/{{ $patient->id }}" class="btn btn-danger py-2 px-4 ms-3"><i class="fas fa-trash"></i></a></td>
                                                <td scope="col"><a href="{{Route('patient')}}" class="btn btn-success py-2 px-4 ms-3"><i class="fas fa-plus"></i></a></td>

                                                {{-- <td scope="col"><a href="{{Route('contact')}}"><i class="fas fa-plus"></i></a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
            {{$patients->links()}}
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-input').on('input', function() {
            var query = $(this).val();

            $.ajax({
                url: '/search', // Remplacez par l'URL de votre route de recherche
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    var resultsHtml = '';

                    // Parcourez les résultats et construisez le HTML des résultats
                    $.each(data, function(index, result) {
                        resultsHtml += '<p>' + result.name + '</p>'; // Exemple : affichez le nom du résultat
                    });

                    // Affichez les résultats dans la div #search-results
                    $('#search-results').html(resultsHtml);
                }
            });
        });
    });
</script>


