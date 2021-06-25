
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
                    <embed  alt="User Pic" src="{{URL::to($profiles->avatar)}}"style="width:310px; height:310px;" frameborder="0" id="profile-image1" class="img-circle img-responsive">
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
