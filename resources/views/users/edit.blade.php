<!-- app/views/nerds/edit.blade.php -->

@extends('layouts.dashboardDefault')

@section('title')
Edit User
@endsection

@section('content')
        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users') }}">All Users</a>
        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users/create') }}">Create User</a>

        <h1>Edit {{ $user->name }}</h1>

        <!-- if there are creation errors, they will show here -->
        {{ Html::ul($errors->all()) }}

        {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('role', 'User role') }}
                {{ Form::select('role_id', array('0' => 'Select a Role', '1' => 'admin', '2' => 'Customer', '3' => 'waiting'), null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

@endsection
