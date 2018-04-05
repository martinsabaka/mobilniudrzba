@extends('layouts.subpageNoImgZoom')

@section('title')
{!! $post->title !!}
@endsection

@section('content')
	<div class="title">
		<h2>{!! $post->title !!}
			@if(Auth::user() && Auth::user()->isAdmin())
				<a href="{{ route('quill', ['id' => $post->id]) }}" class="btn btn-outline-primary" role="button">Edit</a>
			@endif	
		</h2>
	</div>
	<div class="mainText">
		{!! $post->content !!}
	</div>
@endsection

@section('sideMenuLinks')
	<a href="{{ route('skoda-auto') }}" class="nav-link parent btn btn-primary btn-md">Škoda Auto</a>
	<a href="{{ route('tdk') }}" class="nav-link parent btn btn-primary btn-md">TDK</a>
	<a href="{{ route('nkt-cables') }}" class="nav-link parent btn btn-primary btn-md">NKT</a>
	<a href="{{ route('fatra') }}" class="nav-link parent btn btn-primary btn-md">Fatra</a>
	<a href="{{ route('kyb') }}" class="nav-link parent btn btn-primary btn-md">KYB</a>
	<a href="{{ route('lasselsberger') }}" class="nav-link parent btn btn-primary btn-md">Lasselsberger</a>
	<a href="{{ route('coavis') }}" class="nav-link parent btn btn-primary btn-md">Coavis</a>
	<a href="{{ route('saint-gobain') }}" class="nav-link parent btn btn-primary btn-md">Saint-Gobain Adfors</a>
@endsection


