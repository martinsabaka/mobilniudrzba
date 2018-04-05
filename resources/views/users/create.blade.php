<!-- app/views/nerds/edit.blade.php -->

@extends('layouts.dashboardDefault')

@section('title')
Create User
@endsection

@section('content')

    <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users') }}">All Users</a>
    <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/users/create') }}">Create User</a>

    <h1>Create User</h1>

    <!-- if there are creation errors, they will show here -->
    {{ Html::ul($errors->all()) }}

    {{ Form::open(array('url' => 'dashboard/users')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Request::old('name'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', Request::old('email'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('role_id', 'Nerd Level') }}
            {{ Form::select('role_id', array('0' => 'Select a Role', '1' => 'admin', '2' => 'Customer', '3' => 'waiting'), null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection
