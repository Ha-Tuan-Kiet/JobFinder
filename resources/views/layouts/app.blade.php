<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('loginform/css/style.css')}}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body  class="img js-fullheight" style="background-image: url(./loginform/images/bg.jpg);">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>





		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('bootstrap/js/vendor/modernizr-3.5.0.min.j')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('bootstrap/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/popper.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('bootstrap/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('bootstrap/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/slick.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/price_rangs.js')}}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('bootstrap/js/wow.min.js')}}"></script>
		<script src="{{ asset('bootstrap/js/animated.headline.js')}}"></script>
        <script src="{{ asset('bootstrap/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('bootstrap/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{ asset('bootstrap/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('bootstrap/js/contact.js')}}"></script>
        <script src="{{ asset('bootstrap/js/jquery.form.js')}}"></script>
        <script src="{{ asset('bootstrap/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/mail-script.js')}}"></script>
        <script src="{{ asset('bootstrap/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('bootstrap/js/plugins.js')}}"></script>
        <script src="{{ asset('bootstrap/js/main.js')}}"></script>
        



</body>
</html>
