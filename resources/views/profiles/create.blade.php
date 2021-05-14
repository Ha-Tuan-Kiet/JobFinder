@extends('layouts.app')
@section('js')
    <script>
        $("#avatar").on('change', function() {
            var filename = $(this).val();
            $(this).next('.custom-file-label').html(filename);
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
    <form class="profile" action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
{{--                <input type="hidden" name="user_id" value="{{$id}}" id="user_id"  >--}}
        <div class="form-group" >
{{--            <input type="hidden" name="user_id" value="{{$id}}" id="user_id"  >--}}
            <input type="text" name="user_id" class="form-control form-control-user" id="id" placeholder="User ID" >
        </div>
        <div class="form-group" >
            <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" >
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Address" >
        </div>
        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="date" class="form-control form-control-user" name="birthday" id="birthday" placeholder="Birthday" >
            </div>
        </div>
        <div class="form-group">

            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="custom-file" >
                    <input type="file" class="custom-file-input " id="avatar" name="avatar" >
                    <label for="avatar" style="background-color:skyblue;color" class="custom-file-label">Avatar</label>
                </div>
            </div>
        </div>

{{--        <div class="form-group">--}}
{{--            <label for="exampleInputPassword1">Avatar</label><br>--}}

{{--            <div class="card col-sm-4">--}}
{{--                <img class="card-img-top" src="{{URL::to($profile->avatar)}}"/>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 mb-3 mb-sm-0">--}}
{{--                <div class="custom-file" >--}}
{{--                    <input type="file" class="custom-file-input " id="avatar" name="avatar" >--}}
{{--                    <label for="avatar" class="custom-file-label">{{$profile->avatar}}</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <button type="submit"  class="btn btn-primary"> Cập nhật user</button>--}}
{{--            <a href="{{route('users')}}" class="btn btn-primary">Back</a>--}}
{{--        </div>--}}
        <input type="submit" class="btn btn-primary" value="Create">
        <a href="{{url()->previous('/')}}" class="btn btn-primary">Back</a>
    </form>
@endsection










