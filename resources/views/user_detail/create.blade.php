@extends('layouts.app')

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
        <form action="/user_detail" method='post'>
            @csrf
            <input type="text" name=" fullname" placeholder="Fullname">

            <input type="text" name=" email" placeholder="Email">

            <input type="text" name=" phone" placeholder="Phone">

            <input type="text" name=" address" placeholder="Address">

            <input type="submit" value="Submit">
        </form>
    </div>


@endsection
