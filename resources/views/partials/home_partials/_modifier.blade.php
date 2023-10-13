
<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">

    <div class="container">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Modification </h1>
                    <form action="/update/patient" method="POST">
                            <div class="row g-3">
                                <div>
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
                                </div>

                               @csrf
                               <input type="text" name="id" style="display: none;">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Nom" name="nom" value="{{ $patients->nom }}" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Prénom" name="prenom" value="{{ $patients->prenom }}" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0"  name="sexe" value="{{ $patients->sexe }}" style="height: 55px;">
                                        <option selected >Sexe</option>
                                        <option>Femme</option>
                                        <option>Homme</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="date" class="form-control bg-light border-0" placeholder="Date de Naissance" name="date_naiss" value="{{ $patients->date_naiss }}" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-12">
                                    <input type="tel" class="form-control bg-light border-0" placeholder="Numèros de téléphone"  name="tel" value="{{  $patients->tel }}" style="height: 55px;" pattern="[^!#$%^&*()\[\]\\\\|<>]*" title="Caractères spéciaux interdits: ! # $ % ^ & * ( ) [ ] \ | < >">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Assurance médicale" name="assurance" value="{{ $patients->assurance }}"  style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="tel" class="form-control bg-light border-0" placeholder="Numéros en cas d'urgence" name="tel_urgence" value="{{ $patients->tel_urgence }}" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0"  name="sutiation_matrimoniale" value="{{ $patients->sutiation_matrimoniale }}" style="height: 55px;">
                                        <option selected>Situation matrimoniale</option>
                                        <option>célibataire</option>
                                        <option>Marié</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Commune" name="commune" value="{{ $patients->commune }}" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Proffession" name="proffession" value="{{ $patients->proffession }}" style="height: 55px;">
                                </div>


                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" placeholder="Groupe Sanguin" name="groupe_sanguin" value="{{ $patients->groupe_sanguin }}" style="height: 55px;">
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
                                    <select class="form-select bg-light border-0" placeholder="Allergies" name="allergie" value="$patients->allergie"  style="height: 55px;">
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
