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
	<div class="mainText">
		{!! $post->content !!}
	</div>
	<br>
	@if ($post->url == 'application')
		@if (App::getLocale() == 'cs')
		    <img id="imgSmall" src="{{ asset('img/Apl1CZ.JPG') }}">
		@elseif (App::getLocale() == 'sk')
			<img id="imgSmall" src="{{ asset('img/Apl1.jpg') }}">
		@endif
	@elseif ($post->url == 'application/advantages')
		<img id="imgSmall" src="{{ asset('img/Vyh1.jpg') }}">
	@elseif ($post->url == 'application/unique-features')
		<img id="imgSmall" src="{{ asset('img/Uni1.jpg') }}">
	@elseif ($post->url == 'application/assets')
		<img id="imgSmall" src="{{ asset('img/Pri1.jpg') }}">
	@elseif ($post->url == 'application/how-works')
		<img id="imgSmall" src="{{ asset('img/Ako1.jpg') }}">
	@elseif ($post->url == 'application/sap-integration')
		@if (App::getLocale() == 'cs')
		    <b>Scénáře integrace PROCE55 Maintenance se systémem SAP:</b><br>
			<img id="imgSmall" src="{{ asset('img/Rea1CZ.JPG') }}">
			<b>Architektura integracie PROCE55 Maintenance se SAP PM:</b>
			<img id="imgSmall" src="{{ asset('img/Rea2CZ.JPG') }}">
		@elseif (App::getLocale() == 'sk')
			<b>Scenáre integrácie PROCE55 Maintenance so systémom SAP:</b><br>
			<img id="imgSmall" src="{{ asset('img/Rea1SK.JPG') }}">
			<b>Architektúra integrácie PROCE55 Maintenance so SAP PM:</b>
			<img id="imgSmall" src="{{ asset('img/Rea2SK.JPG') }}">
		@endif
		
	@elseif ($post->url == 'application/prod-sys-integration')
		<img id="imgSmall" src="{{ asset('img/Int1.jpg') }}">
	@elseif ($post->url == 'application/story')
		<img id="imgSmall" src="{{ asset('img/Pribeh1.jpg') }}">
	@elseif ($post->url == 'visualization')
		<img id="imgSmall" src="{{ asset('img/Viz1.jpg') }}">
	@elseif ($post->url == 'prod-sys-integration')
		<img id="imgSmall" src="{{ asset('img/Int1.jpg') }}">
	@endif
@endsection

@section('sideMenuLinks')
	<a href="{{ route('application') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbarApp.application') }}</a>
	<a href="{{ route('application/advantages') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbarApp.advantages') }}</a>
	<a href="{{ route('application/unique-features') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.unique') }}</a>
	<a href="{{ route('application/assets') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.implement') }}</a>
	<a href="{{ route('application/how-works') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.how') }}</a>
	<a href="{{ route('application/sap-integration') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.sap') }}</a>
	<a href="{{ route('prod-sys-integration') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.integration') }}</a>
	<a href="{{ route('visualization') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.visualization') }}</a>
	<a href="{{ route('technical-aspects') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.technical') }}</a>
	<a href="{{ route('application/story') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbarApp.story') }}</a>

	<br>
	<a href="{{ route('functionality') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbarApp.functionality') }}</a>
@endsection


