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
<link rel="stylesheet" href="{{asset('adminform/css/style.css')}}">
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


<section id="Jobtend">
<div class="container">
<div class="vertical-space-85"></div>
<label class="label-dashboard"> DASH BOARD</label>
<div class="row mb-20">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon purple">
                            <i class="fas fa-briefcase ml-100 border-icon" style="background-color: #ffedd2;color:#feaa2f"></i>
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
                            <i class="fas fa-newspaper ml-100 border-icon" style="background-color: #ccf3e9;color:#00c292"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold">News Posted</h6>
                        <h6 class="font-extrabold mb-0">112.000</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-20">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon purple">
                            <i class="fas fa-file ml-100 border-icon" style="background-color: #ccf2f4;color:#01c0c8" ></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold " >Job Application</h6>
                        <h6 class="font-extrabold mb-0">112</h6>
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
                            <i class="fas fa-sync ml-100 border-icon" style="background-color: beige;color:#afbc58" ></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold" >Job Comments</h6>
                        <h6 class="font-extrabold mb-0">115</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vertical-space-10"></div>
</div>
</div>
</section>


</body>

</html>


@endsection