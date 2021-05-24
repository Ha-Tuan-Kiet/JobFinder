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
<div class="container" style="margin-top:100px;height:500px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white;">
  @if (\Session::has('success'))
  <div class="alert alert-success">
      <ul>
          <li>{!! \Session::get('success') !!}</li>
      </ul>
  </div>
@endif
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <p style=" font-size: xx-large;font-weight:bold;"> Job List</p>
        </div>
        <div class="col-lg-6 col-md-6" style="text-align: right;">
            <button onclick="location.href='/postjob'" class="btn-primary" style="border-radius:.2rem;"><i class="fas fa-plus"></i> Create</button>         
        </div>
    </div>
    <table class="table table-hover">
        <thead class="" style="background-color:#0065d1;color:white;">
          <tr>
            <th scope="col">Company</th>
            <th scope="col">Title</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ( $jobsdata as$jobdata )
        <tbody>
          <tr>
            <th scope="row">{{$jobdata->company_name}}</th>
            <td>{{$jobdata->position}} <br>#{{$jobdata->name}}</td>
            <td>{{$jobdata->created_at}}</td>
            <td>
                <button onclick="location.href='/edit-job/{{$jobdata->id}}'"  type="button" class="btn-warning" style="border-radius:.2rem;"><i class="fas fa-edit"></i></button>
                <button onclick="location.href='/delete-job/{{$jobdata->id}}'" type="button" class="btn-danger" style="border-radius:.2rem;"><i class="fas fa-trash-alt"></i></button>
            </td>
          </tr>
        </tbody>
        @endforeach      
      </table>
</div>


</body>

</html>


@endsection