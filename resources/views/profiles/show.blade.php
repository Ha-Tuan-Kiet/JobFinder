
@extends('layouts.app')
@section('js')
    <script>
        $('#avatar').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection('js')
@section('content')


{{--    @if (count($errors) > 0)--}}
{{--        <div class="alert alert-danger"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->--}}
{{--            <li>{{ $message }}  </li>--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-12">--}}
{{--            <!-- Form Basic -->--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">--}}

{{--                    <h1 class="m-0 font-weight-bold text-light">Profile {{ $profiles->full_name }}</h1>--}}
{{--                    <div class="m-1">--}}
{{--                        <a href="edit/{{ $profiles->id }}" class="btn btn-light btn-icon btn"--}}
{{--                           role="button">--}}
{{--                            <span class="icon">--}}
{{--                                <i class="fas fa-user-edit"></i>--}}
{{--                            </span>--}}
{{--                            Edit--}}
{{--                        </a>--}}
{{--                        <a href="{{url()->previous('/users')}}" class="btn btn-dark btn-fill">Back</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="/profiles" method="post" enctype="multipart/form-data">--}}
{{--                        --}}{{--                            {{ csrf_field() }}--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-4 mb-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Avatar</label>--}}
{{--                                    <div class="card">--}}

{{--                                        <embed src="{!!URL::to($profiles->avatar)!!}"style="width:350px; height:300px;" frameborder="0">--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-8 mb-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputPassword1">User Id</label>--}}
{{--                                        <input type="text" style="background-color: #fb246a" name="user_id" class="form-control"--}}
{{--                                               id="exampleInputPassword1" placeholder="{{ $profiles->user_id }}" disabled>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputPassword1">Full name</label>--}}
{{--                                        <input type="text" style="background-color: #fb246a" name="full_name" class="form-control"--}}
{{--                                               id="exampleInputPassword1" placeholder="{{ $profiles->full_name }}" disabled>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputPassword1">Address</label>--}}
{{--                                        <input type="text" style="background-color: #fb246a" name="category_user_name" class="form-control"--}}
{{--                                               id="exampleInputPassword1" placeholder="{{ $profiles->address }}" disabled>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputPassword1">Birthday</label>--}}
{{--                                        <input type="text" style="background-color: #fb246a" name="category_user_name" class="form-control"--}}
{{--                                               id="exampleInputPassword1" placeholder="{{ $profiles->birthday }}" disabled>--}}
{{--                                    </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

{{--<div class="container">--}}
{{--    <div class="row">--}}
        <div class="panel panel-default">
            <div class="panel-heading">  <h4 >User Profile <a href="edit/{{ $profiles->id }}" class="btn btn-light btn-icon btn" role="button"><i class="fa fa-gear"></i></a></h4>
               </div>

            <div class="panel-body">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
{{--                    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">--}}
                    <embed  alt="User Pic" src="{!!URL::to($profiles->avatar)!!}"style="width:310px; height:310px;" frameborder="0" id="profile-image1" class="img-circle img-responsive">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                    <div class="container" >
                        <h2><span class="glyphicon glyphicon-user" style="width:50px;"></span>{{ $profiles->full_name }}</h2>
{{--                        <p>an   <b> Employee</b></p>--}}


                    </div>
                    <hr>
                    <ul class="container details" >
                        <li><p><span class="glyphicon glyphicon-map-marker" style="width:50px;"></span>Address: {{ $profiles->address }}</p></li>
                        <li><p><span class="glyphicon glyphicon-calendar" style="width:50px;"></span>Birthday: {{ $profiles->birthday }}</p></li>
{{--                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>--}}
                    </ul>
                    <hr>
                    <div class="col-sm-5 col-xs-6 tital " >Date Of Joining: {{ $profiles->created_at }}</div>
                </div>
            </div>
        </div>
{{--    </div>--}}
@endsection
