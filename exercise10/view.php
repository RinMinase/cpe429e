<html>
<head>
<title>The LIST</title>

</head>
<body>
<?php

		@ $db = new mysqli('localhost', 'root', '', 'victims');

		if(mysqli_connect_errno())
		{
			echo 'Error: could not connect to database. Please try again later.';
			exit;
		}
		$sql = "select * from victims";
		$result = $db->query($sql);

		$num_results = $result->num_rows;
		echo '<center>';
		echo '<h1>';	
		echo "The Vcitims are as follow:";
		echo '</h1>';
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

?>
<form action = "main.html">
<p>click Ok to Return to the main Page</p>
<input type = "submit" value = "ok">
</form>
</body>
</html>