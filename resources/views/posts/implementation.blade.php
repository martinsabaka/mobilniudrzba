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
		<h5><b>{{ __('services.implementationT') }}</b><br><br>
		<small><b>{{ __('services.implementationS') }}</b></small></h5>
		<br>
	</div>	
	<div class="mainText">
		{!! $post->content !!}
	</div>
	<br>
	<img id="imgSmall" src="{{ asset('img/eg_implementacia.jpg') }}">
@endsection

@section('sideMenuLinks')
	<a href="{{ route('services-overview') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbar.service_overview') }}</a>
	<a href="{{ route('implementation') }}" class="nav-link parent btn btn-primary btn-md">{{ __('navbar.implementation') }}</a>
	<a href="{{ route('support') }}" class="nav-link child btn btn-primary btn-md">{{ __('navbar.support') }}</a>
	
@endsection


