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
	<div class="mainText">
		{!! $post->content !!}
	</div>
	<br>
	<img id="imgSmall" src="{{ asset('img/Viz1.jpg') }}">
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


