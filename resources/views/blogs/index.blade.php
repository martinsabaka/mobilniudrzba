<!-- app/views/users/index.blade.php -->

@extends('layouts.dashboardDefault')

@section('title')
View Blogs
@endsection

@section('content')

    <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/blogs') }}">All Blogs</a>
    <a class="btn btn-small btn-success" href="{{ URL::to('dashboard/blogs/create') }}">Create Blog</a>
        
    <h1>All Blogs</h1>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Content</td>
                <td>Created at</td>
                <td>Updated at</td>
                <td>User_id</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ str_limit($post->content, $limit = 10, $end = '...') }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>{{ $post->user->name }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /users/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {!! Form::open(['method' => 'DELETE','route' => ['blogs.destroy', $post->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    <!-- show the nerd (uses the show method found at GET /users/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('blog/' . $post->id) }}">Show this Blog</a>

                    <!-- edit this nerd (uses the edit method found at GET /users/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/blogs/' . $post->id . '/edit') }}">Edit this Blog</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

