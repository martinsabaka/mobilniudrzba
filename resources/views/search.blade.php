
@extends('layouts.subpageDefault')

@section('title')
View results
@endsection

@section('content')
    <h2>Query results</h2>
    @foreach ($posts as $post)
        <div class="blogPost">
            <a href="{{ route($post->url) }}" class="blogList" style="color: #000000; text-decoration: none">
                <h5>{!! $post->title !!}</h5>
                <p>{!! str_limit($post->content, $limit = 500, $end = '...') !!}</p>
            </a>
        </div>
    @endforeach
    <br>
@endsection

