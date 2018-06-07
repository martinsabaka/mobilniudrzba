@section('title')
{!! $post->title !!}
@endsection



<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    <!-- Custom styles for this template -->
	<link href="{{ asset('css/referralsStyle.css') }}" rel="stylesheet">
</head>
<body>
	<!--Head-->

	<!--Navigation bar-->
	@include('includes.navbar')

	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="title">
					<h2>{!! $post->title !!}
						@if(Auth::user() && Auth::user()->isAdmin())
							<a href="{{ route('quill', ['id' => $post->id]) }}" class="btn btn-outline-primary" role="button">Edit</a>
						@endif	
					</h2>
					<h5>{{ __('services.referralsT') }}<br><br>
					<small>{{ __('services.referralsS') }}</small></h5>
				</div>
				<!--
				<div class="mainText" id='referralText'>
					{!! $post->content !!}
				</div>
				-->
				<div class="row">
					<div class="col-lg-6" id="text">
						<div class="mainText" id='referralText'>
							{!! $post->content !!}
							
						</div>
					</div>
					<div class="col-lg-6" id="pics">
						<h4>{{ __('services.projects') }}</h4>
						<img src="../img/skoda.png" id="skoda">
						<img src="../img/tdk.png" class="normal-size">
						<img src="../img/nkt.png" class="normal-size">
						<img src="../img/kyb_0.png" class="normal-size">
						<img src="../img/saint.jpg" class="normal-size">
						<img src="../img/adfors.png" class="normal-size">
						<img src="../img/lassel.jpg" id="lassel">
						<img src="../img/rako.jpg" id="rako">
						<img src="../img/Arcelor.jpg" id="arcelor">
						<img src="../img/coavis.png" class="normal-size">
						<img src="../img/fatra.png" class="normal-size">
					</div>
				</div>
				
			</div>
			<div class="col-lg-3">
				<nav class="nav navbar-light" id="sidemenu">
	                <div class="navbar-collapse">
						<a href="{{ route('skoda-auto') }}" class="nav-link parent btn btn-primary btn-md">Škoda Auto</a>
						<a href="{{ route('tdk') }}" class="nav-link parent btn btn-primary btn-md">TDK</a>
						<a href="{{ route('nkt-cables') }}" class="nav-link parent btn btn-primary btn-md">NKT</a>
						<a href="{{ route('fatra') }}" class="nav-link parent btn btn-primary btn-md">Fatra</a>
						<a href="{{ route('kyb') }}" class="nav-link parent btn btn-primary btn-md">KYB</a>
						<a href="{{ route('lasselsberger') }}" class="nav-link parent btn btn-primary btn-md">Lasselsberger</a>
						<a href="{{ route('coavis') }}" class="nav-link parent btn btn-primary btn-md">Coavis</a>
						<a href="{{ route('saint-gobain') }}" class="nav-link parent btn btn-primary btn-md">Saint-Gobain Adfors</a>
	                </div>
	            </nav>
			</div>	
				
		</div>
	</div>


    <!--footer-->
    @include('includes.footer')


</body>
</html>