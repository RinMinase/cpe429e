<?php
$name = $_POST['name'];
$age = $_POST['age'];
$cnum = $_POST['cnum'];
$vid = null;
?>

<html>
<head>
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
<center>
<?php
		if($name != null && $age != null && $cnum != null)
		{
		@ $db = new mysqli('localhost', 'root', '', 'victims');

		if(mysqli_connect_errno())
		{
			echo 'Error: could not connect to database. Please try again later.';
			exit;
		}

		$sql = "insert into victims (name, age, cnum, vid)values ('".$name."', '".$age."', '".$cnum."', '".$vid."')";
		$db->query($sql);
		echo '<center>';
		echo "The new victim has been registered!";
		echo '<br>';
		echo "Click OK to return to main page";
		echo '<br>';

		$db->close();
		}
		else
		{
		echo "fill up the required BOXES";
		echo '<br>';
		echo "now click OK";
		}
?>
<form action = "main.html">
<input type = "submit" value = "OK">
</form>
</body>
</html>