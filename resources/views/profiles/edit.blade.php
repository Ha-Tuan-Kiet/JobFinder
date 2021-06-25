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
    <div class="col-lg-12 mb-4">
        <div class="card mb-4">
            <div class="card-body">
                <form class="user" action="{{ route('profiles.update', ['id' => $profile->id]) }}"
                      method="POST" enctype="multipart/form-data">
                        @csrf
                <!-- khai báo này dùng để thiết lập phương thức PUT
                                                nếu không khai báo thì khi submit không thiết lập HttpPUT -->
                    <div class="row">
                        <div class="col-lg-4 mb-4"></div>
                        <div class="col-lg-8 mb-4"></div>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1" hidden>User id</label>--}}
{{--                        <input type="text" style="background-color: #fb246a" name="user_id" class="form-control form-control-user"--}}
{{--                               id="user_id" placeholder="User ID" value="{{ $profile->user_id }}" disabled>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full name</label>
                        <input type="text" style="background-color: #fb246a" name="full_name" class="form-control form-control-user"
                               id="full_name" placeholder="Full Name" value="{{ $profile->full_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" style="background-color: #fb246a" name="address" class="form-control form-control-user"
                               id="address" placeholder="Address" value="{{ $profile->address }}" required>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleInputEmail1">Birthday</label>
                            <input type="date" style="background-color: #fb246a" class="form-control form-control-user" name="birthday"
                                   id="birthday" placeholder="Birthday" value="{{ $profile->birthday }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Avatar</label><br>

                        <div class="card col-sm-4">
                            <img src="{{URL::to($profile->avatar)}}">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="custom-file" >
                                <input type="file" class="custom-file-input " id="avatar" name="avatar" required>
                                <label for="avatar" class="custom-file-label">{{$profile->avatar}}</label>
                            </div>
                        </div>
                        <button type="submit"  class="btn btn-primary"> Update profile</button>
{{--                        <a href="{{route('profile')}}" class="btn btn-primary">Back</a>--}}
                    </div>


                </form>


            </div>

        </div>
    </div>

@endsection
