
<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">

    <div class="container">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
                @include('partials.home_partials._dossiernav')
                <div class="appointment-form h-90 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Ordonnance</h1>
                    <form action="/ajouter/patient" method="POST">
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

                          <div class="col-12 col-sm-12">
                            <textarea class="form-control" placeholder="Liste Médicaments" name="liste_medocs" value="{{ old('liste_medocs') }}" style="height: 15vh;"></textarea>
                          </div>

                          <div>
                            <input type="text" placeholder="Instruction Speciale" name="instruction_speciale" class="form-control" value="{{ old('instruction_speciale') }}">
                           </div>

                          <div>
                            <input type="text" placeholder="Duré de traitement" name="dure_traitement" class="form-control" value="{{ old('dure_traitement') }}">
                           </div>

                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Envoie</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
