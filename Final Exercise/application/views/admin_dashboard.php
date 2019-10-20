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

		<style type="text/css">
			table {
				border-collapse: collapse;
				font-size: 12px;
			}

			td, th {
				padding: 2px 4px;
				text-align: center;
			}

			tbody > tr > td > button {
				width: 50px;
				font-size: 12px;
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
					<h2>User account</h2>
					
					<table border=1>
						<thead>
							<tr>
								<th>Username</th>
								<th>Password</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>Birthday</th>
								<th>Gender</th>
								<th>Status</th>
								<th>Spouse</th>
								<th>Contact</th>
								<th>Email</th>
								<th colspan="2">Options</th>
							</tr>
						</thead>
						<tbody>
							<?php $this->AccountsModel->printUsers() ?>
						</tbody>
					</table>
				<!-- </section> -->

				<?php //$this->load->view('sidebar'); ?>
			</section>

			<?php $this->load->view('footer'); ?>
		</div>
	</body>
</html>