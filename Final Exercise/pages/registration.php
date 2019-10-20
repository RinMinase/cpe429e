<?php include "../php/connect_db.php" ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="../js/script.js"></script>

		<style type="text/css">
			/* MODAL */

			div.modal {
				/*width: 991px;*/
				position: absolute;
				top: 0px; bottom: 0px;
				left: 0px; right: 0px;
				background: rgba(0,0,0,0.01);
				visibility: hidden;
				opacity:0;
				transition: opacity 400ms ease-in;
				pointer-events: none;
			}

			div.modal:target {
				visibility: visible;
				opacity:1;
				pointer-events: auto;
			}

			div.modal-container {
				width: 991px;
				margin: 0px auto;
				position: relative;
				height: 100%;
			}

			@media screen and (max-width: 991px) {
				div.modal-container {
					width: 93%;
				}
			}

			div.modal > div > div {
				width: 250px;
				position: absolute;
				/*margin: 15% auto;*/
				right: 0px;
				top: 167px;

				padding: 5px 20px 13px 20px;
				/*border-radius: 10px;*/
				background: #e0e0e0;

				/*height: 213px;
				overflow: visible;
				padding: 0px;
				-webkit-transition: height .5s;
				transition: padding .5s ease;*/
				/*transition: all .5s ease;*/
			}

			/*div.modal > div > div:target {
				height: 213px;
				overflow: visible;
				padding: 5px 20px 13px 20px;
			}*/

			div.modal a.close {
				position: absolute;
				top: -10px;
				right: -12px;

				line-height: 30px;
				width: 30px;
				border-radius: 15px;

				background: #606061;
				color: #FFFFFF;

				font-size: 19px;
				text-decoration: none;
				font-weight: bold;
				text-align: center;
			}

			div.modal a.close:hover { background: #64B5F6; }

			div.modal a.anywhere-close {
				position: fixed;
				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
				cursor: default;
			}

			/* MODAL CONTENTS */

			div.modal form {
				width: 100%;
				overflow: hidden;
			}

			div.modal > div {
				text-align: center;
			}

			div.modal form.form-login input {
				height: 24px;
				width: 91%;

				padding: 5px 10px;
				margin-bottom: 15px;

				border: 1px solid #A0B3B0;
				transition: border-color 1s ease, box-shadow 1s ease;

				font-size: 18px;
			}

			div.modal form.form-login input:focus {
				outline: none;
				border-color: #2196F3;
			}

			div.modal form.form-login button {
				border: 0px;
				outline: none;
				border-radius: 0;
				padding: 10px 0px;
				font-size: 1.2rem;
				font-weight: bold;
				color: white;
				width: 100%;
				background-color: #64B5F6;

				transition: all .5s ease;
			}

			div.modal form.form-login button:hover, button:focus {
				background-color: #1E88E5;
			}

			/* REGISTRATION STYLES */

			form.form-register {
				padding-bottom: 40px;
			}

			form.form-register input, select > option {
				height: 24px;

				padding: 5px 10px;
				/*margin-bottom: 15px;*/
				/*margin-right: 10px;*/
			}

			form.form-register input[type=radio] {
				width: 35px
			}

			form.form-register select {
				height: 36px;
				width: 175px;
				margin-right: 10px;
				font-size: 17px
			}

			form.form-register input.spousename {
				max-width: 350px !important;
				display: none;
			}

			form.form-register input[type=radio], label.radio {
				font-size: 18px;
				line-height: 19px;
				height: 19px;
				margin-bottom: 0px;
			}

			form.form-register input[type=number] {
				max-width: 200px;
			}

			form.form-register input[type=email] {
				max-width: 300px;
			}

			form.form-register input[type=text], input[type=number], input[type=password], input[type=email] {
				max-width: 250px;
				margin-right: 0px;

				border: 1px solid #A0B3B0;
				transition: border-color 700ms ease, box-shadow 700ms ease;

				font-size: 18px;
			}

			form.form-register input.reg-first,
			form.form-register input.reg-last {
				width: 190px !important;
			}

			form.form-register input.reg-middle {
				width: 85px !important;
			}

			form.form-register input:focus {
				outline: none;
				border-color: #2196F3;
			}


			form.form-register button {
				border: 0px;
				outline: none;
				border-radius: 0;
				padding: 10px 0px;
				font-size: 1.2rem;
				font-weight: bold;
				color: white;
				width: 250px;
				background-color: #64B5F6;

				transition: all .5s ease;
			}

			form.form-register button:hover, button:focus {
				background-color: #1E88E5;
			}


			/* THIS() */
			div.topblock {
				overflow: auto;
				display: block;
				min-width: 97%;
			}

			div.subblock {
				float: left;
				margin-right: 10px;
				margin-bottom: 15px;
			}
		</style>

		<title>Registration</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Registration Page</h1>
			</header>

			<nav>
				<ul class="navbar">
					<li><a href="../index.php">HOME</a></li>
					<li><a href="./profile.php">PROFILE</a></li>
					<li><a href="./class-schedule.php">CLASS SCHEDULE</a></li>
					<li><a class="active">REGISTRATION</a></li>
					<li class="right"><a class="user" href="#loginbox"></a></li>
				</ul>
			</nav>

			<section class="body">
				<section class="content">
					<h2>
						Register on my site!
					</h2>
					<!-- onsubmit="validate()" -->
					<form action="../php/addData.php" class="form-register" name="registration" method="get">

						<div class="topblock">
							
							<div class="topblock">
								<div class="subblock">
									<input type="text" placeholder="Username*" name="txtUsername" onblur="validateUsername()" onfocus="resetUsername()">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="password" placeholder="Password*" name="txtPassword" onblur="validatePassword()" onfocus="resetPassword()">
								</div>

								<div class="subblock">
									<input type="password" placeholder="Repeat Password*" name="txtRepeatPassword" onblur="validateRepeatPassword()" onfocus="resetRepeatPassword()">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="text" placeholder="First Name*" class="reg-first" name="txtFName" onblur="validateFName()" onfocus="resetFName()">
								</div>

								<div class="subblock">
									<input type="text" placeholder="Middle" class="reg-middle" name="txtMName" onblur="validateMName()" onfocus="resetMName()">
								</div>

								<div class="subblock">
									<input type="text" placeholder="Last Name*" class="reg-last" name="txtLName" onblur="validateLName()" onfocus="resetLName()">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<label for="dateBirthday">Birthday</label>
									<input type="date" name="dateBirthday" onblur="return validateBirthday()" onfocus="resetBirthday()">
								</div>

								<div class="subblock">
									<input type="radio" name="gender" value="Male" checked>
									<label class="radio">Male</label>
								</div>

								<div class="subblock">
									<input type="radio" name="gender" value="Female">
									<label class="radio">Female</label>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<select name="civilstatus" onblur="validateSpouse()" onfocus="resetSpouse()">
										<option>Single</option>
										<option>Married</option>
										<option>Widowed</option>
										<option>Awesome</option>
									</select>
								</div>

								<div class="subblock">
									<input type="text" placeholder="Spouse Name*" class="spousename" name="txtSpouse" onblur="validateSpouse()" onfocus="resetSpouse()">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="number" placeholder="Contact No.*" name="txtContact" onblur="validateContact()" onfocus="resetContact()">
								</div>

								<div class="subblock">
									<input type="email" placeholder="Email Address*" name="txtEmail" onblur="validateEmail()" onfocus="resetEmail()">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<button type="submit">Register</button>
								</div>
							</div>
						</div>
					</form>
				</section>

				<?php include "../modules/sidebar.html" ?>
			</section>

			<?php include "../modules/footer.html" ?>
		</div>

		<div id="loginbox" class="modal">
			<div class="modal-container">
				<a href="#close" class="anywhere-close"></a>
				<div>
					<!-- <a href="#close" title="Close" class="close">&times;</a> -->
					<h2>Login</h2>
					<form class="form-login" action="#close" method="get">
						<input type="text" name="loginUsername" placeholder="Username"><br>
						<input type="password" name="loginPassword" placeholder="Password"><br>
						<button type="submit">Login</button>
					</form>
				</div>
			</div>
			
		</div>
	</body>
</html>