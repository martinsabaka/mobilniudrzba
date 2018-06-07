<!DOCTYPE html>
<html lang={{ config('app.locale') }}>
<head>
    @include('includes.head')
</head>
<body>
	<!-- fixed buttons right bar 
	<div class="btn-group-vertical" id="notificationButton">
		<button type="button" class="btn btn-primary btn-md">
		    Mám záujem o ponuku
		</button>
		<button type="button" class="btn btn-primary btn-md">
		    Zasielanie noviniek
		</button>
	</div>
	-->


	<!--Navigation bar-->
	@include('includes.navbar')

	<!--Masthead-->
    @include('includes.masthead')

    <!--Navbar2-->
    @include('includes.navbar2')

    <!--Intro-->
    @include('includes.intro')

	<!--Showcases-->

	<!--Testimonials-->
    @include('includes.testimonials')

    <!--Action-->
    <!-- Recieve news -->
    <script src="https://app.smartemailing.cz/js/jquery-1.8.3-conditional.js"></script>
    <script src="https://app.smartemailing.cz/public/web-forms/subscribe/105507-e36shaeynxubw2uqrvbw95uqsyyjth64e9zdauu9yjvs7f1msauhndgsd3igry3o6ve0eflgf9v7zin8x5emm6dv3vg1rgu69lnl" id="se-webformScriptLoader-e36shaeynxubw2uqrvbw95uqsyyjth64e9zdauu9yjvs7f1msauhndgsd3igry3o6ve0eflgf9v7zin8x5emm6dv3vg1rgu69lnl"></script>

    <!--footer-->
    @include('includes.footer')

    <!-- jQuery library -->
    @include('includes.jquery')
</body>
</html>