@extends('layouts.dashboardDefault')

@section('title')
Show User
@endsection

@section('content')

        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users') }}">All Users</a>
        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users/create') }}">Create User</a>
        
        <h1>Showing {{ $user->name }}</h1>

        <div class="jumbotron text-center">
            <h2>{{ $user->name }}</h2>
            <p>
                <strong>Email:</strong> {{ $user->email }}<br>
                <strong>Role:</strong> {{ $user->role->role }}
            </p>
        </div>

@endsection
