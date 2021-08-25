
<div class="header-area header-transparrent">
    <div class="headder-top header-sticky">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-3 col-md-2">
                     <!-- Logo -->
                     <div class="logo">
                         <a href="/"><img src="{{asset('bootstrap/img/logo/logo.png')}}" alt=""></a>
                     </div>
                 </div>
                 <div class="col-lg-9 col-md-12">
                     <div class="menu-wrapper">
                         <!-- Main-menu -->
                         <div class="main-menu">
                             <nav class="d-none d-lg-block">
                                 <ul id="navigation">
                                     <li><a href="/">Home</a></li>
                                     <li><a href="http://127.0.0.1:8000/careersjob">Find Jobs </a></li>
                                     <li><a href="http://127.0.0.1:8000/about">About</a></li>
                                     {{-- <li><a href="#">Page</a>
                                         <ul class="submenu">
                                             <li><a href="http://127.0.0.1:8000/blog">Blog</a></li>
                                             <li><a href="http://127.0.0.1:8000/blogdetails">Blog Details</a></li>
                                             <li><a href="http://127.0.0.1:8000/elements">Elements</a></li>
                                             <li><a href="http://127.0.0.1:8000/jobdetails">job Details</a></li>
                                         </ul>
                                     </li> --}}
                                     <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
                                 </ul>
                             </nav>
                         </div>
                         <!-- Login-Button -->
                         <div class=" d-none f-right d-lg-block">
                             {{-- <a href="http://127.0.0.1:8000/register" class="btn head-btn1">Register</a>
                             <a href="http://127.0.0.1:8000/login" class="btn head-btn2">Login</a> --}}
                        @guest
                            

                                @if (Route::has('login'))
                                    <a class="btn head-btn1 " href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endif
                                @if (Route::has('register'))
                                <a class="btn head-btn1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                                @else
                            
                            @if (Auth::user()->role_id ==1)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn head-btn1 nav-link dropdown-toggle" style="border-radius: 5px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin"> Dashboard</a>
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
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="btn head-btn1 nav-link dropdown-toggle" style="border-radius: 5px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/profiles/{{Auth::user()->id}}"> User Profile </a>
                                        <a class="dropdown-item" href="/Cv"> Create your CV </a>
                                        <a class="dropdown-item" href="/Cv/ShowAllCv"> Show All Cv</a>
                                        <a class="dropdown-item" href="/Cv/showMessages"> Messages From Employer</a>
                                        <a class="dropdown-item" href="/CV/job_applied"> Job Applied</a>
                                        <a class="dropdown-item" href="/Cv/showFavorite_job"> Favorite Job</a>
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
                            @endif
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
</div>
