@extends('layouts.home')
@section('content')

<!doctype html>
<html lang="zxx">

<head>
<meta charset="utf-8">
<meta name="author" content="John Doe">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jobz-index</title>

{{-- <script src="{{asset('adminform/js/4n2NXumNjtg5LPp6VXLlDicTUfA.js')}}"></script><link rel="apple-touch-icon" href="{{asset('adminform/images/apple-touch-icon.html')}}"> --}}
<link rel="stylesheet" href="{{asset('adminform/css/style.css')}}">
<style>
    body {
        background-color:#fafafa;
    }
    .introduction{
        border:1px solid;
        border-radius:0.2rem;
        border-style:none;
        background-color: #bfcbd9;
        width:100%;
        height:500px
    }
    .button-style{
      border-radius: 0.2rem;
    height: 40px;
    line-height: 20px;
    cursor: pointer;
    padding: 0 23px;
    }
</style>
</head>
<body>

<header class="header">

<div class="top_bar background-color-orange">
  <div class="top_bar_container">
  <div class="container">
  <div class="row">
  <div class="col">
  <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
  <ul class="top_bar_contact_list">
  <li>
  <i class="fa fa-phone coll" aria-hidden="true"></i>
  <div class="contact-no">0123 4567 8912</div>
  </li>
  <li>
  <i class="fa fa-envelope coll" aria-hidden="true"></i>
  <div class="email"><a href="https://demo.technosarjan.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3a6bba2aeb3afa683a9aca1b7a6ada7eda0acae">[email&#160;protected]</a></div>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>

<div class="header_container background-color-orange-light">
        @include('admin.adminnav') 
</div>
</header>
<div class="container" style="margin-top:100px;height:1000px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white;">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <h5 class="card-header">{{$candidate->position}}</h5>
                <div class="card-body">
                  <h5 class="card-title">Personal Information</h5>
                  <div class="row">     
                      <div class="col-lg- col-md-6">
                        <p>Name: <span style="font-weight: bold">{{$candidate->full_name}}</span></p>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg- col-md-6">
                    <p>Phone: <span style="font-weight: bold">{{$candidate->phone}} </span>
                    </div>
                    <div class="col-lg- col-md-6">
                     <p>Email: <span style="font-weight: bold">{{$candidate->email}} </span>
                    </div>
                  </div>
                  
                  <h5 class="card-title mt-20">Mail Content</h5>
                  <div class="row">
                      <div class="col-lg-8  ml-10 introduction" style="">
                        {!!$candidate->introduction!!}
                         
                      </div>
                  </div>
                  <div class="row mt-30">
                      <div class="col-lg-6 col-md-6">
                        <button data-path="" 
                            class="btn-primary load-ajax-modal button-style" 
                            role="button" 
                            data-toggle="modal" data-target="#dynamic-modal">
                            <i class="fas fa-save"></i>
                            Response
                         </button>
    
                            <div class="modal fade" id="dynamic-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content" >
                                  <div class="modal-header">
                                    <h5 class="modal-title">Response</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="{{route('/admin/response_job_application')}}" enctype="multipart/form-data">                          
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <input type="hidden" name="id_for_update_status" value="{{$candidate->id}}"/> 
                                      <input type="hidden" name="company_id" value="{{$employer_info->id}}"/>
                                      <input type="hidden" name="user_id" value="{{$candidate->user_id}}"/>
                                      <div class="row mb-10 ml-1">
                                        <div class="col-lg-6 col-md-6">
                                            <label class="mt-20 mb-20">Title:</label>
                                            <input name="title" class="form-control" type="text" placeholder="Subject title" value="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                      
                                        </div>
                                      </div>

                                      <div class="row ml-3">
                                        <div class="col-12-lg col-12-md">
                                          <label class="mt-20 mb-30">Content:</label>
                                          <textarea name="content_response" id="content_response">
                                            <p>Hello, <span style="font-weight: bold">{{$candidate->name}}</span>.</p>
                                            <p>Thanks for taking the time to apply for our position. We appreciate your interest in <span style="font-weight:bold">{{$employer_info->name}}</span> .</p>
                      
                                            <p>
                                            We're currently in the process of taking applications for our <span style="font-weight: bold">{{$candidate->position}}</span> postion.We will begin taking interviews
                                             <span style="font-weight: bold">in the next two weeks</span>.If you are selected to continue to the interview process,
                                           our human resources department will be in contact with you by <span style="font-weight: bold">30/6/2021</span>                        
                                            </p>
                
                                            <p>Thank you,</p>
                                            <p><span style="font-weight:bold">{{$employer_info->contact_name}}</span></p>
                                            <p><span style="font-style: italic">Email contact: {{$employer_info->email}}</span> </p>
                                          </textarea>
                                        </div>
                                        
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn mt-50">Response</button>
                                      </div>  
                                    </form>                                          
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                            <button  onclick="location.href='/admin/job_application'" type="button" class="btn-danger button-style">
                              <i class="fas fa-undo"></i>
                                Back
                            </button>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>


</body>

</html>
@endsection
@push('scripts')
  
@endpush