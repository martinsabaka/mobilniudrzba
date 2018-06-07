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
	<div class="row" style="padding-top: 0rem;">
		@if (App::getLocale() == 'cs')
		    <img id="imgSmall" src="{{ asset('img/Fun1CZ.JPG') }}" style="max-height: 450px;">
		@elseif (App::getLocale() == 'sk')
			<img id="imgSmall" src="{{ asset('img/fun1.jpg') }}" style="max-height: 450px;">
		@elseif (App::getLocale() == 'en')
			<img id="imgSmall" src="{{ asset('img/Fun1EN.jpg') }}" style="max-height: 450px;">
		@endif
	</div>	
	<div class="mainText">
		{!! $post->content !!}
	</div>
@endsection

@section('sideMenuLinks')
	@include('includes.sideMenuLinks')
@endsection


