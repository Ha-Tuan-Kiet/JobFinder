@extends('layouts.home')
@section('content')
<!doctype html>
<html lang="zxx">

<head>
<meta charset="utf-8">
<meta name="author" content="">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jobz-post-job</title>
<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
 label{
    font-weight: bold;
 }
</style>
</head>
<body class="background-color-white">
            <section class="blog_area section-padding" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 mb-5 mb-lg-0">
                            @include('admin.adminnav') 
                        </div>
                        <div class="col-lg-8" style="padding: 20px;
                        border: 1px solid;
                        background: white;
                        border-radius: 0.5rem;">
                            <div class="blog_right_sidebar">
                                <section id="post_job"> 
                                        <div class="job-post-box">
                                                <form method="post" action="{{route('postjob')}}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="exampleInputJobtitle">Job Position</label>
                                                            <input type="text" name="position" class="form-control" placeholder="Enter your job position" required />
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="exampleInputJobtitle">Address</label>
                                                        <input type="text" name="address" class="form-control" placeholder="Address" required />
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputCompany">Application Email</label>
                                                                <input type="email" name="application_email" class="form-control" id="exampleInputCompany" placeholder="Email" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group ">
                                                                <label for="sel1">Country</label>
                                                                <select  class="form-control" name="province">
                                                                @foreach ($province as $location )
                                                                <option value="{{$location->id}}">{{$location->name}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>                  
                                                     </div>
                                                        
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label for="sel1">Company:</label>
                                                            <select class="form-control" name="company">
                                                                @foreach ($companies as $company )
                                                                <option value="{{$company->id}}">{{$company->name}}</option>
                                                                @endforeach      
                                                            </select>
                                                        </div>                  
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label for="sel1">Career:</label>
                                                            <select class="form-control" name="career">
                                                                @foreach ($careers as $career )
                                                                <option value="{{$career->id}}">{{$career->name}}</option>
                                                                @endforeach                   
                                                            </select>
                                                        </div>                  
                                        </div>
                                                </div>
                                                <div class="row">
                                                        {{-- <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group ">
                                                                        <label>Company Logo</label>
                                                                        <div class="box text-center">
                                                                            <label for="img">Select image:</label>
                                                                            <input type="file" id="img" name="image" accept="image/*">
                                                                        </div>
                                                                    </div>
                                                        </div> --}}
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputLoction">Details</label>
                                                                <textarea id="job_details"  name="details" class="form-control small" placeholder="Write short description" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                </div>
                                    
                                                <div class="form-group">
                                                    <label for="exampleInputShortDescription">Amount</label>
                                                    <input type="number" name="amount" class="form-control small" placeholder="Amount" required />
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputLongDescription">Experiences</label>
                                                    <textarea id="job_experience"  name="experience" class="form-control small" placeholder="Write short description" rows="3" required></textarea>
                                                </div>
                                                <div class="row">
                                                        <div class="col-lg-5 col-md-5">
                                                                        <div class="form-group">
                                                                            <label for="sel1">Job Type</label>
                                                                            <select class="form-control" name="jobtype_list">
                                                                            <option value="FullTime">FullTime</option>
                                                                            <option value="PartTime">PartTime</option>
                                                                            <option value="Remote">Remote</option>
                                                                            <option value="FreeLancer">FreeLancer</option>
                                                                            </select>
                                                                        </div>                  
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <label for="sel1">Time to work</label>
                                                            <input class="form-control" name="work_time" type="number" value="" placeholder="Time to Work" id="example-number-input">
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <label for="sel1">Deadline For Submission</label>
                                                            <input class="form-control" name="due_to_apply" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                         </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                        <label for="sel1">Salary Min:</label>
                                                        <select class="form-control" name="salary_min">
                                                        <option value="0">0</option>
                                                        <option value="500">500</option>
                                                        <option value="1000">1000</option>
                                                        <option value="2500">2500</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group">
                                                        <label for="sel1">Salary Max:</label>
                                                        <select class="form-control" name="salary_max">
                                                        <option value="1000">1000</option>
                                                        <option value="3000">3000</option>
                                                        <option value="3500">3500</option>
                                                        <option value="4000">4000</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group">
                                                        <label for="sel1">Salary Unit:</label>
                                                        <select class="form-control" name="salary_unit">
                                                        <option value="VND">VND</option>
                                                        <option value="$">$</option>
                                                        <option value="??">??</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputLoction">Requirement</label>
                                                            <textarea id="job_requirement" name="requirements" class="form-control small" placeholder="" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputLoction">Education</label>
                                                            <textarea id="job_education" name="education" class="form-control small" placeholder="" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                        <button type="submit" class="btn Post-Job-Offer">Post Job Offer</button>
                                                </form>
                                                
                                                </div>
                                        
                                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</body>

</html>
@endsection
@push('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js">
</script>
<script>
       @if(Session::has('success'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('success'),'Success'}}");
    @endif

</script> 
@endpush