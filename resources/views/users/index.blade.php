<!-- app/views/users/index.blade.php -->

@extends('layouts.dashboardDefault')

@section('title')
View Users
@endsection

@section('content')

        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users') }}">All Users</a>
        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users/create') }}">Create User</a>
            
        <h1>All Users</h1>
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Created at</td>
                    <td>Role</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->role->role }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <!-- delete the nerd (uses the destroy method DESTROY /users/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        <!-- show the nerd (uses the show method found at GET /users/{id} -->
                        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users/' . $user->id) }}">Show this User</a>

                        <!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/users/' . $user->id . '/edit') }}">Edit this User</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection

