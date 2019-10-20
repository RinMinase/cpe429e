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

			form.form-update {
				padding-bottom: 40px;
			}

			form.form-update input, select > option {
				height: 24px;

				padding: 5px 10px;
				/*margin-bottom: 15px;*/
				/*margin-right: 10px;*/
			}

			form.form-update input[type=radio] {
				width: 35px
			}

			form.form-update select {
				height: 36px;
				width: 175px;
				margin-right: 10px;
				font-size: 17px
			}

			form.form-update input.spousename {
				max-width: 350px !important;
				display: none;
			}

			form.form-update input[type=radio], label.radio {
				font-size: 18px;
				line-height: 19px;
				height: 19px;
				margin-bottom: 0px;
			}

			form.form-update input[type=number] {
				max-width: 200px;
			}

			form.form-update input[type=email] {
				max-width: 300px;
			}

			form.form-update input[type=text], input[type=number], input[type=password], input[type=email] {
				max-width: 250px;
				margin-right: 0px;

				border: 1px solid #A0B3B0;
				transition: border-color 700ms ease, box-shadow 700ms ease;

				font-size: 18px;
			}

			form.form-update input.reg-first,
			form.form-update input.reg-last {
				width: 190px !important;
			}

			form.form-update input.reg-middle {
				width: 85px !important;
			}

			form.form-update input:focus {
				outline: none;
				border-color: #2196F3;
			}


			form.form-update button {
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

			form.form-update button:hover, button:focus {
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
				<h1>Admin Dashboard</h1>
			</header>

			<nav>
				<ul class="navbar">
					<li><a class="active">ADMIN DASHBOARD</a></li>
					<li><?php echo anchor('admin_add', 'ADD ACCOUNT')?></li>
					<li class="right"><?php echo anchor('logout', 'LOGOUT - ' . $this->session->data)?></li>
				</ul>
			</nav>

			<section class="body">
				<!-- <section class="content"> -->
					<h2>
						Edit Account
					</h2>
					<?php echo form_open('admin_update?uname=' . $this->input->get('uname') , 'class="form-update" name="form-update"');?>

						<div class="topblock">
							
							<div class="topblock">
								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getUsernameByUsername($this->input->get('uname')); ?> placeholder="Username*" name="txtUsername" required>
								</div>
								<!-- </div>

								<div class="topblock"> -->
								<div class="subblock">
									<input type="password" value=<?php $this->AccountsModel->getPasswordByUsername($this->input->get('uname')); ?> placeholder="Password*" name="txtPassword" required>
								</div>

								<div class="subblock">
									<input type="password" value=<?php $this->AccountsModel->getPasswordByUsername($this->input->get('uname')); ?> placeholder="Repeat Password*" name="txtRepeatPassword" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getFNameByUsername($this->input->get('uname')); ?> placeholder="First Name*" class="reg-first" name="txtFName" required>
								</div>

								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getMNameByUsername($this->input->get('uname')); ?> placeholder="Middle" class="reg-middle" name="txtMName">
								</div>

								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getLNameByUsername($this->input->get('uname')); ?> placeholder="Last Name*" class="reg-last" name="txtLName" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<label for="dateBirthday">Birthday</label>
									<input type="date" name="dateBirthday">
								</div>

								<div class="subblock">
									<?php
										if($this->AccountsModel->getGenderByUsername($this->input->get('uname')) == 0)
											echo '<input type="radio" name="gender" value="Male" checked>';
										else
											echo '<input type="radio" name="gender" value="Male">';
									?>
									<label class="radio">Male</label>
								</div>

								<div class="subblock">
									<?php
										if($this->AccountsModel->getGenderByUsername($this->input->get('uname')) == 1)
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
									<input type="text" value=<?php $this->AccountsModel->getSpouseByUsername($this->input->get('uname')); ?> placeholder="Spouse Name" class="spousename" name="txtSpouse">
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<input type="text" value=<?php $this->AccountsModel->getContactByUsername($this->input->get('uname')); ?> placeholder="Contact No.*" name="txtContact" required>
								</div>

								<div class="subblock">
									<input type="email" value=<?php $this->AccountsModel->getEmailByUsername($this->input->get('uname')); ?> placeholder="Email Address*" name="txtEmail" required>
								</div>
							</div>

							<div class="topblock">
								<div class="subblock">
									<button type="submit">Edit Account</button>
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