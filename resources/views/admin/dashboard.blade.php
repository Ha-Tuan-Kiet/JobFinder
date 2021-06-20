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

<style>
    .border-icon{
        font-size: 20px;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    margin-top: 1px;
    }
    .label-dashboard{
        font-size: xx-large;
    font-family: 'proxima nova rg';
    }
</style>
{{-- <script src="{{asset('adminform/js/4n2NXumNjtg5LPp6VXLlDicTUfA.js')}}"></script><link rel="apple-touch-icon" href="{{asset('adminform/images/apple-touch-icon.html')}}"> --}}
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
                    <section id="Jobtend">
                        <label class="label-dashboard"> DASH BOARD</label>
                        <div class="row mb-10">
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="fas fa-briefcase ml-50 border-icon" style="background-color: #ffedd2;color:#feaa2f"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Job Posted</h6>
                                                <h6 class="font-extrabold mb-0">{{$jobsdata->count()}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="fas fa-newspaper ml-50 border-icon" style="background-color: #ccf3e9;color:#00c292"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">User Account</h6>
                                                <h6 class="font-extrabold mb-0">{{$user_accounts->count()}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="fas fa-file ml-50 border-icon" style="background-color: #ccf2f4;color:#01c0c8" ></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold " >Job Application</h6>
                                                <h6 class="font-extrabold mb-0">{{$candidates->count()}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="fas fa-sync ml-50 border-icon" style="background-color: beige;color:#afbc58" ></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold" >Job Response</h6>
                                                <h6 class="font-extrabold mb-0">{{$candidate_response->count()}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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