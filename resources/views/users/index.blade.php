@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách user</h6>
                </div>
                <div class="p-3">
                    <div class="row mx-md-n5">
                        <div class="col px-md-5">
                            <div class="p-3 border bg-light">
                                <a href="users/create" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <span class="text">Create user</span>

                                </a>

                            </div>

                        </div>
                        <div class="col px-md-5">
                            <div class="p-3 border bg-light">
                                <a href="profiles/create" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <span class="text">Add profile</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>

                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <a ({{ $user->id }})>
                                        {{ $user->name }}
                                    </a>

{{--                                                                    <a href="/profiles/{{$user->id}}">{{$user->name}}</a>--}}
                                </td>
                                <td>{{ $user->email }}</td>
                                {{--                            <td>--}}
                                {{--                                <input id="in{{$user->id}}" type="password" readonly value="{{ $user->password }}">--}}
                                {{--                            </td>--}}
                                <td>
                                    <a href="profiles/{{ $user->id }}/edit" class="btn btn-success btn-icon btn-sm"
                                       role="button">
                                            <span class="icon">
                                                <i class="fas fa-user-edit"></i>
                                            </span>
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-fill" href="profiles/{{$user->id}}">View Profile</a>

                                </td>
                                <td>
                                    <form class="user" action="{{ url('/users' , $user->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon btn-sm"

                                                value="Delete">
                                                <span class="icon">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            Delete
                                        </button>
                                    </form>
                                </td>


                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



@endsection
