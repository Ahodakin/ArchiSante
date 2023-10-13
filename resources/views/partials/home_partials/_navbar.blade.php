    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fas fa-folder me-2"></i>ArchiSanté+</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            @auth

                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active">Accueil</a>
                    <a href="{{Route('about')}}" class="nav-item nav-link">A Propos</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dossier</i></a>
                        <div class="dropdown-menu m-0">
                            <a href="{{Route('patient.patient.create')}}" class="dropdown-item">Patients</a>
                            <a href="{{Route('ordonnance')}}" class="dropdown-item">Liste des patients</a>
                            <a href="{{Route('ordonnance')}}" class="dropdown-item">Dossier</a>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav align-items-center">
                    <!-- Afficher du contenu pour les utilisateurs authentifiés -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">  {{ Auth::user()->nom }}   </span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="{{Route('logout')}}" class="btn btn-primary py-2 px-4 ms-3">Logout</a>
                        </div>
                    </li>
                </ul>

                @else
                <div class="auth">
                    <a href="{{ Route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                    <a href="{{ Route('signup') }}" class="btn btn-primary py-2 px-4 ms-3">Signup</a>
                </div>

            @endauth
            <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->
            {{-- <a href="{{Route('logout')}}" class="btn btn-primary py-2 px-4 ms-3">Logout</a> --}}

        </div>
    </nav>
    <!-- Navbar End -->
