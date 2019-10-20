<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app1.name', 'Fooda') }}</title> -->

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/materialize.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/icon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}">

	<style type="text/css">
	a.waves-effect {
		width: 50%;
	}
	
	main > .container > .top-row {
		margin-top:30px;
	}

	.side-nav > .active {
		background-color: #43a047 !important;
	}
	
	.side-nav > li > a,
	.collapsible-body > ul > li > a {
		width: 100%
	}

	.userView {
		margin-bottom: 0px !important;
	}


	</style>
	
	<title>Fooda</title>
</head>
<body class="grey darken-4">
		@yield('header')

		@yield('content')
	<script src="{{ URL::asset('/js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ URL::asset('/js/materialize.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.modal-trigger').leanModal();
		});
	</script>
</body>
</html>