@extends('layouts.app')

		@section('content')
			<ul>
				@foreach($users as $user)
					<li>{{$user->name}}</li>
				@endforeach
			</ul>
		@endsection