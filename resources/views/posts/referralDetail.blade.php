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
	<!-- added -->
	<div class="row" id="referral-logos-row">
		@if($post->url == 'skoda-auto')
			<img src="{{ asset('img/referrals/skoda.png') }}">
		@elseif($post->url == 'tdk')
			<img src="{{ asset('img/referrals/tdk.png') }}">
		@elseif($post->url == 'nkt-cables')
			<img src="{{ asset('img/referrals/nkt.png') }}">
		@elseif($post->url == 'fatra')
			<img src="{{ asset('img/referrals/fatra.png') }}">
		@elseif($post->url == 'kyb')
			<img src="{{ asset('img/referrals/kyb.png') }}">
		@elseif($post->url == 'lasselsberger')
			<img src="{{ asset('img/referrals/lassel.jpg') }}">
		@elseif($post->url == 'coavis')
			<img src="{{ asset('img/referrals/coavis.png') }}">
		@elseif($post->url == 'saint-gobain')
			<img src="{{ asset('img/referrals/saint.jpg') }}">
		@endif
		<img id="proce55-img" src="{{ asset('img/referrals/proce55.png') }}">
	</div>

	<div class="mainText">
		{!! $post->content !!}
	</div>

	<div class="row" id="referral-pics-row">
		@if($post->url == 'skoda-auto')
			<img src="{{ asset('img/referrals/skodaPic1.jpg') }}">
			<img src="{{ asset('img/referrals/skodaPic2.jpg') }}">
		@elseif($post->url == 'tdk')
			<img src="{{ asset('img/referrals/tdkPic1.jpg') }}">
			<img src="{{ asset('img/referrals/tdkPic2.jpg') }}">
		@elseif($post->url == 'nkt-cables')
			<img src="{{ asset('img/referrals/nktPic1.jpg') }}">
			<img src="{{ asset('img/referrals/nktPic2.jpg') }}">
		@elseif($post->url == 'fatra')
			<img src="{{ asset('img/referrals/fatraPic1.png') }}">
			<img src="{{ asset('img/referrals/fatraPic2.png') }}">
		@elseif($post->url == 'kyb')
			<img src="{{ asset('img/referrals/kybPic1.jpg') }}">
			<img src="{{ asset('img/referrals/kybPic2.jpg') }}">
		@elseif($post->url == 'lasselsberger')
			<img src="{{ asset('img/referrals/lasselPic1.jpg') }}">
			<img src="{{ asset('img/referrals/lasselPic2.jpg') }}">
		@elseif($post->url == 'coavis')
			<img src="{{ asset('img/referrals/coavisPic1.jpg') }}">
			<img src="{{ asset('img/referrals/coavisPic2.jpg') }}">
		@elseif($post->url == 'saint-gobain')
			<img src="{{ asset('img/referrals/saintPic1.jpg') }}">
			<img src="{{ asset('img/referrals/saintPic2.jpg') }}">
		@endif
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


