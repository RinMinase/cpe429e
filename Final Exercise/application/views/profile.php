<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/style.css">

		<style type="text/css">
			p.center {
				text-align: center;
			}

			section.content {
				padding-top: 40px;
			}

			section.content h2, h3 {
				font-weight: normal;
				color: #4CAF50;
			}

			section.content img.profile-picture {
				width: 150px;
				height: 150px;
				border: 1px solid black;
				border-radius: 75px;
				background-image: url("<?php echo base_url() ?>resources/img/rin.jpg");
				background-size: 100%;

			}

			section.content div.topblock {
				width: 100%;
				overflow: hidden;
			}

			section.content div.topblock-subblock {
				float: left;
				display: block;
			}

			div.topblock-subblock p, h2 {
				margin-left: 15px;
			}

			div.topblock-subblock > p {
				margin-top: 5px;
			}

			div.topblock h2.name {
				font-size: 24px;
				margin-bottom: 10px;
			}

			div.topblock h2.topblock-header {
				font-size: 20px;
				/*text-decoration: underline;*/
			}

			div.topblock table {
				max-width: 100%;
				overflow: scroll;
			}

			div.topblock-subblock h2 {
				margin-top: 10px;
			}

			div.topblock > table {
				/*padding: 1px 10px 1px 18px;*/
				margin-left: 18px;
			}

			div.subblock {
				float: left;
				margin-left: 18px;
			}

			div.subblock > ul {
				list-style-type: none;
				padding-left: 0px;
			}

			table td.progressbar-location {
				padding: 0px;
			}

			table td.center {
				min-width: 25px;
				text-align: center;
			}

			table td.top {
				min-width: 50px;
				vertical-align: top;
			}

			ul.languages > li {
				margin-bottom: 3px;
				width: 205px;
			}

			ul.languages li > table.bar {
				float: right;
			}

			table.bar td {
				margin: 0px;
				padding: 0px;
				width: 20px !important;
				border: 1px solid black;
				/*min-width: 20px !important;*/
				height: 15px;
			}

			table.bar .active {
				background-color: #66BB6A;
			}



			table.progressbar td, tr, tbody {
				margin: 0px;
				padding: 0px;
				width: 20px !important;
				height: 15px;
			}

			table.progressbar td.progressbar-active {
				background-color: #66BB6A;
			}

			tr.programming-header td {
				padding-bottom: 14px;
			}

			/*div.topblock div.topblock-programming {
				overflow: scroll;
			}*/

			div.hobby-block {
				/*border: 1px solid black;*/
				float: left;
				display: block;
				overflow: hidden;
				margin-left: 15px;
				margin-bottom: 10px;
			}

			div.hobby-block div.hobby-subblock {
				position: relative;
				width: 240px;
				height: 135px;
				margin-right: 10px;
			}

			div.hobby-block p.hobby-block-heading {
				position: absolute;
				bottom: 0px;
				left: 0px;
				margin: 0px;
				padding: 5px;
				background-color: rgba(255, 255, 255, 0.7);
			}

			div.hobby-subblock img {
				width: 100%;
				height: 100%;
				background-size: 100%;
			}

			div.hobby-subblock img.anime {
				background-image: url("<?php echo base_url() ?>resources/img/anime.jpg");
			}

			div.hobby-subblock img.reading {
				background-image: url("<?php echo base_url() ?>resources/img/reading.jpg");
			}

			div.hobby-subblock img.tinkering {
				background-image: url("<?php echo base_url() ?>resources/img/tinkering.jpg");
			}

			div.hobby-subblock img.programming {
				background-image: url("<?php echo base_url() ?>resources/img/programming.jpg");
			}

			tr.row-educational-attainment td {
				padding-top: 15px;
			}
		</style>

		<title>Profile</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Author's Profile</h1>
			</header>

			<nav>
				<ul class="navbar">
					<li><?php echo anchor('', 'HOME')?></li>
					<li><a class="active">PROFILE</a></li>
					<li><?php echo anchor('sched', 'CLASS SCHEDULE')?></li>
					<li><?php echo anchor('registration', 'REGISTRATION')?></li>
					<li class="right"><a class="user" href="#loginbox"></a></li>
				</ul>
			</nav>

			<section class="body">
				<section class="content">
					<div class="topblock">
						<div class="topblock-subblock">
							<img class="profile-picture">
						</div>
						<div class="topblock-subblock">
							<h2 class="name">Kristian Daniel S. Alunan</h2>
							<p>
								L9 B1 PH3D Tierra Grande Estate<br>
								Lawaan, Talisay City, Cebu<br>
								0922 609 9643<br>
								kralunan@gmail.com
							</p>
						</div>
					</div>

					<div class="topblock">
						<h2 class="topblock-header">General Information</h2>
						<table>
							<tbody>
								<tr>
									<td>Date of Birth</td>
									<td class="center">:</td>
									<td>May 16, 1995</td>
								</tr>
								<tr>
									<td>Gender</td>
									<td class="center">:</td>
									<td>Male</td>
								</tr>
								<tr>
									<td>Civil Status</td>
									<td class="center">:</td>
									<td>Fated</td>
								</tr>
								<tr>
									<td>Languages Spoken</td>
									<td class="center">:</td>
									<td>English, Filipino, Japanese</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="topblock">
						<h2 class="topblock-header">Proramming</h2>

						<div class="subblock">
							<p class="center">Software Languages</p>
							<ul class="languages">
								<li>Visual Basic
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>C
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>C++
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>Java
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>MySQL
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
							</ul>
						</div>

						<div class="subblock">
							<p class="center">Web Languages</p>
							<ul class="languages">
								<li>HTML
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>CSS
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>JS
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>PHP
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
								<li>Python
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
							</ul>
						</div>

						<div class="subblock">
							<p class="center">Frameworks</p>
							<ul class="languages">
								<li>Bootstrap
									<table class="bar">
										<tr>
											<td class="active"></td>
											<td class="active"></td>
											<td class="active"></td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</li>
							</ul>
						</div>
					</div>

					<div class="topblock">
						<h2 class="topblock-header">Educational Attainment</h2>
						<table>
							<tbody>
								<tr class="row-educational-attainment">
									<td class="top" rowspan="3">Teritiary</td>
									<td class="center top" rowspan="3">:</td>
									<td>University of San Carlos - Talamban Campus</td>
								</tr>

								<tr>
									<td><small>BS in Computer Engineering</small></td>
								</tr>

								<tr>
									<td><small>June 2012 - Present</small></td>
								</tr>

								<tr class="row-educational-attainment">
									<td class="top" rowspan="2">Secondary</td>
									<td class="center top" rowspan="2">:</td>
									<td>Don Bosco Technology Center</td>
								</tr>

								<tr>
									<td><small>June 2008 - Mar 2012</small></td>
								</tr>

								<tr class="row-educational-attainment">
									<td class="top" rowspan="2">Primary</td>
									<td class="center top" rowspan="2">:</td>
									<td>Don Bosco Technology Center</td>
								</tr>
								<tr>
									<td><small>June 2002 - Mar 2008</small></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="topblock">
						<h2 class="topblock-header">Hobbies</h2>

						<div class="hobby-block">
							<div class="hobby-subblock">
								<img class="anime">
								<p class="hobby-block-heading">Anime</p>
							</div>

							<!-- <p>A little description below</p> -->
						</div>

						<div class="hobby-block">
							<div class="hobby-subblock">
								<img class="reading">
								<p class="hobby-block-heading">Reading</p>
							</div>

							<!-- <p>A little description below</p> -->
						</div>

						<div class="hobby-block">
							<div class="hobby-subblock">
								<img class="tinkering">
								<p class="hobby-block-heading">Tinkering</p>
							</div>

							<!-- <p>A little description below</p> -->
						</div>

						<div class="hobby-block">
							<div class="hobby-subblock">
								<img class="programming">
								<p class="hobby-block-heading">Programming</p>
							</div>

							<!-- <p>A little description below</p> -->
						</div>
					</div>
				</section>

				<?php $this->load->view('sidebar'); ?>
			</section>

			<?php $this->load->view('footer'); ?>
		</div>

		<?php $this->load->view('modal'); ?>
	</body>
</html>