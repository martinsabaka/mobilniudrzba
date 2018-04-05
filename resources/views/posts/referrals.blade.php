@section('title')
{!! $post->title !!}
@endsection



<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    <!-- Custom styles for this template -->
	<link href="{{ asset('css/referralsStyle.css') }}" rel="stylesheet">
	<!-- Scroll.js JavaScript -->
	<script src="{{ asset('js/scroll.js') }}"></script>
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
							<h4>Zákazníci a odvetvia</h4><p>Riešenie PROCE55 Maintenance priebežne vyvíja East-Gate viac ako 13 rokov.</p><p>Naše riešenie sa používa na riadenie kritických procesov, najmä v oblasti výroby, údržby a logistiky</p><ul><li><span style="color: rgb(34, 34, 34);">viac ako 20 multinárodných korporácií,</span>&nbsp;</li><li>v desiatkach výrobných závodoch,</li><li>v 15 krajinách na 3 kontinentoch.</li></ul><p>Implementovali sme riešenia vo veľkých globálnych korporáciách, ako i v silných regionálnych firmách. Naši zákazníci pôsobia v rôznych odvetviach:</p><ul><li>Automobilový priemysel</li><li>Elektrotechnika&nbsp;</li><li>Strojárstvo&nbsp;</li><li>Výroba a montáž káblov&nbsp;</li><li>Potravinársky priemysel&nbsp;</li><li>Telekomunikácie&nbsp;</li><li>Poskytovatelia verejných služieb</li></ul><p><a href="http://www1.east-gate.eu/sk/zakaznici" target="_blank" style="background-color: rgb(255, 255, 255); color: rgb(226, 0, 38);">Zákazníci East-Gate</a></p>
						</div>
					</div>
					<div class="col-lg-6" id="pics">
						<h4>Projekty</h4>
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