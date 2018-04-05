<!-- app/views/users/index.blade.php -->

@extends('layouts.dashboardDefault')

@section('title')
Show Post
@endsection

@section('content')

    	<a class="btn btn-small btn-success" href="{{ URL::to('dashboard/blogs') }}">All Blogs</a>
        <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/blogs/create') }}">Create Blog</a>
        
    	<h1>Showing {{ $post->name }}</h1>

        <div class="jumbotron text-center">
            <h2>{{ $post->name }}</h2>
            <p>
                <strong>Title:</strong> {{ $post->title }}<br>
                <strong>Creator:</strong> {{ $post->user->name }}<br>
                <strong>Content:</strong> {{ $post->content }}
            </p>
        </div>

@endsection

