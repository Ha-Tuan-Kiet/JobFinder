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
  <section class="blog_area section-padding" style="background:#7952b3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 mb-5 mb-lg-0">
                @include('admin.adminnav') 
            </div>
            <div class="col-lg-8">
                <div class="blog_right_sidebar">
                  <div style="margin-top:20px;height:1000px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white;">
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
                                                      <input type="hidden" name="company_id" value="{{$candidate->company_id}}"/>
                                                      <input type="hidden" name="user_id" value="{{$candidate->user_id}}"/>
                                                      <input type="hidden" name="candidate_id" value="{{$candidate->id}}"/>
                                                      <div class="row mb-10 ml-1">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label class="mt-20 mb-20">Title:</label>
                                                            <input name="title" class="form-control" type="text" placeholder="Subject title" value="" required>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                      
                                                        </div>
                                                      </div>
                
                                                      <div class="row ml-3">
                                                        <div class="col-12-lg col-12-md">
                                                          <label class="mt-20 mb-30">Content:</label>
                                                          <textarea name="content_response" id="content_response">
                                                            <p>Hello, <span style="font-weight: bold">{{$candidate->name}}</span>.</p>
                                                            <p>Thanks for taking the time to apply for our position. We appreciate your interest in <span style="font-weight:bold">{{$candidate->company_name}}</span> .</p>
                                      
                                                            <p>
                                                            We're currently in the process of taking applications for our <span style="font-weight: bold">{{$candidate->position}}</span> postion.We will begin taking interviews
                                                             <span style="font-weight: bold">in the next two weeks</span>.If you are selected to continue to the interview process,
                                                           our human resources department will be in contact with you by <span style="font-weight: bold">30/6/2021</span>                        
                                                            </p>
                                
                                                            <p>Thank you,</p>
                                                            <p><span style="font-weight:bold">{{$candidate->contact_name}}</span></p>
                                                            <p><span style="font-style: italic">Email contact: {{$candidate->email_company}}</span> </p>
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
                                            <button  onclick="location.href='/admin/job_application/{{$candidate->job_id}}'" type="button" class="btn-danger button-style">
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
                </div>
            </div>
        </div>
    </div>
</section>



</body>

</html>
@endsection
@push('scripts')
  
@endpush