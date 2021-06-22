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
    <div class="container">
        <h1>Tell us something about you</h1>
        <div class=" alert-danger" role="alert">
            @if(session()->has('errors'))
                @foreach($errors ->all() as $errors)
                    <p>{{$errors}}</p>
                @endforeach()
            @endif
        </div>

    <form class="profile" action="{{ route('profiles.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
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
                    <label for="avatar" style="background-color:skyblue;" class="custom-file-label">Avatar</label>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Create">
        <a href="{{url()->previous('/')}}" class="btn btn-primary">Back</a>
    </form>
@endsection










