
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


    @if (count($errors) > 0)
        <div class="alert alert-danger"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
{{--            <li>{{ $message }}  </li>--}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">

                    <h1 class="m-0 font-weight-bold text-light">Profile {{ $profiles->full_name }}</h1>
                    <div class="m-1">
                        <a href="edit/{{ $profiles->id }}" class="btn btn-light btn-icon btn"
                           role="button">
                            <span class="icon">
                                <i class="fas fa-user-edit"></i>
                            </span>
                            Edit
                        </a>
                        <a href="{{url()->previous('/users')}}" class="btn btn-dark btn-fill">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/profiles" method="post" enctype="multipart/form-data">
                        {{--                            {{ csrf_field() }}--}}
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Avatar</label>
                                    <div class="card">

                                        <embed src="{!!URL::to($profiles->avatar)!!}"style="width:350px; height:300px;" frameborder="0">
{{--                                        --}}{{-- <div style="background-image: url({{$profile->avatar}}), style="width: 450px;height: 350px""></div> --}}
{{--                                        --}}{{-- <img class="card-img-top"--}}
{{--                                            src="{{ $profile->avatar }}"--}}
{{--                                            alt="Card image cap"> --}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="row text-center">--}}
{{--                                                <div class="col">--}}
{{--                                                    <a href="#" class="btn btn-lg mb-1" role="button">--}}
{{--                                                        <span class="icon">--}}
{{--                                                            <i class="fab fa-facebook-f"></i>--}}
{{--                                                        </span>--}}
{{--                                                    </a>--}}
{{--                                                    <h5 class="text-center font-weight-bold">500</h5>--}}
{{--                                                </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <a href="#" class="btn btn-lg mb-1" role="button">--}}
{{--                                                        <span class="icon">--}}
{{--                                                            <i class="fab fa-twitter"></i>--}}
{{--                                                        </span>--}}
{{--                                                    </a>--}}
{{--                                                    <h5 class="text-center font-weight-bold">900</h5>--}}
{{--                                                </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <a href="#" class="btn btn-lg mb-1" role="button">--}}
{{--                                                        <span class="icon">--}}
{{--                                                            <i class="fab fa-google-plus-g"></i>--}}
{{--                                                        </span>--}}
{{--                                                    </a>--}}
{{--                                                    <h5 class="text-center font-weight-bold">700</h5>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 mb-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">User Id</label>
                                        <input type="text" style="background-color: #fb246a" name="user_id" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profiles->user_id }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Full name</label>
                                        <input type="text" style="background-color: #fb246a" name="full_name" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profiles->full_name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" style="background-color: #fb246a" name="category_user_name" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profiles->address }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Birthday</label>
                                        <input type="text" style="background-color: #fb246a" name="category_user_name" class="form-control"
                                               id="exampleInputPassword1" placeholder="{{ $profiles->birthday }}" disabled>
                                    </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
