@extends('layouts.home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div class="container" style="margin-top:50px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white;">
        <label><p style=" font-size: xx-large;font-weight:bold;"> Favorite Job</p></label>
        @foreach($favorite_jobs as $favorite_job)
        <!-- single-job-content -->
        <div class="single-job-items mb-30">
          <div class="job-items">
              <div class="company-img">
                  <a href="job_details.html"><img style="width:100px;height:100px;" src="{{ asset('bootstrap/img/icon/'.$favorite_job->image_logo)}}" alt=""></a>
              </div>
              <div class="job-tittle">
                  <a href="{{route('jobdetails',['id'=>$favorite_job->id,'eventid'=>$favorite_job->career_id])}}"><h4>{{$favorite_job->position}}</h4></a>
      
                  <ul>
                      <li>{{$favorite_job->company_name}}</li>
                      <li><i class="fas fa-map-marker-alt"></i>{{$favorite_job->location}}</li>
                      <li>{{$favorite_job->salary_min}} - {{$favorite_job->salary_max}} {{$favorite_job->salary_unit}} </li>
                  </ul>
              </div>
          </div>
          <div class="items-link f-right" style="text-align:end">
            <button onclick="location.href='{{route('/Cv/deleteFavorite_job/',['id'=>$favorite_job->id])}}'" type="button" class="btn-danger mb-10" style="border-radius:.2rem;cursor: pointer;"><i class="fas fa-times"></i></button>
              <a href="job_details.html">{{$favorite_job->job_type}}</a>
              <span>{{$favorite_job->work_time}} hours ago</span>
          </div>
      </div>                          
      @endforeach 
      <div style="display:flex;justify-content:center">  {!! $favorite_jobs->links() !!}</div>             
    </div>
</body>
</html>
@endsection