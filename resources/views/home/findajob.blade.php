@extends('layouts.home')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <h2>{{$careerintro->name}}</h2>
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
                <div class="col-xl-3 col-lg-3 col-md-4">
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
                                <div class="search-form">
                                    <button id="filters" name="filters" type="button" class="btn btn-outline-light"  style="height:100%" >Filter</button>
                                    <input type="hidden" name="career_id" id="career_id" value="{{$careerintro->id}}">
                               
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                           {{-- <div class="small-section-tittle2">
                                 <h4>Job Category</h4>
                           </div> --}}
                            <!-- Select job items start -->
                            {{-- <div class="select-job-items2">
                                <select name="select">
                                    <option value="">Job Type</option>
                                    @foreach ($jobtypes as $jobtype)
                                    <option value="{{$jobtype}}">{{$jobtype}}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Job Type</h4>
                                </div>
                                @foreach ($jobtypes as $jobtype)
                                <label class="container">
                                    <input type="hidden" name="_token" value="<?php Session::token() ?>">
                                    <input type="checkbox" class="brand" value="{{$jobtype}}">{{$jobtype}}
                                    <span class="checkmark"></span>
                                </label>
                                @endforeach
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
                                <select name="select" id="selectlocation">
                                    <option value="">Anywhere</option>
                                    @foreach ($joblocation as $location)
                                    <option value="{{$location}}">{{$location}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            {{-- <div class="select-Categories pt-80 pb-50">
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
                            </div> --}}
                            <!-- select-Categories End -->
                        </div>
                        <div class="single-listing pb-50 mt-55">
                            <!-- Range Slider Start -->
                            <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow pt-50  ">
                                <div class="small-section-tittle2">
                                    <h4>Salary Filter</h4>
                                </div>
                                <div class="widgets_inner">
                                    <div class="range_item">
                                        <!-- <div id="slider-range"></div> -->
                                        {{-- <input type="range" class="js-range-slider" value="500" min="500" max="5000" step="500"/> --}}
                                        <div class="d-flex align-items-center">
                                            {{-- <div class="price_text">
                                                <p>Salary :</p>
                                            </div> --}}
                                            <div class="price_value d-flex justify-content-center ">
                                                <select class="salary" >
                                                    <option value="0">0</option>
                                                    @foreach ($job_salary_min as $salary_min )
                                                    <option value="{{$salary_min}}">{{$salary_min}}</option>
                                                    @endforeach     
                                                </select>
                                                <select class="salary" >
                                                    <option value="10000">....</option>
                                                    @foreach ($job_salary_max as $salary_max )
                                                    <option value="{{$salary_max }}">{{$salary_max }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                                {{-- <input type="hidden" id="hidden_maximum_price" value="500"/>
                                                <input type="hidden" id="hidden_maximum_price" value="3500"/>
                                                <p id="price_show"> 5000 - 3500$</p><br> --}}
                                                {{-- <div id="price_range"></div> --}}
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </aside>
                          <!-- Range Slider End -->
                        </div>
                        <!-- single three -->
                        {{-- <div class="single-listing">
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
                        </div> --}}
                   
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
               
                            <!-- single-job-content -->
                            <div id="filter_data">
                                @include('home.jobs')
                            </div>
                           
                            {{-- <!-- single-job-content -->
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
    {{-- <!--Pagination Start  -->
    <div class="pagination-area pb-115 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Pagination End  --> --}}
    
</main>
</body>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
       $(document).on('click','.pagination a',function(event){
           event.preventDefault();
           var page = $(this).attr('href').split('page=')[1];

           var location =$('#selectlocation option:selected').val();
            console.log(location);
            var brand = get_filter('brand');
            var salary= get_salary();
            var career_id=$('#career_id').val();
            console.log(career_id);
           index(page,brand,location,salary,career_id);
       })
       
    })
    function index(page,brand='',location='',salary='',careerid=''){
       
        $.ajax({
            type: "GET",
            url:"pagination/fetch_data_detail?page="+page+"&brand="+brand+"&location="+location+"&salary="+salary+"&careerid="+careerid,
            success: function(data){
                console.log(data);
                $('#filter_data').html(data)
            }
        })
    }
   //FILTER 
    $(document).ready(function() {
       $('#filters').click(function() {
            // var minimum_price =$('#hidden_minimum_price option:selected').val();
            // var maximum_price =$('#hidden_maximum_price option:selected').val();
            var location =$('#selectlocation option:selected').val();
            console.log(location);
        
            var brand = get_filter('brand');
            var salary= get_salary();
            var career_id=$('#career_id').val();
            console.log(career_id);
            fetch_data(brand,location,salary,career_id);
       })
    }) 
    function get_filter(class_name){
            var filters=[];
            $('.'+class_name+':checked').each(function(){
                filters.push($(this).val());
            });
            console.log(filters);
            return filters;
        }
    function get_salary(){
        var salary=[];
        $.each($(".salary option:selected"), function(){            
            salary.push($(this).val());
        });
        console.log(salary);
        return salary;
    }
    function fetch_data(brand='',location='',salary='',careerid=''){
                $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"pagination/fetch_data_detail?brand="+brand+"&location="+location+"&salary="+salary+"&careerid="+careerid,
            type:"POST",
            data:{brand:brand,location:location,salary:salary,careerid:careerid,_token: '{!! csrf_token() !!}'},
            dataType: "html",
            contentType: false,
            processData: false,
            success:function(data){
                //  console.log(data);
                 $('#filter_data').html(data)
            },error:function(){ 
            alert("error!!!!");
        }
        })
    }
//    $('#price_range').slider({
//        range:true,
//        min:500,
//        max:3500,
//        values:[500,3500],
//        step:500,
//        stop:function(event,ui){
//            $('#price_show').html(ui.values[0]+' - '+ ui.values[1])
//            $('#hidden_minimum_price').val(ui.values[0]);
//            $('#hidden_maximum_price').val(ui.values[1]);
//        }
//    })
</script>
@endpush
