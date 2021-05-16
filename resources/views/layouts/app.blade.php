<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Job Finder</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('loginform/css/style.css')}}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

{{--    New--}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('black') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('black') }}/img/favicon.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('black') }}/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS -->
    <link href="{{ asset('black') }}/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="{{ asset('black') }}/css/theme.css" rel="stylesheet" />


    {{--    New--}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- CSS here -->
        {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{ asset('bootstrap/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/price_rangs.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css')}}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body class="img js-fullheight" style="background-image: url(loginform/images/bg.jpg);background-attachment: fixed;">


    @include('home.header')
{{--    @yield('content')--}}
    <main class="py-4 container" >
        @yield('content')
    </main>
       {{-- <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('bootstrap/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="http://127.0.0.1:8000/findajob">Find a Jobs </a></li>
                                            <li><a href="http://127.0.0.1:8000/about">About</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="http://127.0.0.1:8000/blog">Blog</a></li>
                                                    <li><a href="http://127.0.0.1:8000/blogdetails">Blog Details</a></li>
                                                    <li><a href="http://127.0.0.1:8000/elements">Elements</a></li>
                                                    <li><a href="http://127.0.0.1:8000/jobdetails">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    @guest
                                    @if (Route::has('login'))
                                            <a class="btn head-btn1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif

                                    @if (Route::has('register'))
                                            <a class="btn head-btn1" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->full_name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="http://127.0.0.1:8000/userprofile">
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
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div> --}}
    {{-- <div id="app">
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
                                    {{ Auth::user()->full_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/userprofile">
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
    </div> --}}





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
