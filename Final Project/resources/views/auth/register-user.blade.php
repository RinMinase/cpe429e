<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/materialize.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<style type="text/css">
	a.waves-effect {
		width: 100%;
	}

	</style>

	<title>Fooda</title>
</head>
<body class="grey darken-4">

	<header>
		<nav class="green darken-3">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Register</a>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<form class="col s12 l5 offset-l3">
					<div class="row">
						<div class="input-field col s12">
							<input id="name" type="text" class="validate">
							<label for="name">Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" class="validate">
							<label for="email">Email Address</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
							<input id="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
						<div class="input-field col s12 l6">
							<input id="rep-password" type="password" class="validate">
							<label for="password">Repeat Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<a class="waves-effect waves-light btn">Register</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>

	<script src="./js/materialize.min.js"></script>
</body>
</html>