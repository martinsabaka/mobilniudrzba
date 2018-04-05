<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    <!-- Custom styles for this template -->
	<link href="{{ asset('css/subpageStyle.css') }}" rel="stylesheet">
</head>
<body>
	<!--Head-->

	<!--Navigation bar-->
	@include('includes.navbar')

	<!--Content-->
	<div class="container-fluid" id="content-row">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-5">
				@section('content')
				@show
			</div>
			<div class="col-4"></div>
		</div>
	</div>


    <!--footer-->
    @include('includes.footer')

</body>
</html>