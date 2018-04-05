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
			<h5><b>VÁŠEŇ A KOMPETENCIA</b><br><br>
			<small><b>Spájame znalosť procesov a branžové know-how s inovatívnymi technológiami</b></small></h5>
			<br>
		
	</div>	
	<div class="mainText">
		{!! $post->content !!}
	</div>
	<br>
		<div class="row">
			<div class="col-lg-3">
				<img class="imgTeam" src="{{ asset('img/gallo.jpg') }}">
				<b>{{ __('aboutPages.gallo1') }}</b></br>
				<p>{{ __('aboutPages.gallo2') }}</p>
				<p><i>{{ __('aboutPages.gallo3') }}</i></p>
			</div>
			<div class="col-lg-3">
				<img class="imgTeam" src="{{ asset('img/sabaka.jpg') }}">
				<b>{{ __('aboutPages.sabaka1') }}</b></br>
				<p>{{ __('aboutPages.sabaka2') }}</p>
				<p><i>{{ __('aboutPages.sabaka3') }}</i></p>
			</div>
			<div class="col-lg-3">
				<img class="imgTeam" src="{{ asset('img/kalinin.jpg') }}">
				<b>{{ __('aboutPages.kalinin1') }}</b></br>
				<p>{{ __('aboutPages.kalinin2') }}</p>
				<p><i>{{ __('aboutPages.kalinin3') }}</i></p>
			</div>
			<div class="col-lg-3">
				<img class="imgTeam" src="{{ asset('img/beles.jpg') }}">
				<b>{{ __('aboutPages.beles1') }}</b></br>
				<p>{{ __('aboutPages.beles2') }}</p>
				<p><i>{{ __('aboutPages.beles3') }}</i></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<img class="imgTeam" src="{{ asset('img/ferner_0.jpg') }}">
				<b>{{ __('aboutPages.ferner1') }}</b></br>
				<p>{{ __('aboutPages.ferner2') }}</p>
				<p><i>{{ __('aboutPages.ferner3') }}</i></p>
			</div>
			<div class="col-lg-9">
			</div>
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


