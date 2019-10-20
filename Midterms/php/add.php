<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "429e_mex";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$acctno = $_GET["acctNo"];
	$acctname = $_GET["acctName"];
	$pin = $_GET["pinNo"];
	$balance = 500;

	$sql = "INSERT INTO accounts (id, acctno, acctname, pin, balance) VALUES (NULL, $acctno, $acctname, $pin, $balance);";

	$result = mysqli_query($conn, $sql);

	echo $sql;
	echo $acctno;
	echo $acctname;
	echo $pin;
	echo $balance;

?>