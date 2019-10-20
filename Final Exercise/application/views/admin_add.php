<!DOCTYPE html>

<?php
	if($_SESSION['data'] != 'admin') {
		redirect('index');
	}

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/style.css">
		<!--script src="<?php echo base_url() ?>resources/js/script.js"></script-->

		<style type="text/css">
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

		<title>Add Account</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Admin - Add Account</h1>
			</header>

			<nav>
				<ul class="navbar">
					<li><?php echo anchor('admin_dashboard', 'ADMIN DASHBOARD')?></li>
					<li><a class="active">ADD ACCOUNT</a></li>
					<li class="right"><?php echo anchor('logout', 'LOGOUT - ' . $this->session->data)?></li>
				</ul>
			</nav>

			<section class="body">
				<!-- <section class="content"> -->
					<h2>
						Add Account
					</h2>
					<!-- <form action="../php/addData.php" class="form-register" name="registration" method="get"> -->
					<?php echo form_open('register', 'class="form-register" name="registration"');?>

						<div class="topblock">
							
							<div class="topblock">
								<div class="subblock">
									<input type="text" placeholder="Username*" name="txtUsername" required>
								</div>
								<!-- </div>

								<div class="topblock"> -->
								<div class="subblock">
									<input type="password" placeholder="Password*" name="txtPassword" required>
								</div>

								<div class="subblock">
									<input type="password" placeholder="Repeat Password*" name="txtRepeatPassword" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="text" placeholder="First Name*" class="reg-first" name="txtFName" required>
								</div>

								<div class="subblock">
									<input type="text" placeholder="Middle" class="reg-middle" name="txtMName">
								</div>

								<div class="subblock">
									<input type="text" placeholder="Last Name*" class="reg-last" name="txtLName" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<label for="dateBirthday">Birthday</label>
									<input type="date" name="dateBirthday">
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
									<select name="civilstatus">
										<option value="single">Single</option>
										<option value="married">Married</option>
										<option value="widowed">Widowed</option>
										<option value="awesome">Awesome</option>
									</select>
								</div>

								<div class="subblock">
									<input type="text" placeholder="Spouse Name" class="spousename" name="txtSpouse">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="text" placeholder="Contact No.*" name="txtContact" required>
								</div>

								<div class="subblock">
									<input type="email" placeholder="Email Address*" name="txtEmail" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<button type="submit">Register</button>
								</div>
							</div>
						</div>
					<?php echo form_close();?>
				<!-- </section> -->

				<?php // $this->load->view('sidebar'); ?>
			</section>

			<?php $this->load->view('footer'); ?>
		</div>

		<?php $this->load->view('modal'); ?>
	</body>
</html>