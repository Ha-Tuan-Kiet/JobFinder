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
<div class="row">
<div class="col-lg-9 col-md-6  align-self-center">
<h3 class="title">Jobtend - Best Place to Find Jobs & Employee</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla magna duis nostra sodales luctus nulla
</p>
<div class="vertical-space-30"></div>
<h4>Why we are best</h4>
<div class="vertical-space-30"></div>
<ul>
<li class="list-item1 ">Et vestibulum ullamcorper curae tellus consectetur erat pharetra et cubilia
<br /> Nibh est auctor lacus nam lacinia aptent
</li>
<li class="list-item1 ">Vitae sociosqu a nisi cubilia vulputate aliquam vulputate imperdiet tempor arcu fames</li>
<li class="list-item1 ">Odio habitasse senectus morbi dapibus mauris non primis, nisl ante hendrerit consectetur nulla phasellus eleifend, ad at scelerisque vulputate habitant tempor</li>
</ul>
<div class="vertical-space-30"></div>
<a href="#" class="Explore-Employee">Explore Employee</a>
<a href="#" class="Explore-New-Jobs">Explore New Jobs</a>
</div>
<div class="col-lg-3 col-md-6">
<img src="{{asset('adminform/imags/man.png')}}" alt="" class="man-img">
</div>
<div class="vertical-space-60"></div>
</div>
</div>
</section>


</body>

</html>


@endsection