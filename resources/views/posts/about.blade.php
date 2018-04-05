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
		@if ($post->url == 'about')
			<h5><b>{{ __('aboutPages.aboutT') }}</b><br><br>
			<small><b>{{ __('aboutPages.aboutS') }}</b></small></h5>
			<br>
		@elseif ($post->url == 'our-story')
			<h5><b>{{ __('aboutPages.storyT') }}</b><br><br>
			<small><b>{{ __('aboutPages.storyS') }}</b></small></h5>
			<br>
		@elseif ($post->url == 'what-makes-us-different')
			<h5><b>{{ __('aboutPages.diffT') }}</b><br><br>
			<small><b>{{ __('aboutPages.diffS') }}</b></small></h5>
			<br>
		@elseif ($post->url == 'our-team')
			<h5><b>{{ __('aboutPages.teamT') }}</b><br><br>
			<small><b>{{ __('aboutPages.teamS') }}</b></small></h5>
			<br>
		@elseif ($post->url == 'where-we-are')
			<h5><b>{{ __('aboutPages.whereT') }}</b><br><br>
			<small><b>{{ __('aboutPages.whereS') }}</b></small></h5>
			<br>
		@endif	
		
	</div>	
	<div class="mainText">
		{!! $post->content !!}
	</div>
	<br>
	@if ($post->url == 'about')
		<img id="imgSmall" src="{{ asset('img/Ona1.jpg') }}">
	@elseif ($post->url == 'our-story')
		@if (App::getLocale() == 'cs')
		    <img id="imgSmall" src="{{ asset('img/Nas1CZ.JPG') }}">
		@elseif (App::getLocale() == 'sk')
			<img id="imgSmall" src="{{ asset('img/Nas1.jpg') }}">
		@endif
		
	@elseif ($post->url == 'what-makes-us-different')
		<img id="imgSmall" src="{{ asset('img/Cim1.jpg') }}">
	@elseif ($post->url == 'where-we-are')
		<img id="imgSmall" src="{{ asset('img/Ona1.jpg') }}">
	@endif	
@endsection

@section('sideMenuLinks')
	<a href="{{ route('about') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbar.about_us') }}</a>
	<a href="{{ route('our-story') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbar.our_story') }}</a>
	<a href="{{ route('what-makes-us-different') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.what_makes_us_different') }}</a>
	<a href="{{ route('our-team') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.our_team') }}</a>
	<a href="{{ route('where-we-are') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.where_we_are') }}</a>
	<a href="{{ route('contact') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.contact') }}</a>
@endsection


