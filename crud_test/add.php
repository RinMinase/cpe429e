<?php
$con = mysql_connect("localhost","root",""); //Database Initialization and Connection properties
mysql_select_db("crud_sample",$con); //Database Initialization and Connection properties

// If Button Save was click this is the code will executed
if(isset($_POST['save'])){
	// check fields for wheither not empty or empty
	if(!empty($_POST['fullname']) && !empty($_POST['age']) && !empty($_POST['address'])){

		// initialize the variable to be the value of the textbox
		$fname = $_POST['fullname'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$contact = $_POST['contactdetails'];
		$gender = $_POST['gender'];

		//Sql syntax for INSERT Statement
		$query = "INSERT INTO exercise (fullname,age,address,contactdetails,gender) values ('".$fname."','".$age."','".$address."','".$contact."','".$gender."')";
		$result = mysql_query($query);
		if($result){
			$msg = " Successfully Save New Data";
		}

	}else{
		$msg= " All fields are required!";
	}
}
?>

<html>
<head>

</head>
<body>
<center>

<div>
<div><a href="view.php" target="view_main">View List</a></div>
<div><a href="add.php" target="view_main">Add Data</a></div>
</div><br><br>

	<form method="POST">
	<h5><?php if(isset($msg)){ echo "<font color = 'RED' >$msg</font>"; }else { }?></h5>
	<table>
	<tr>
	<td>Full Name</td>
	<td><input type="text" name="fullname"></td>
	</tr>
	<tr>
	<td>Age</td>
	<td><input type="text" name="age"></td>
	</tr>
	<tr>
	<td>Address</td>
	<td><input type="text" name="address"></td>
	</tr>
	<tr>
	<td>Contact Details</td>
	<td><input type="text" name="contactdetails"></td>
	</tr>
	<tr>
	<td>Gender</td>
	<td><select name="gender">
	<option>Male</option>
	<option>Female</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="save" value="Save"></td>
	</tr>
	</table>
	</form>
</body>
</html>