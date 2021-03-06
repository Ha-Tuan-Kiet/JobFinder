@extends('layouts.home')
@section('content')

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('bootstrap/img/logo/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('bootstrap/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Search Results</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                {{-- <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                <div class="ion"> <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="20px" height="12px">
                                <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                    d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                </svg>
                                </div>
                                <h4>Filter Jobs</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                           <div class="small-section-tittle2">
                                 <h4>Job Category</h4>
                           </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="select">
                                    <option value="">All Category</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                    <option value="">Category 4</option>
                                </select>
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Job Type</h4>
                                </div>
                                <label class="container">Full Time
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Part Time
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Remote
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Freelance
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                           <div class="small-section-tittle2">
                                 <h4>Job Location</h4>
                           </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="select">
                                    <option value="">Anywhere</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                    <option value="">Category 4</option>
                                </select>
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Experience</h4>
                                </div>
                                <label class="container">1-2 Years
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">2-3 Years
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">3-6 Years
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">6-more..
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single three -->
                        <div class="single-listing">
                            <!-- select-Categories start -->
                            <div class="select-Categories pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Posted Within</h4>
                                </div>
                                <label class="container">Any
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Today
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 2 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 3 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 5 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Last 10 days
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <div class="single-listing">
                            <!-- Range Slider Start -->
                            <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                <div class="small-section-tittle2">
                                    <h4>Filter Jobs</h4>
                                </div>
                                <div class="widgets_inner">
                                    <div class="range_item">
                                        <!-- <div id="slider-range"></div> -->
                                        <input type="text" class="js-range-slider" value="" />
                                        <div class="d-flex align-items-center">
                                            <div class="price_text">
                                                <p>Price :</p>
                                            </div>
                                            <div class="price_value d-flex justify-content-center">
                                                <input type="text" class="js-input-from" id="amount" readonly />
                                                <span>to</span>
                                                <input type="text" class="js-input-to" id="amount" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                          <!-- Range Slider End -->
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div> --}}
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span>{{$jobsdata->total()}} Jobs found</span>
                                        <!-- Select job items start -->
                                        {{-- <div class="select-job-items">
                                            <span>Sort by</span>
                                            <select name="select">
                                                <option value="">None</option>
                                                <option value="">job list</option>
                                                <option value="">job list</option>
                                                <option value="">job list</option>
                                            </select>
                                        </div> --}}
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            <div id="search_data">
                                @foreach($jobsdata as $job)
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="job_details.html"><img style="width:100px;height:100px;" src="{{ asset('bootstrap/img/icon/'.$job->usercompany->image_logo)}}" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="jobdetails/{{$job->id}}/career/{{$job->career_id}}"><h4>{{$job->position}}</h4></a>

                                            <ul>
                                                <li>{{$job->usercompany->name}}</li>
                                                <li><i class="fas fa-map-marker-alt"></i>{{$job->province->name}}</li>
                                                <li>{{$job->salary_min}} - {{$job->salary_max}} {{$job->salary_unit}} </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a href="job_details.html">{{$job->job_type}}</a>
                                        <span>{{$job->work_time}} hours ago</span>
                                    </div>
                                </div>
                                @endforeach
                                <div style="display:flex;justify-content:center">  {{ $jobsdata->appends(request()->input())->links() }}</div>
                            </div>


                            <!-- single-job-content -->
                            {{-- <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="{{asset('bootstrap/img/icon/job-list2.png')}}" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="{{asset('bootstrap/img/icon/job-list3.png')}}" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="{{asset('bootstrap/img/icon/job-list4.png')}}" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="{{asset('bootstrap/img/icon/job-list1.png')}}" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="{{asset('bootstrap/img/icon/job-list3.png')}}" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="{{asset('bootstrap/img/icon/job-list4.png')}}" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>Digital Marketer</h4>
                                        </a>
                                        <ul>
                                            <li>Creative Agency</li>
                                            <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="job_details.html">Full Time</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div> --}}
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->

</main>

<!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./{{asset('bootstrap/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('bootstrap/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('bootstrap/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Range -->
    <script src="{{asset('bootstrap/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/slick.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/price_rangs.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('bootstrap/js/wow.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/animated.headline.js')}}"></script>
    <script src="{{asset('bootstrap/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{asset('bootstrap/js/jquery.scrollUp.min.js')}}')}}"></script>
    <script src="{{asset('bootstrap/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('bootstrap/js/contact.js')}}"></script>
    <script src="{{asset('bootstrap/js/jquery.form.js')}}"></script>
    <script src="{{asset('bootstrap/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/mail-script.js')}}"></script>
    <script src="{{asset('bootstrap/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('bootstrap/js/plugins.js')}}"></script>
    <script src="{{asset('bootstrap/js/main.js')}}"></script>

</body>
@endsection
@push('scripts')
<script>
    // $(document).ready(function() {
    //    $(document).on('click','.pagination a',function(event){
    //        event.preventDefault();
    //        var page = $(this).attr('href').split('page=')[1];
    //        index(page);
    //    })
    // })
    // function index(page){
    //     $.ajax({
    //         type: "GET",
    //         url:"pagination?page="+page,
    //         success: function(data){
    //             console.log(data);
    //             $('#search_data').html(data)
    //         }
    //     })
    // }
</script>
@endpush
