<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/materialize.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/icon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/icon-styles.css') }}">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<style type="text/css">
		.top-parallax {
			height: 620px !important;
		}

		.tabs .indicator {
			background-color: #2E7D32 !important;
		}
	</style>
	
	<title>Fooda</title>
</head>
<body class="grey darken-4">

	<header>
		<div class="navbar-fixed">
			<nav class="top-nav green darken-3">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo left" style="padding-left: 20px;">Fooda</a>

					<ul class="right">
						<li><a href="{{url('/login')}}" style="width: 150px; text-align: center;">Login</a></li>
						<li class="green darken-4"><a href="{{url('/register')}}" style="width: 150px; text-align: center;">Register</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
	</header>

	<main>
		<div class="parallax-container top-parallax">
			<div class="parallax">
				<img src="{{ URL::asset('/img/parallax/1.jpg') }}">
			</div>
		</div>
		<div class="section white">
			<div class="row">
				<div class="col s12 l5 push-l1 center-align" style="padding-top: 50px;">
					<h4 class="header green-text">Promo advertisement</h4>
					<h5 class="header grey-text darken-2">Add your promo to the list. Add a banner and some details. Once placed in the list, users can easily see your promo in their dashboard.</h5>
				</div>
				<div class="col s12 l5 push-l1">
					<img style="width: 100%;" src="{{ URL::asset('/img/parallax/3.jpg') }}">
				</div>
			</div>
		</div>
		<div class="section white">
			<div class="row">
				<div class="col s12 l6 push-l1" style="padding-top: 50px;">
					<img style="width: 300px;" src="{{ URL::asset('/img/parallax/4.png') }}">
				</div>
				<div class="col s12 l6 pull-l1 center-align" style="padding-right: 50px;">
					<h4 class="header green-text">Quick searches</h4>
					<h5 class="header grey-text darken-2">Search for restaurants by name easily. Whether the restaurant's promo is published lately or burried deeply, we make sure that the restaurants you want are just easy to find.</h5>
				</div>
			</div>
		</div>
		<div class="section white">
			<div class="row">
				<div class="col s12 l4 push-l1 center-align" style="padding-top: 80px;">
					<h4 class="header green-text">Optimized for your Devices</h4>
					<h5 class="header grey-text darken-2">It works great anywhere. Access our system with all your devices, whether it is a desktop, a laptop, or on smartphone</h5>
				</div>
				<div class="col s12 l6 push-l2">
					<img style="width: 100%;" src="{{ URL::asset('/img/parallax/5.jpg') }}">
				</div>
			</div>
		</div>
		<div class="section white">
			<div class="row">
				<div class="col s12 l12 center-align" style="padding-top: 50px; padding-bottom: 50px;">
					<h4 class="header green-text">Get started now!</h4>
					<a class="waves-effect waves-light green darken-2 btn-large btn">Register for Free</a>
				</div>
			</div>
		</div>
		<div class="parallax-container">
			<div class="parallax">
				<img src="{{ URL::asset('/img/parallax/2.jpg') }}" style="height: 125%">
			</div>
		</div>
	</main>

	<footer class="page-footer green darken-2" style="margin-top: 0px; padding-bottom: 1px;">
		<div class="row container">
			<div class="col l5 s12 offset-l1">
				<h5 class="white-text">Stay connected</h5>
				<div class="row" style="margin-top: 20px; margin-bottom: 10px;">
					<div class="col s3 m2 l3">
						<a href="http://twitter.com/fooda-app" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
					</div>
					<div class="col s3 m2 l3">
						<a href="http://facebook.com/fooda-app" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
					</div>
					<div class="col s3 m2 l3">
						<a href="http://plus.google.com/+fooda-app" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
					</div>
					<div class="col s3 m2 l3">
						<a href="http://public.linkedin.com/ph/fooda-app" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
					</div>
				</div>
				<div class="white-text">Copyright &copy; 2016. All rights reserved.</div>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Links</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="#">Login</a></li>
					<li><a class="grey-text text-lighten-3" href="#">Register</a></li>
					<li><a class="grey-text text-lighten-3" href="#">View Posts</a></li>
					<li><a class="grey-text text-lighten-3" href="#">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="./js/jquery-2.1.1.min.js"></script>
	<script src="./js/materialize.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.parallax').parallax();
		});
	</script>
</body>
</html>