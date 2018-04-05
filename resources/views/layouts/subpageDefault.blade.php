<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    <!-- Custom styles for this template -->
	<link href="{{ asset('css/subpageStyle.css') }}" rel="stylesheet">
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
				@section('content')
				@show
			</div>
			<div class="col-lg-3">
				<nav class="nav navbar-light" id="sidemenu">
	                <div class="navbar-collapse">
	                	@section('sideMenuLinks')
	                    @show
	                </div>
	            </nav>
			</div>	
				
		</div>
	</div>

	<!-- Overlay for zoomed images -->
	<div id="zoom"></div>
	<div id="zoomContent">
	    <img id="imgBig" src="" alt="" width="1000" />
	</div>

	<script>
		$(".row img").click(function(){		
			$("#imgBig").attr("src", $(this).attr("src"));
	    	$("#zoom").show();
	    	$("#zoomContent").show();
		});

		$("#imgBig").click(function(){		
	    	$("#zoom").hide();
	    	$("#zoomContent").hide();
		});		

	</script>


    <!--footer-->
    @include('includes.footer')


</body>
</html>