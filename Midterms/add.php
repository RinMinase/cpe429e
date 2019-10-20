<?php include "./php/db_conn.php" ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Add</title>

	<style type="text/css">
		h1 {
			width: 380px !important;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>Add Account</h1>
	</div>

	<form action="./php/add.php" method="get">
		<table>
			<tbody>
				<tr>
					<td>
						<label for="acctNo">Account Number:</label>
					</td>
					<td>
						<input name="acctNo" />
					</td>
				</tr>

				<tr>
					<td>
						<label for="acctName">Account Name:</label>
					</td>
					<td>
						<input name="acctName" />
					</td>
				</tr>

				<tr>
					<td>
						<label for="pinNo">PIN Number:</label>
					</td>
					<td>
						<input name="pinNo" />
					</td>
				</tr>

				<tr>
					<td>
						<label for="confirmPIN">Confirm PIN:</label>
					</td>
					<td>
						<input name="confirmPIN" />
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<button type="submit">Add Account</button>
					</td>
				</tr>
			</tbody>
		</table>		
	</form>
</body>
</html>