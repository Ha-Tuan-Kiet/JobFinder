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
    <section class="blog_area section-padding" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 mb-5 mb-lg-0">
                    @include('admin.adminnav') 
                </div>
                <div class="col-lg-8">
                    <div class="blog_right_sidebar">
                        <div style="margin-top:20px;height:500px;border:1px solid;border-radius:.3rem;border-style:none;background-color:white; padding:10px">
                            <form method="post" action="/admin/profile/update_profile/{{$profile->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div style="text-align:center">
                                <img style="width:100px;height:100px;" src="{{ asset('bootstrap/img/icon/job-list1.png')}}" alt=""></a>
                                <p >{{$profile->name}}</p>
                                <p >{{$profile->email}}</p>
                            </div>
                       
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="sel1">First Name</label>
                                    <input class="form-control" type="text" name="first_name" value="{{$profile->first_name}}" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="sel1">Last Name</label>
                                    <input class="form-control" type="text" name="last_name" value="{{$profile->last_name}}" required>
                                </div>
                            </div>
                            <label for="sel1">Full Name</label>
                            <input class="form-control" type="text" name="full_name" value="{{$profile->full_name}}"  required>
                            <label for="sel1">Date Of Birth</label>
                            <input class="form-control" type="date" name="birth_day" value="{{$profile->date_of_birth}}" required>
                            <div class="row">
                                <div class="col-lg-6">
                                    @if ($profile->gender==1)
                                    <label for="sel1">Gender</label>
                                    <input class="form-control" type="text" value="Male" id="example-number-input" disabled>
                                    @else
                                    <label for="sel1">Gender</label>
                                    <input class="form-control" type="text" value="Female" id="example-number-input" disabled>
                                    @endif
                                    
                                </div>
                                <div class="col-lg-6">
                                    <label for="sel1">Address</label>
                                    <input class="form-control" type="text" name="address" value="{{$profile->address}}" id="example-number-input" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"> Update Profile</button>
                            </form>
                            
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection