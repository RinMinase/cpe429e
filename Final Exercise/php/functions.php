<?php

// session_start();

function connect_db() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cpe429db";

	// Create connection
	return new mysqli($servername, $username, $password, $dbname);
}

// function checkLoginDetails($username, $password) {
// 	$conn = connect_db();

// 	// Check connection
// 	if ($conn -> connection_error) {
// 		die("Connection failed: " . $conn -> connection_error);
// 	}

// 	$sql = "SELECT * FROM $table";
// 	$result = $conn -> query($sql);

// 	if ($result -> num_rows > 0) {
// 		$i = 0;
// 	}
// }

function addData($username, $password, $firstname, $middlename, $lastname, $birthday, $gender, $civilstatus, $spousename, $contact, $email) {

	$sql = "INSERT INTO users VALUES (NULL, '$username', '$password');";
	$result = mysql_query($sql);
	$id = mysql_insert_id();

	header("location: registration.php");
}



?>