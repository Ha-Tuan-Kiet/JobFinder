@extends('layouts.home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
                    </div>
                    <button  onclick="location.href='/CV/job_applied'" type="button" class="btn-danger button-style">
                        <i class="fas fa-undo"></i>
                          Back
                      </button>
                </div>
              
            </div>
        </div>
    </div>
</body>
</html>
@endsection