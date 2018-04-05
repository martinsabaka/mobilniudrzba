@extends('layouts.subpageDefault')

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
		
	</div>	
	<div class="mainText" id="mainTextContact">
		{!! $post->content !!}
	</div>
@endsection

@section('sideMenuLinks')
	<a href="{{ route('about') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbar.about_us') }}</a>
	<a href="{{ route('our-story') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbar.our_story') }}</a>
	<a href="{{ route('what-makes-us-different') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.what_makes_us_different') }}</a>
	<a href="{{ route('our-team') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.our_team') }}</a>
	<a href="{{ route('where-we-are') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.where_we_are') }}</a>
	<a href="{{ route('contact') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.contact') }}</a>
@endsection


