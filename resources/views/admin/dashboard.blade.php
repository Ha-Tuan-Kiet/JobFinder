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

<script src="{{asset('adminform/js/4n2NXumNjtg5LPp6VXLlDicTUfA.js')}}"></script><link rel="apple-touch-icon" href="{{asset('adminform/images/apple-touch-icon.html')}}">
<link rel="shortcut icon" type="image/ico" href="{{asset('adminform/images/favicon.html')}}" />

<link rel="stylesheet" href="{{asset('adminform/css/bootstrap.min.css')}}">

<link href="{{asset('adminform/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('adminform/css/matrialize.css')}}" rel="stylesheet">

<link href="{{asset('adminform/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('adminform/css/style.css')}}">
</head>
<body>

{{-- <header class="header">

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
<div class=" ml-auto ">
<div class="search_button search"><i class="large material-icons search-icone">search</i></div>
<div class="hamburger menu_mm  search_button transparent search display"><i class="large material-icons font-color-white  search-icone  menu_mm ">menu</i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="header_container background-color-orange-light">
<div class="container">
<div class="row">
<div class="col">
<div class="header_content d-flex flex-row align-items-center justify-content-start">
<div class="logo_container">
<a href="index.html">
<img src="{{asset('adminform/imags/logo.png')}}" class="logo-text" alt="">
</a>
</div>
<nav class="main_nav_contaner ml-auto">
<ul class="main_nav">
<li class="dropdown active ">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Home
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="index.html">Home variation 1</a></li>
<li><a href="index2.html">Home variation 2</a></li>
</ul>
 </li>
<li class="dropdown ">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Job
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="job_category.html">Job List</a></li>
<li><a href="job_detail.html">Job Detail</a></li>
</ul>
</li>
<li><a href="blog_page.html"> Blog</a></li>
<li><a href="about_us.html">About</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
<div class=" Post-Jobs">
<a href="post_job.html" class="">
Post Jobs
</a>
</div>
<div class="hamburger menu_mm menu-vertical">
<i class="large material-icons font-color-white menu_mm menu-vertical">menu</i>
</div>
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
<div class="menu_close_container">
<div class="menu_close">
<div></div>
<div></div>
</div>
</div>
<div class="search">
<form action="#" class="header_search_form menu_mm">
<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
<i class="fa fa-search menu_mm" aria-hidden="true"></i>
</button>
</form>
</div>
<nav class="menu_nav">
<ul class="menu_mm">
<li class="dropdown menu_mm">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Home
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="index.html">Home 1</a></li>
<li><a href="index2.html">Home 2</a></li>
</ul>
</li>
<li class="dropdown menu_mm">
<a class="dropdown-toggle menu_mm" data-toggle="dropdown" href="#">Job
<span class="caret"></span></a>
<ul class="dropdown-menu menu_mm">
<li class="menu_mm"><a href="job_category.html">Job List</a></li>
<li class="menu_mm"><a href="job_detail.html">Job Detail</a></li>
</ul>
</li>
<li class="menu_mm"><a href="blog_page.html">Blog</a></li>
<li class="menu_mm"><a href="about_us.html">About</a></li>
<li class="menu_mm"><a href="contact.html">Contact</a></li>
</ul>
</nav>
</div>
</header>


<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="{{asset('adminform/imags/slider/slider1.jpg')}}" alt=""></div>
<div class="carousel-container">
<div class="carousel-content">
 <h2 class="font-color-white">Find Jobs Now more Easy Way</h2>
<p class="font-color-white">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla, magna duis nostra sodales luctus nulla praesent fermentum a elit mollis purus aenean curabitur eleifend </p>
<a href="#" data-toggle="modal" data-target="#myModal"><i class=" material-icons play">play_arrow</i></a>
</div>
</div>
</div>
</section>


<div id="search-box">
<div class="container search-box">
<form action="#" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
<div class="d-flex flex-row align-items-center justify-content-start inline-block">
<span class="large material-icons search">search</span>
<input class="search-box_search_input" placeholder="Search Keyword" required="required" type="search">
<select class="dropdown_item_select search-box_search_input">
<option>Category</option>
<option>Category1</option>
<option>Category2</option>
</select>
<span class="large material-icons search">place</span>
<input class="search-box_search_input " placeholder="Location" required="required" type="search">
</div>
<button type="submit" class="search-box_search_button">Search Jobs</button>
</form>
</div>
</div>


<section id="Job-Category">
<div class="container">
<h3 class="text-center">Choose Job Category</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"> </div>
<div class="row">
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-1.png')}}" alt="">
</div>
<h6>Education & Training</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>36 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-2.png')}}" alt="">
</div>
<h6>Sales and Marketing</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>72 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-3.png')}}" alt="">
</div>
<h6>Computer Programing</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>42 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-4.png')}}" alt="">
</div>
<h6>Customer Support</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>18 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-5.png')}}" alt="">
</div>
<h6>Design & Multimedia</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>48 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-6.png')}}" alt="">
</div>
<h6>Web Development</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>94 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50 margin-left-18">
<div class="box background-color-white-light">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-7.png')}}" alt="">
</div>
<h6>Medical/Pharma</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>64 Job Posts</span></a>
</div>
</div>
<div class="col-lg-3 col-md-6 max-width-50">
<div class="box background-color-white-light ">
<div class="circle">
<img src="{{asset('adminform/imags/icone/service-icone-8.png')}}" alt="">
</div>
<h6>Engineer/Architects</h6>
<a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>52 Job Posts</span></a>
</div>
</div>
</div>
<div class="vertical-space-40"></div>
<a href="#" class="Brows-All-Category">Brows All Category</a>
</div>
<div class="vertical-space-85"></div>
</section>


<section id="resent-job-post" class="background-color-white">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Recent Job Post</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"></div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="{{asset('adminform/imags/job-post-icone-1.png')}}" alt="John Doe" class="mr-3 ">
<div class="media-body text-left  text-align-center">
<h6>Jopitar looking for a senior UX Designer</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="{{asset('adminform/imags/job-post-icone-2.png')}}" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>Rokital needs Marketing Experts</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Rokitar ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="{{asset('adminform/imags/job-post-icone-3.png')}}" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>Mshape looking for a senior UX Designer</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Full Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="{{asset('adminform/imags/job-post-icone-4.png')}}" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>Marketing Directer needed</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Scalegoss ltd.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Part Time</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="detail">
<div class="media display-inline text-align-center">
<img src="{{asset('adminform/imags/job-post-icone-5.png')}}" alt="John Doe" class="mr-3 ">
<div class="media-body text-left text-align-center">
<h6>We need a senior Brand Designer</h6>
<i class="large material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class="large material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<div class="float-right margin-top text-align-center">
<a href="#" class="part-full-time">Freelance</a>
<p class="date-time">Deadline: May 23, 2018</p>
</div>
</div>
</div>
</div>
<div class="vertical-space-20"></div>
<div class="job-list">
<a href="#" class="Open-Jobs-Page margin-auto">Open Jobs Page<i class="large material-icons float-right">trending_flat</i></a>
<ul class="pagination justify-content-end margin-auto">
<li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
<li class="page-item">
<a class="page-link pdding-none" href="javascript:void(0);"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
</ul>
</div>
</div>
<div class="vertical-space-60"></div>
</section>


<section id="Featuread-Company">
<div class="vertical-space-85"></div>
<div class="container text-center">
<h3 class="text-center">Featuread Company</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="owl-carousel Featuread-Company-carousel">
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center  media1">
<img src="{{asset('adminform/imags/job-post-icone-3.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center ">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="{{asset('adminform/imags/job-post-icone-4.png')}}" alt="John Doe" class="margin-auto Featuread-Company-img">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
 <br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center   media1">
<img src="{{asset('adminform/imags/job-post-icone-1.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Jopitar Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media   text-align-center media1">
<img src="{{asset('adminform/imags/job-post-icone-5.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Supwin Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media text-align-center   media1">
<img src="{{asset('adminform/imags/job-post-icone-3.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
 <img src="{{asset('adminform/imags/job-post-icone-4.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="{{asset('adminform/imags/job-post-icone-3.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="{{asset('adminform/imags/job-post-icone-4.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Scalegoss Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Scalegoss inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="{{asset('adminform/imags/job-post-icone-1.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Jopitar Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Jopitar inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
 <br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="{{asset('adminform/imags/job-post-icone-5.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Supwin Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Supwin inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
<a href="#" class="Featuread-Company-item">
<div class="media  text-align-center  media1">
<img src="{{asset('adminform/imags/job-post-icone-3.png')}}" alt="John Doe" class=" Featuread-Company-img margin-auto">
<div class="media-body text-left text-align-center">
<h6>Mshape Themes Limited.</h6>
<i class="material-icons">account_balance</i>
<span class="text">Mshape inc.</span>
<br />
<i class=" material-icons">place</i>
<span class="text font-size">11907 Doyle Cape Cydneyview</span>
<br />
<i class=" material-icons">person</i>
<span class="text font-size font-color-orange">3 Open Position</span>
</div>
</div>
</a>
</div>
</div>
</div>
<div class="vertical-space-85"></div>
</div>
</section> --}}


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
<a href="http://127.0.0.1:8000/postjob" class="Explore-New-Jobs">Explore New Jobs</a>
</div>
<div class="col-lg-3 col-md-6">
<img src="{{asset('adminform/imags/man.png')}}" alt="" class="man-img">
</div>
<div class="vertical-space-60"></div>
</div>
</div>
</section>


<section id="Clients-Testimonial">
<div class="vertical-space-85"></div>
<div class="container">
<h3 class="text-center">Recent Job Post</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>
<div class="vertical-space-60"></div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="owl-carousel Clients-Testimonial-carousel">
<div class="Clients-Testimonial-item">
<div class="testimonial">
<h3 class="testimonial-title">Farhana Islam</h3>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vehicula turpis non est imperdiet, et facilisis nisl tempus. Donec nec. </p>
<div class="pic">
<img src="{{asset('adminform/imags/Clients-Testimonial1.jpg')}}" alt="">
</div>
</div>
</div>
<div class="Clients-Testimonial-item">
<div class="testimonial">
<h3 class="testimonial-title">Williamson</h3>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vehicula turpis non est imperdiet, et facilisis nisl tempus. Donec nec. </p>
<div class="pic">
<img src="{{asset('adminform/imags/Clients-Testimonial3.jpg')}}" alt="">
</div>
</div>
</div>
<div class="Clients-Testimonial-item">
<div class="testimonial">
<h3 class="testimonial-title">Williamson</h3>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<i class="material-icons star">star</i>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vehicula turpis non est imperdiet, et facilisis nisl tempus. Donec nec. </p>
<div class="pic"> 
<img src="{{asset('adminform/imags/Clients-Testimonial2.jpg')}}" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="vertical-space-85"></div>
</div>
</section>


<div class="modal" id="myModal">
<div class="container">
<div class="vertical-space-85"></div>
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-body">
<button class="button button-rounded  close" data-dismiss="modal">&times;</button>
<video class="" controls>
<source src="{{asset('adminform/video/Pexels_Videos_2706.mp4')}}" type="video/mp4">
</video>
</div>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="{{asset('adminform/js/email-decode.min.js')}}"></script><script src="{{asset('adminform/js/jquery.min.js')}}"></script>
<script src="{{asset('adminform/js/bootstrap.min.js')}}"></script>
<script src="{{asset('adminform/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('adminform/js/jquery-ui.min.js')}}"></script>

<script src="{{asset('adminform/js/custom.js')}}"></script>
<script>
        $(".search-icone").click(function(){
     // $(".menu").animate({height: "100vh"});
});

    </script>
</body>

</html>


@endsection