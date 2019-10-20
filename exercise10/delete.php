<?php
$name = $_GET['name'];
$age = $_GET['age'];
$cnum = $_GET['cnum'];
$vid = $_GET['vid'];
?>

<html>
<head>
<title>Bye Bye</title>

</head>
<body>
<?php

		@ $db = new mysqli('localhost', 'root', '', 'victims');

		if(mysqli_connect_errno())
		{
			echo 'Error: could not connect to database. Please try again later.';
			exit;
		}

		$sql = "Delete from victims where vid = '$vid';";
		$db->query($sql);
		echo '<center>';
		echo "The victim has been Extermianted!";
		echo '<br>';
		echo "Click OK to return to main page";
		echo '<br>';

		$db->close();
?>
<form action = "main.html">
<input type = "submit" value = "OK">
</form>
</body>
</html>