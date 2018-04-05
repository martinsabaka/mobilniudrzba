<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="@yield('description')">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">


<title>
	@section('title')
	{{ __('intro.mobile_maintenance') }}
	@show | East-Gate
</title>
<!-- Favicon -->
<link rel="shortcut icon" href="http://www1.east-gate.eu/sites/default/files/eastgate_favicon.png" type="image/png">

<!-- Bootstrap core CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
