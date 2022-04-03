@extends('layouts.app')
@push('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js">
    </script>
    <script>
        $("#avatar").on('change', function() {
            var filename = $(this).val();
            $(this).next('.custom-file-label').html(filename);
        })
    </script>

@endpush
@section('content')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <style>
        * {
            margin: 0;
            padding: 0
        }

        body {
            background-color: white;
        }

        .card1 {
            height: 500px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.5s
        }

        .card1:hover {
            transform: scale(1.1)
        }

        .card2 {
            height: 500px;
            width: 100%;
            border: none;
            background-color: #28395a;
            border-radius: 8px;
            transition: all 0.5s
        }

        .card2:hover {
            transform: scale(1.1)
        }

        .login {
            font-size: 20px;
            font-weight: bold;
            margin-left: 10px
        }

        .input-field span {
            font-size: 12px;
            color: #28395a;
            margin-left: 10px;
            font-weight: bold;

        }

        .form-control {
            font-size: 13px;
            color: #fb246a;
            font-weight: bold;
            border-left: none;
            border-right: none;
            border-top: none;
            border-bottom: 1px solid #9b9b9b;
            box-shadow: none
        }

        .btn1 {
            height: 35px;
            width: 100%;
            background-color: #28395a;;
            font-weight: 500;
            color: #cdcdc4;
            border: none;
            font-size: 15px;
            border-radius: 16px;
        }

        .text1 .forget {
            color: #767676;
            font-weight: 500
        }

        .text2 span {
            font-weight: 500;
            color: #28395a;
        }

        .text2 .register {
            color: #28395a;;
            font-weight: bold
        }

    </style>

    <form class="profile" action="{{ route('profiles.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
    <div class="container mt-5 mb-5">
        <div class="d-flex flex row g-0">
            <div class="col-md-6 mt-3">
                <div class="card card1 p-3">
                    <div class="d-flex flex-column">  <span class="login mt-3" style="color: #28395a; font-weight: bold">Tell us something about you</span> </div>
                    <div class="input-field d-flex flex-column mt-3">
                        <span >Fullname:</span>
                        <input type="text" name="full_name" class="form-control form-control-user" style="background-color: #fb246a ;" id="full_name" placeholder="Full Name" required>
                        <span class="mt-3">Address:</span>
                        <input type="text" name="address" class="form-control form-control-user" style="background-color: #fb246a ;" id="address" placeholder="Address" required>
                        <span class="mt-3">Birthday:</span>
                        <input type="date" class="form-control form-control-user" name="birthday" style="background-color: #fb246a ;" id="birthday" placeholder="Birthday" required>
                        <span class="mt-3">Profile picture:</span>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="custom-file" >
                                <input type="file" class="custom-file-input " id="avatar" name="avatar" >
                                <label for="avatar"  class="custom-file-label"></label>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn1 btn-primary" value="Submit">
{{--                        <button class="mt-4 btn1 btn-dark d-flex justify-content-center align-items-center">Login</button>--}}

                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card card2 p-3">
                    <div class="image"> <img style="height: 465px;width: 100%" src="https://microgridknowledge.com/wp-content/uploads/2018/06/jobs-72-dpi.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>



@endsection









