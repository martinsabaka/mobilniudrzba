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
	<div class="subtitle">
			<h5><b>{{ __('aboutPages.innovationT') }}</b><br><br>
			<small><b>{{ __('aboutPages.innovationS') }}</b></small></h5>
			<br>
	</div>	
	<div class="mainText">
		{!! $post->content !!}
	</div>
	<br>
	<img id="imgSmall" src="{{ asset('img/innovation.png') }}">
@endsection

@section('sideMenuLinks')
	@include('includes.sideMenuLinks')
@endsection

