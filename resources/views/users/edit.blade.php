@extends('layouts.app')

@section('content')
    <form class="user" action="{{ route('profiles.update',['profile' => $profile->id]) }}" method="POST">
    @csrf
    @method('PUT')<!-- khai báo này dùng để thiết lập phương thức PUT
									nếu không khai báo thì khi submit không thiết lập HttpPUT -->

        <div class="form-group" >
            <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$profile->full_name}}">
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Address" value="{{$profile->address}}">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="date" class="form-control form-control-user" name="birthday" id="birthday" placeholder="Birthday" value="{{$profile->birthday}}">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
        <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
    </form>

@endsection
