@extends('layouts.app')

@push('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js">
    </script>
    <script>
    @if(Session::has('success'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true
        }
        toastr.success("{{ session('success'),'Success'}}");
        @endif

    </script>

    <script>
        $('#avatar').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endpush

@section('content')

        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<style>

    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

    body {
        background-color: white;
        font-family: "Poppins", sans-serif;
        font-weight: 300
    }

    .card {
        padding: 10px;
        border: none
    }

    .height {
        height: 100vh
    }

    .inputs span {
        font-size: 13px;
        font-weight: 600;
        color: #9e9e9e
    }

    .inputs input {
        height: 48px;
        border: 2px solid #9e9e9e
    }

    .inputs input:focus {
        border: 2px solid blue;
        box-shadow: none
    }

    label.radio {
        cursor: pointer;
        width: 100%
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }

    label.radio span {
        padding: 7px 14px;
        border: 2px solid blue;
        display: inline-block;
        color: blue;
        border-radius: 3px;
        text-transform: uppercase;
        width: 100%;
        height: 49px;
        display: flex;
        justify-content: start;
        align-items: center
    }

    label.radio input:checked+span {
        border-color: blue;
        background-color: blue;
        color: #fff;
        width: 100%;
        height: 49px;
        display: flex;
        justify-content: start;
        align-items: center
    }

    .name {
        font-size: 13px;
        font-weight: 600;
        color: #9e9e9e;
        margin-left: 3px
    }

    .options {
        text-decoration: none
    }

    .btn btn-outline-light {
        color: #0000ff;
        border-color: #0000ff
    }

    .btn btn-outline-light:hover {
        background-color: #0000ff;
        border-color: #0000ff
    }


</style>

    <div class="col-lg-12 mb-4">
        <div class="card mb-4">
            <div class="card-body">
                <form class="user" action="{{ route('profiles.update', ['id' => $profile->id]) }}"
                      method="POST" enctype="multipart/form-data">
                        @csrf
                <!-- khai báo này dùng để thiết lập phương thức PUT
                                                nếu không khai báo thì khi submit không thiết lập HttpPUT -->


                    <div class="row" style="background-color: #b8daff;border:2px solid powderblue;border-radius: 15px ">
                        <div class="card" > <h2>Edit Profile</h2></div>
                        <div class="col-lg-8 mb-4"></div>
                    </div>

                            <div class="row  justify-content-center ">
                            <div class="col-md-10">
                                <div class="card py-4">
                                    <div class="inputs px-4"> <span class="text-uppercase">Full Name</span>
                                        <input type="text" style="background-color: #fb246a" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" required value="{{ $profile->full_name }}"> </div>
                                    <div class="row mt-3 g-2">
                                        <div class="col-md-6">
                                            <div class="inputs px-4"> <span class="text-uppercase">Address</span>
                                                <input type="text" style="background-color: #fb246a" name="address" class="form-control form-control-user" id="address" placeholder="Address" required value="{{ $profile->address }}"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inputs px-4"> <span class="text-uppercase">Birthday</span> <input type="date" style="background-color: #fb246a" class="form-control form-control-user" name="birthday"
                                                                                                                          id="birthday" placeholder="Birthday" required value="{{ $profile->birthday }}"> </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 px-4"> <span class="text-uppercase name">Profile Picture</span>
                                        <div class="d-flex flex-row align-items-center mt-2"> <img src="{{URL::to($profile->avatar)}}"  width="200" class="rounded">
                                        </div>

                                        <br>
                                        <div class="custom-file" >
                                            <input type="file" class="custom-file-input " id="avatar" name="avatar" >
                                            <label for="avatar" class="custom-file-label">{{$profile->avatar}}</label>
                                        </div>

                                    </div>
                                    <br>
                                    <button type="submit"  class="btn btn-outline-light" > Update profile </button>
                                </div>
                            </div>
                            </div>

{{--                        <a href="{{route('profile')}}" class="btn btn-primary">Back</a>--}}
                </form>
            </div>
        </div>
    </div>

@endsection


