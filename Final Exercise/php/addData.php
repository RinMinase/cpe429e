<?php
	@mysql_connect("localhost", "root", "")or die("could not connect to mysql");
	@mysql_select_db("cpe429db")or die("no database");
	
	if (!empty($_REQUEST['txtUsername']) &&
		!empty($_REQUEST['txtPassword']) &&
		!empty($_REQUEST['txtRepeatPassword']) &&
		!empty($_REQUEST['txtFName']) &&
		!empty($_REQUEST['txtLName']) &&
		!empty($_REQUEST['dateBirthday']) &&
		!empty($_REQUEST['txtContact']) &&
		!empty($_REQUEST['txtEmail']) ) {

		$username = $_GET['txtUsername'];
		$password = $_GET['txtPassword'];
		$repeatPassword = $_GET['txtRepeatPassword'];

		if($password == $repeatPassword) {
			$fName = $_GET['txtFName'];
			$mName = $_GET['txtMName'];
			$lName = $_GET['txtLName'];

			$birthday = $_GET['dateBirthday'];
			$tmp_gender = $_GET['gender'];

			if ($tmp_gender == "Male") {
				$gender = 0;
			} else {
				$gender = 1;
			}

			$civilstatus = $_GET['civilstatus'];
			$spouse = $_GET['txtSpouse'];

			$contact = $_GET['txtContact'];
			$email = $_GET['txtEmail'];

			$sql = "INSERT INTO users (id, username, password, firstname, middlename, lastname, birthday, gender, status, spouse, contact, email) VALUES (NULL, '$username', '$password', '$fName', '$mName', '$lName', '$birthday', '$gender', '$civilstatus', '$spouse', '$contact', '$email');";
			$result = mysql_query($sql);
			// $id = mysql_insert_id();

			header("location: ../pages/registration.php#loginbox");
		} else {
			header("location: ../pages/registration.php");
		}
	} else {
		header("location: ../pages/registration.php");
	}

	
?>