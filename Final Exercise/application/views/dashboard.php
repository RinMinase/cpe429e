<!DOCTYPE html>

<?php
	if(!isset($_SESSION['data'])) {
		redirect('registration');
	}

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/style.css">

		<style type="text/css">
			form.form-edit {
				padding-bottom: 40px;
			}

			form.form-edit input,
			select > option,
			#deletePassword {
				height: 24px;

				padding: 5px 10px;
				/*margin-bottom: 15px;*/
				/*margin-right: 10px;*/
			}

			form.form-edit input[type=radio] {
				width: 35px
			}

			form.form-edit select {
				height: 36px;
				width: 175px;
				margin-right: 10px;
				font-size: 17px
			}

			form.form-edit input.spousename {
				max-width: 350px !important;
				display: none;
			}

			form.form-edit input[type=radio], label.radio {
				font-size: 18px;
				line-height: 19px;
				height: 19px;
				margin-bottom: 0px;
			}

			form.form-edit input[type=number] {
				max-width: 200px;
			}

			form.form-edit input[type=email] {
				max-width: 300px;
			}

			form.form-edit input[type=text],
			input[type=number],
			input[type=password],
			input[type=email],
			#deletePassword {
				max-width: 250px;
				margin-right: 0px;

				border: 1px solid #A0B3B0;
				transition: border-color 700ms ease, box-shadow 700ms ease;

				font-size: 18px;
			}

			form.form-edit input.reg-first,
			form.form-edit input.reg-last {
				width: 190px !important;
			}

			form.form-edit input.reg-middle {
				width: 85px !important;
			}

			form.form-edit input:focus,
			#deletePassword:focus {
				outline: none;
				border-color: #2196F3;
			}


			form.form-edit button,
			#delete-user {
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

			form.form-edit button:hover, button:focus,
			#.delete-user:focus {
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

		<title>Profile</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>User Dashboard</h1>
			</header>

			<nav>
				<ul class="navbar">
					<li><a class="active">USER DASHBOARD</a></li>
					<li class="right"><?php echo anchor('logout', 'LOGOUT - ' . $this->session->data)?></li>
				</ul>
			</nav>

			<section class="body">
				<section class="content">
					<h2>Welcome <?php $this->AccountsModel->getFName(); ?> <?php $this->AccountsModel->getLName(); ?>!</h2>
					<h5>Username: <?php $this->AccountsModel->getUsername(); ?></h5>
					<h5>Email: <?php $this->AccountsModel->getEmail(); ?></h5>
					<h5>Contact: <?php $this->AccountsModel->getContact(); ?></h5>
					<hr>

					<h2>Edit account</h2>
					<?php echo form_open('update', 'class="form-edit" name="edit_details"');?>
						<div class="topblock">
							<div class="topblock">
								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getUsername(); ?> placeholder="Username*" name="txtUsername" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="password" placeholder="Password*" name="txtPassword" required>
								</div>

								<div class="subblock">
									<input type="password" placeholder="Repeat Password*" name="txtRepeatPassword" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getFName(); ?> placeholder="First Name*" class="reg-first" name="txtFName" required>
								</div>

								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getMName(); ?> placeholder="Middle" class="reg-middle" name="txtMName">
								</div>

								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getLName(); ?> placeholder="Last Name*" class="reg-last" name="txtLName" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<label for="dateBirthday">Birthday</label>
									<input type="date" name="dateBirthday">
								</div>

								<div class="subblock">
									<?php
										if($this->AccountsModel->getGender() == 0)
											echo '<input type="radio" name="gender" value="Male" checked>';
										else
											echo '<input type="radio" name="gender" value="Male">';
									?>
									<label class="radio">Male</label>
								</div>

								<div class="subblock">
									<?php
										if($this->AccountsModel->getGender() == 1)
											echo '<input type="radio" name="gender" value="Female" checked>';
										else
											echo '<input type="radio" name="gender" value="Female">';
									?>
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
									<input type="text" value=<?php $this->AccountsModel->getSpouse(); ?> placeholder="Spouse Name" class="spousename" name="txtSpouse">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getContact(); ?> placeholder="Contact No.*" name="txtContact" required>
								</div>

								<div class="subblock">
									<input type="email" value=<?php $this->AccountsModel->getEmail(); ?> placeholder="Email Address*" name="txtEmail" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<button type="submit">Edit User</button>
								</div>
							</div>
						</div>
					<?php echo form_close();?>

					<hr>

					<?php echo form_open('delete', 'class="form-delete" name="deleteForm"');?>
						<div class="topblock" style="padding-bottom: 30px;">
							<div class="subblock">
								<p>Do you want to delete your account?</p>
								<div class="topblock">
									<div class="subblock">
										<input type="password" id="deletePassword" placeholder="Enter your password" name="deletePassword" required>
									</div>
								</div>
								<div class="topblock">
									<div class="subblock">
										<button id="delete-user" type="submit">Delete User</button>
									</div>
								</div>
							</div>
						</div>
					<?php echo form_close();?>
				</section>

				<?php //$this->load->view('sidebar'); ?>
			</section>

			<?php $this->load->view('footer'); ?>
		</div>
	</body>
</html>