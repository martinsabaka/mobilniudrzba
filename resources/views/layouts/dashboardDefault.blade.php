<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    <!-- Custom styles for this template -->
	<link href="{{ asset('css/subpageStyle.css') }}" rel="stylesheet">
	<link href="{{ asset('css/dashboardStyle.css') }}" rel="stylesheet">
</head>
<body>
	<!--Head-->

	<!--Navigation bar-->
	@include('includes.navbar')

	<!--Content-->
	<div class="container-fluid" id="content-row">
		<div class='row'>
			<div class="col-2"></div>
			<div class="col-8">
				@section('content')
				@show
			</div>
			<div class="col-2"></div>
		</div>
	</div>
	

    <!--footer-->
    @include('includes.footer')
    <!-- jQuery library -->
    @include('includes.jquery')

</body>
</html>