<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "429e_mex";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT balance FROM accounts WHERE id=0";
	
	$result = mysqli_query($conn, $sql);
	$balance = $result->fetch_assoc();

	echo $balance['balance'];
?>