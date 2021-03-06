<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/style.css">

		<style type="text/css">
			table.sched-table {
				margin-top: 20px;
				margin-bottom: 30px;
			}

			td {
				font-size: 14px;
				text-align: center;
			}

			td,
			th {
				min-width: 90px;
			}

			table.sched-legend td {
				padding: 1px 10px;
			}

			.s512 { background-color: #EF5350; }
			.s512L { background-color: #AB47BC; }
			.s513 { background-color: #03A9F4; }
			.s429E { background-color: #009688; }
			.sREED { background-color: #4CAF50; }
			.sECON { background-color: #FFA726; }
			.s51C { background-color: #3F51B5; }
			.sES24 { background-color: #CDDC39; }
			.sES25 { background-color: #8BC34A; }
			.s413N { background-color: #EC407A; }

			@media screen and (max-width: 730px) {
				table.sched-table {
					visibility: hidden;
					display: none;
					height: 0px !important;
				}

				p.sched-table-hidden {
					/*display: */
					/*visibility: visible;*/
				}
			}

			@media screen and (min-width: 730px) {
				table.sched-table {
					/*visibility: visible;*/
				}

				p.sched-table-hidden {
					height: 0px;
					margin: 0px;
					/*visibility: hidden;*/
					display: none;
				}
			}

			table.sched-legend {
				max-width: 100%
			}

			table.sched-legend td.centered {
				text-align: center;
				min-width: 10px !important;
				padding: 0px;
			}

			table.sched-legend td:not(.centered) {
				padding: 5px 15px;
				text-align: left;
			}

			p.sched-table-hidden {
				margin-top: 200px;
				margin-bottom: 200px;
				text-align: center;
			}
		</style>

		<title>Schedule</title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Author's Class Schedule</h1>
			</header>

			<nav>
				<ul class="navbar">
					<li><?php echo anchor('', 'HOME')?></li>
					<li><?php echo anchor('profile', 'PROFILE')?></li>
					<li><a class="active">CLASS SCHEDULE</a></li>
					<li><?php echo anchor('registration', 'REGISTRATION')?></li>
					<li class="right"><a class="user" href="#loginbox"></a></li>
				</ul>
			</nav>

			<section class="body">
				<section class="content">
					<p class="sched-table-hidden">Your screen is too small to view my schedule.<br><br><strong>Seriously, buy a new phone.</strong><br><br><br><br>Otherwise, transfer to a laptop with a bigger screen.</p>
					<table class="sched-table" border="1">
						<thead>
							<tr>
								<th>Time</th>
								<th>Monday</th>
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thursday</th>
								<th>Friday</th>
								<th>Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>07:30-08:00</td>
								<td></td>
								<td rowspan="6" class="s512L">COME 512L<br>LB286TC</td>
								<td></td>
								<td></td>
								<td></td>
								<td rowspan="6" class="s429E">COME 429E<br>CNLAB</td>
							</tr>
							<tr>
								<td>08:00-08:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>08:30-09:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							<tr>
								<td>09:00-09:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr>
								<td>09:30-10:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>10:00-10:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>10:30-11:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td rowspan="2" class="s513">COME 513<br>LB264TC</td>
							</tr>
							<tr>
								<td>11:00-11:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:30-12:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>12:00-12:30</td>
								<td rowspan="3" class="sREED">REED 30N<br>LB266TC</td>
								<td rowspan="3" class="sECON">ECON 1N<br>LB267TC</td>
								<td rowspan="3" class="sREED">REED 30N<br>LB266TC</td>
								<td rowspan="3" class="sECON">ECON 1N<br>LB267TC</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>12:30-13:00</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>13:00-13:30</td>
								<td></td>
								<td></td>				
							</tr>
							<tr>
								<td>13:30-14:00</td>
								<td rowspan="3" class="s512">COME 512<br>LB266TC</td>
								<td rowspan="3" class="s51C">COME 51C<br>LB266TC</td>
								<td rowspan="3" class="s512">COME 512<br>LB266TC</td>
								<td rowspan="3" class="s51C">COME 51C<br>LB266TC</td>
								<td></td>
								<td rowspan="6" class="s413N">COME 413N<br>LB264TC</td>
							</tr>
							<tr>
								<td>14:00-14:30</td>
								<td></td>
							</tr>
							<tr>
								<td>14:30-15:00</td>
								<td></td>
							</tr>
							<tr>
								<td>15:00-15:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>15:30-16:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>16:00-16:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>16:30-17:00</td>
								<td rowspan="3" class="sES24">ES 24<br>LB265TC</td>
								<td rowspan="3" class="sES25">ES 25<br>LB265TC</td>
								<td rowspan="3" class="sES24">ES 24<br>LB265TC</td>
								<td rowspan="3" class="sES25">ES 25<br>LB265TC</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>17:00-17:30</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>17:30-18:00</td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

					<p>
						<strong>Legend:</strong>
					</p>

					<table class="sched-legend">
						<tbody>
							<tr>
								<td>COME 413N</td>
								<td class="centered">:</td>
								<td>Electromagnetics for Computer Engineering</td>
							</tr>
							<tr>
								<td>COME 429E</td>
								<td class="centered">:</td>
								<td>Web Design and Programming I</td>
							</tr>
							<tr>
								<td>COME 512</td>
								<td class="centered">:</td>
								<td>Digital Systems and Design</td>
							</tr>
							<tr>
								<td>COME 512L</td>
								<td class="centered">:</td>
								<td>Digital Systems and Design Laboratory</td>
							</tr>
							<tr>
								<td>COME 513</td>
								<td class="centered">:</td>
								<td>Design Project Proposal</td>
							</tr>
							<tr>
								<td>COME 51C</td>
								<td class="centered">:</td>
								<td>Software Engineering</td>
							</tr>
							<tr>
								<td>ECON 1N</td>
								<td class="centered">:</td>
								<td>Principles of Economics</td>
							</tr>
							<tr>
								<td>ES 24</td>
								<td class="centered">:</td>
								<td>Probability and Statistics</td>
							</tr>
							<tr>
								<td>ES 25</td>
								<td class="centered">:</td>
								<td>Engineering Economics</td>
							</tr>
							<tr>
								<td>REED 30N</td>
								<td class="centered">:</td>
								<td>Witness to the Word</td>
							</tr>
						</tbody>
					</table>
				</section>

				<?php $this->load->view('sidebar'); ?>
			</section>

			<?php $this->load->view('footer'); ?>
		</div>

		<?php $this->load->view('modal'); ?>
	</body>
</html>