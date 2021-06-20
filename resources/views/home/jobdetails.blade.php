@extends('layouts.home')
@section('content')
<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
     .input-file{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    opacity: 0;
    padding: 14px 0;
    cursor: pointer;
    z-index: 1;
    }
    .input-file-trigger{
        width: 100%;
        top: 0;
        position:absolute;
        display: block;
    padding: 14px 45px;
    background: #39D2B4;
    color: #fff;
    font-size: 1em;
    transition: all .4s;
    cursor: pointer;
    }
    .input-file-container{
    position: relative;
    width: 100%;
    text-align: center;
    border-radius: 3px;
    }
    .file-return{
    position: absolute;
    top: 50px;
    font-style: italic;
    font-size: .9em;
    font-weight: bold;
    }
   .js .file-return:not(:empty):before { content: "Selected file: "; font-style: normal; font-weight: normal; } /* Useless styles, just for demo styles */  
</style>

   <body>
    <!-- Preloader Start -->
   

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('bootstrap/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('bootstrap/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>UI/UX Designer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-8 col-lg-8">
                        <!-- job single -->
                        
                        <div class="single-job-items mb-20">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="{{ asset('bootstrap/img/icon/'.$jobsdata->image_logo)}}" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>{{$jobsdata->position}}</h4>
                                        
                                    </a>
                                   
                                    <ul>
                                        <li>{{$jobsdata->name}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$jobsdata->location}}</li>
                                        <li>{{$jobsdata->salary_min}} - {{$jobsdata->salary_max}} {{$jobsdata->salary_unit}}</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                @guest
                                <a href="#" style="border-style: none;" onclick="toastr.info('If you want to add it to favourtie job please login first','Info',{closeButton:true,progressBar:true})"><i class="far fa-heart" style="font-size:25px" ></i></a>
                                @elseif (Auth::user()->role_id ==2)
                                <a href="#" style="border-style: none;" onclick="document.getElementById('favorite_job_{{$jobsdata->id}}').submit();">
                                    @if ($user_save_data ==0)                                            
                                    <i class="far fa-heart" style="font-size:25px" ></i>
                                    @else
                                    <i class="fas fa-heart" style="font-size:25px" ></i>    
                                    @endif
                                    
                                </a>
                                <form id="favorite_job_{{$jobsdata->id}}" method="post" action="{{route('/Cv/add_favorite_job/',['id'=>$jobsdata->id])}}" enctype="multipart/form-data" style="display:none">
                                    @csrf
                                
                                </form>
                                @endguest
                                
                                <a href="#">{{$jobsdata->job_type}}</a>
                            </div>
                        </div>
                       
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p>{!!$jobsdata->details!!}</p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>

                                {!!$jobsdata->requirement!!}
                            
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Education + Experience</h4>
                                </div>
                               {!!$jobsdata->education!!}
                               {!!$jobsdata->experience!!}
                           
                            </div>
                        </div>
                       
                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span>12 Aug 2019</span></li>
                              <li>Location : <span>New York</span></li>
                              <li>Vacancy : <span>02</span></li>
                              <li>Job nature : <span>Full time</span></li>
                              <li>Salary :  <span>$7,800 yearly</span></li>
                              <li>Application date : <span>12 Sep 2020</span></li>
                          </ul>
                         <div class="apply-btn2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                Apply Now
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Job Application</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        @guest
                                        @if (Route::has('login'))
                                        <label>Tks for apply, Please Login </label>
                                        @endif
                                        @if (Route::has('register'))
                                        <label>or Register before</label>
                                        @endif                                 
                                        @else
                                        
                                           @if (Auth::user()->role_id ==2)
                                           <label>Bạn đang nộp đơn ứng tuyển vào vị trí: <span style="font-weight: bold">{{$jobsdata->position}}</span> </label><br>
                                           <label>Trong lĩnh vực: <span style="font-weight: bold">{{$jobsdata->career_name}}</span> </label>
                                           <form method="post" action="{{route('/Cv/ApplyJob')}}" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">      
                                            <input type="hidden" name="job_id" value="{{$jobsdata->id}}"  >
                                            <input type="hidden" name="company_id" value="{{$jobsdata->company_id}}">
                                                   
                                           <div class="row">
                                               <div class="col-lg-6 col-md-6">
                                                   <label>Phone:</label>
                                                   <input name="phone" class="form-control" type="phone" value="{{$user_data->user_phone}}" readonly>
                                               </div>
                                               <div class="col-lg-6 col-md-6">
                                                   <label>Email:</label>
                                                   <input name="email" class="form-control" type="email" value="{{$user_data->user_email}}" readonly>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-lg-12 col-md-12 ">
                                                   <label>Introduction:</label>
                                                   <textarea name="candidate_introduction" id="candidate_introduction" placeholder="Tell us something about yourself">
                                                       <p>
                                                           Dear Mr.<strong>{{$jobsdata->contact_name}}</strong><br>
                                                           
                                                           I was excited to see your listing for the position of <strong>{{$jobsdata->position}}</strong> at <strong>{{$jobsdata->name}}</strong>. I believe that my five years' experience in office administration and my passion for your products make me an ideal candidate for this role.
                                                           
                                                           You specify that you’re looking for an administrative assistant with experience scheduling appointments, maintaining records, ordering supplies, and greeting customers. I’m currently employed as an administrative assistant at XYZ company, where I have spent the past five years honing these skills.
                                                           
                                                           I’m adept at using all the usual administrative and collaboration software packages, from Microsoft Office and SharePoint to Google Docs and Drive. I’m a fast learner, and flexible, while always maintaining the good cheer that you’d want from the first person visitors see when they interact with the company.
                                                           
                                                           I have attached my resume and will call within the next week to see if we might arrange a time to speak.
                                                           
                                                           Thank you so much for your time and consideration.<br>
                                                           
                                                           Best,<br>
                                                           <strong>
                                                               {{$user_data->user_name}}<br>
                                                               {{$user_data->user_phone}}<br>
                                                               {{$user_data->user_email}}<br>
                                                           </strong>
                                                        
                                                       </p>
                                                   </textarea>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-12">
                                                   <label>Resume:</label><br>
                                                   @foreach ($cvs as $cv )
                                                   <input type="radio" name="resume" value="{{$cv->id}}" required>{{$cv->position_apply}} <br>
                                                   @endforeach
                                                  
                                                   {{-- <div class="form-group input-file-container">
                                                       <input type="file" name="Resume" id="file" class="input-file">
                                                         <label tabindex="0" for="my-file" class="input-file-trigger ">Please Choose Your Resume ...</label>
                                                         <p class="file-return"></p>
                                                   </div> --}}
                                               </div>                                      
                                           </div>  
                                           <div class="modal-footer">
                                               {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                               <button type="submit" class="btn btn-primary mt-50">Submit Application</button>
                                               </div>        
                                           </form>
                                           @elseif (Auth::user()->role_id==1)
                                               <label>You can do this action because you are Admin.</label>
                                           @endif
                                        @endguest
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>{{$jobsdata->name}}</span>
                              <p>{{$jobsdata->company_detail}}</p>
                            <ul>
                                <li>Contact Name: <span>{{$jobsdata->contact_name}} </span></li>
                                <li>Web : <span> {{$jobsdata->website}}</span></li>
                                <li>Email: <span>{{$jobsdata->email_company}}</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>

	
<!-- JS here -->  
    <script>
        document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
    button.addEventListener( "keydown", function( event ) {  
        if ( event.keyCode == 13 || event.keyCode == 32 ) {  
            fileInput.focus();  
        }  
    });
    button.addEventListener( "click", function( event ) {
    fileInput.focus();
    return false;
    });  
    fileInput.addEventListener( "change", function( event ) {  
        the_return.innerHTML = this.value;  
    });  
    </script>
  
    </body>
@endsection
@push('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js">
</script>
<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('message'),'Warning' }}");
    @endif
    @if(Session::has('success'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('success'),'Success'}}");
    @endif

    @if(Session::has('add'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('add') }}",'Success');
    @endif

    @if(Session::has('remove'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('remove') }}",'Remove success');
    @endif
</script>
 
@endpush