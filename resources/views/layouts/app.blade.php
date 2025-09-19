
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="site-url" content="{{ url('/') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnit - Education & Online Courses Html Template</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

	
	@include('layouts.header')

	<main>

		@yield('content')

	</main>

    
    @include('layouts.footer')


    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Mean menu Js -->
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counterup min Js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow min Js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice select min Js -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <!-- Parallax Js -->
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <!-- Script Js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @yield('script')
    
</body>


</html>