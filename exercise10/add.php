<?php
$name = $_POST['name'];
$age = $_POST['age'];
$cnum = $_POST['cnum'];
$vid = null;
?>

<html>
<head>

</head>
<body>
<center>
<?php
		if($name != null && $age != null && $number != null && $address != null)
		{
		@ $db = new mysqli('localhost', 'root', '', 'victims');

		if(mysqli_connect_errno())
		{
			echo 'Error: could not connect to database. Please try again later.';
			exit;
		}

		$sql = "insert into victims (name, age, number, address)values ('".$name."', '".$age."', '".$number."', '".$address."')";
		$db->query($sql);
		echo '<center>';
		echo "Successfully registered!";
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