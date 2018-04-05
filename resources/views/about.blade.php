@extends('layouts.subpageDefault')

@section('title')
{!! $post->title !!}
@endsection

@section('content')
	<h2>
		{!! $post->title !!}
		@if(Auth::user()->isAdmin())
			<a href="{{ route($post->title) }}" class="btn btn-outline-primary" role="button">edit</a>
		@endif	
	</h2>
	<p>{!! $post->content !!}</p>

@endsection
