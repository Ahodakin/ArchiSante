
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">

        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Patient</h1>
                        <form action="{{ route('patient.patient.store') }}" method="post">
                            <div class="row g-3">
                                {{--  <div>
                                    @if(session('status'))
                                        <div class="alert alert-success">
                                            {{(session('status'))}}
                                        </div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>  --}}

                               @csrf
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0 @error('nom') is-invalid @enderror " placeholder="Nom" name="nom" value="{{ old('nom') }}"   style="height: 55px;">
                                    @error('nom')
                                        <div class="col-sm-10">
                                            <p class="text-secondary">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0 @error('prenom') is-invalid @enderror" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}" style="height: 55px;">
                                    @error('prenom')
                                    <div class="col-sm-10">
                                        <p class="text-secondary">{{ $message }}</p>
                                    </div>
                                @enderror
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0 @error('sexe') is-invalid @enderror"  name="sexe" value="{{ old('sexe') }}" style="height: 55px;">
                                        <option selected >Sexe</option>
                                        <option>Femme</option>
                                        <option>Homme</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="date" class="form-control bg-light border-0 @error('date_naiss') is-invalid @enderror" placeholder="Date de Naissance" name="date_naiss" value="{{ old('date_naiss') }}" style="height: 55px;">
                                    @error('date_naiss')
                                        <div class="col-sm-10">
                                            <p class="text-secondary">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-12">
                                    <input type="tel" class="form-control bg-light border-0 @error('tel') is-invalid @enderror" placeholder="Numèros de téléphone"  name="tel" value="{{ old('tel') }}" style="height: 55px;" >
                                    @error('tel')
                                    <div class="col-sm-10">
                                        <p class="text-secondary">{{ $message }}</p>
                                    </div>
                                @enderror
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0 @error('assurance') is-invalid @enderror" placeholder="Assurance médicale" name="assurance" value="{{ old('assurance') }}" style="height: 55px;">
                                    @error('assurance')
                                        <div class="col-sm-10">
                                            <p class="text-secondary">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="tel" class="form-control bg-light border-0 @error('tel_urgence') is-invalid @enderror" placeholder="Numéros en cas d'urgence" name="tel_urgence" value="{{ old('tel_urgence') }}" style="height: 55px;">
                                    @error('tel_urgence')
                                        <div class="col-sm-10">
                                            <p class="text-secondary">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0 @error('sutiation_matrimoniale') is-invalid @enderror"  name="sutiation_matrimoniale" value="{{ old('sutiation_matrimoniale') }}" style="height: 55px;">
                                        <option selected>Situation matrimoniale</option>
                                        <option>célibataire</option>
                                        <option>Marié</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0 @error('commune') is-invalid @enderror" placeholder="Commune" name="commune" value="{{ old('commune') }}" style="height: 55px;">
                                    @error('commune')
                                        <div class="col-sm-10">
                                            <p class="text-secondary">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control bg-light border-0 @error('proffession') is-invalid @enderror" placeholder="Proffession" name="proffession" value="{{ old('proffession') }}" style="height: 55px;">
                                    @error('proffession')
                                        <div class="col-sm-10">
                                            <p class="text-secondary">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>


                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0 @error('groupe_sanguin') is-invalid @enderror" placeholder="Groupe Sanguin" name="groupe_sanguin" value="{{ old('groupe_sanguin') }}" style="height: 55px;">
                                        <option selected>Groupe Sanguin</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0 @error('allergie') is-invalid @enderror" placeholder="Allergies" name="allergie"  style="height: 55px;">
                                        <option selected>Allergies</option>
                                        <option>Viande</option>
                                        <option>Diarrhee</option>
                                        <option>Toxique</option>
                                        <option>Malnutrition</option>
                                        <option>Viande</option>
                                        <option>Lait de vache</option>
                                        <option>Poisson</option>
                                        <option>Escargots</option>
                                        <option>Lananas</option>
                                    </select>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
