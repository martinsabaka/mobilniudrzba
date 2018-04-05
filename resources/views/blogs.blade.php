@extends('layouts.subpageDefault')

@section('title')
Blog
@endsection

@section('content')
	<h2>Najnovšie príspevky</h2>
	@foreach ($posts as $post)
		<div class="blogPost">
			<a href="{{ route('blogPost_detail', ['id' => $post->id]) }}" class="blogList" style="color: #000000; text-decoration: none">
				<h5>{!! $post->title !!} <small class="date">{{ $post->updated_at }}</small></h5>
				<p>{!! str_limit($post->content, $limit = 500, $end = '...') !!}</p>
			</a>
		</div>
	@endforeach
	<br>
	{{ $posts->links() }}
@endsection
