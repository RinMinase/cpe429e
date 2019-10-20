<html>
<head>
<title>Next</title>
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
$name = $_POST['name'];
		
		if($name != null)
		{
		@ $db = new mysqli('localhost', 'root', '', 'victims');

		if(mysqli_connect_errno())
		{
			echo 'Error: could not connect to database. Please try again later.';
			exit;
		}
		$sql = "select * from victims where name = '".$name."'";
		$result = $db->query($sql);

		$num_results = $result->num_rows;
		for ($i=0; $i < $num_results; $i++)
		{
		$row = $result->fetch_assoc();
		echo '<center>';
		echo '<br>';
		echo "Name:  ";
		echo $row['name'];
		$name = $row['name'];
		echo '<br>';
		echo "Age:   ";
		echo $row['age'];
		$age = $row['age'];
		echo '<br>';
		echo "Contact #: ";
		echo $row['cnum'];
		$cnum = $row['cnum'];
		echo '<br>';
		echo "Victim ID no.";
		echo $row['vid'];
		$vid = $row['vid'];
		echo '<br>';
		echo '<a href="edit.php?name='.$name.'&age='.$age.'&cnum='.$cnum.'&vid='.$vid.'">Edit</a>';
		echo '<br>';
		echo '<a href="delete.php?vid='.$vid.'">Delete</a>';
		echo '<br>'; 
		echo "---------------";	
		echo '<br>';
		}
		
		$db->close();
		}
		else
		{
		echo "Enter the victim's name";
		echo '<br>';
		echo '<a href = "main.html">now click me</a>';
		}

?>
<form action = "main.html">
<p>click ok to Return to the main Page</p>
<input type = "submit" value = "Ok">
</form>
</body>
</html>