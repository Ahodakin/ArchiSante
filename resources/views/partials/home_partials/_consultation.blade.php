
<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">

    <div class="container">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
                @include('partials.home_partials._dossiernav')
                <div class="appointment-form h-90 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Consultation</h1>
                    <form action="{{ route('consultation.consultation.store') }}" method="POST">
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

                            <div>
                                <input type="text" class="form-control bg-light border-0" placeholder="Motif de Consultation" name="motif_consult" value="{{ old('motif_consult') }}" style="height: 50px;">
                            </div>

                            <div>
                                <textarea class="form-control" placeholder="Raison consultation" name="raison_consult" value="{{ old('raison_consult') }}" style="height: 15vh;"></textarea>
                            </div>

                            <div>
                                <textarea class="form-control" placeholder="diagnostic" name="diagnostic" value="{{ old('diagnostic') }}" style="height: 15vh;"></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Consulté</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
