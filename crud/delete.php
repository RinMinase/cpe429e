<?php
$name = $_GET['name'];
$age = $_GET['age'];
$cnum = $_GET['cnum'];
$vid = $_GET['vid'];
?>

<html>
<head>
<title>Bye Bye</title>
<STYLE type = "text/css">
body
{
background-color: black;
color: #efefef;
}

		a:link {color:#484646;}    /* unvisited link */
  		a:visited {color:white;} /* visited link */
  		a:hover {color: #FF8F00;}   /* mouse over link */
 	   	a:active {color:#266A2E;}  /* selected link */
		a:link {text-decoration:none;}
		a:visited {text-decoration:none;}
		a:hover {text-decoration:none;}
		a:active {text-decoration:none;}
</style>
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