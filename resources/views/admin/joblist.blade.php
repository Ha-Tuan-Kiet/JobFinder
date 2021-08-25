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
</head>
<body>
  @if (\Session::has('success'))
  <div class="alert alert-success">
      <ul>
          <li>{!! \Session::get('success') !!}</li>
      </ul>
  </div>
@endif
  <section class="blog_area section-padding" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 mb-5 mb-lg-0">
                @include('admin.adminnav') 
            </div>
            <div class="col-lg-8">
                <div class="blog_right_sidebar">
                  <div style="margin-top:20px;height:500px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white; padding:10px">
                 
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
                              <th scope="col">Detail</th>
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
                              <td><button onclick="location.href='/admin/job_application/{{$jobdata->id}}'" type="button" class="btn-info" style="border-radius:.2rem;"><i class="fas fa-clipboard"></i></button></td>
                            </tr>
                          </tbody>
                          @endforeach                 
                        </table>
                      <div style="display:flex;justify-content:center">{{$jobsdata->links()}}</div>  
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>


@endsection