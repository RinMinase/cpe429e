<?php
	@mysql_connect("localhost", "root", "")or die("could not connect to mysql");
	@mysql_select_db("cpe429db")or die("no database");

	if (!empty($_REQUEST['loginUsername']) &&
		!empty($_REQUEST['loginPassword']) ) {

		$lUsername = $_GET['loginUsername'];
		$lPassword = $_GET['loginPassword'];

		$sql = "SELECT * FROM users WHERE username='$lUsername' AND password='$lPassword';"
		$result = mysql_query($sql);

		if($result != "" || !is_null($result)) {
			//session_start($username . $password);
		}
	}
?>