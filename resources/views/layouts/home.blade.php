<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    {{--  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front_end/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front_end/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front_end/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
        @include('partials.home_partials._spinner')
    <!-- Spinner End -->


    <!-- Navbar Start -->
        @include('partials.home_partials._navbar')
    <!-- Navbar End -->



        @yield("content")




    <!-- Footer Start -->
        @include('partials.home_partials._footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
    <script src="{{asset('front_end/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('front_end/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front_end/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front_end/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_end/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('front_end/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('front_end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('front_end/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('front_end/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('front_end/js/main.js')}}"></script>
</body>

</html>
