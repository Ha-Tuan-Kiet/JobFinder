<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
         <title>Job Finder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="{{ asset('bootstrap/site.webmanifest')}}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('bootstrap/img/favicon.ico')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
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
            <link href="https://fonts.googleapis.com/css2?family=K2D:wght@200&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



        {{--            	<!--     Fonts and icons     -->--}}
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
{{--	<!-- CSS Files -->--}}
{{--	<link href="{{ asset('bootstrap/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />--}}
	<!-- CSS Just for demo purpose, don't include it in your project -->
{{--	<link href="{{ asset('bootstrap/css/demo.css')}}" rel="stylesheet" />--}}


   </head>

   <body>

    @include('home.header')
    @yield('content');

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :218 Phan Dinh Phung, Ho Chi Minh, Viet Nam
                                        </p>
                                    </li>
                                    <li><a href="#">Phone : +84 389652154</a></li>
                                    <li><a href="#">Email : JobFinder@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="{{ asset('bootstrap/img/icon/form.png')}}" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                        <a href="index.html"><img src="{{ asset('bootstrap/img/logo/logo2_footer.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="fa fa-heart" aria-hidden="true"></i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('skill');
            CKEDITOR.replace('introduction');
            CKEDITOR.replace('certificate');
            CKEDITOR.replace('hobby');
            CKEDITOR.replace('experience');
            CKEDITOR.replace('education');
            CKEDITOR.replace('activity');
            CKEDITOR.replace('job_education');
            CKEDITOR.replace('job_details')
            CKEDITOR.replace('job_requirement');
            CKEDITOR.replace('job_experience');
            CKEDITOR.replace('candidate_introduction');
            CKEDITOR.replace('content_response');
        </script>
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
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script src="{{ asset('bootstrap/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

        <!--  Plugin for the Wizard -->
        <script src="assets/js/gsdk-bootstrap-wizard.js"></script>

        <!--Add to Favorite Job-->

        @stack('scripts')




    </body>
</html>
