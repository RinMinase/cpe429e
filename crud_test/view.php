

<html>
<head>
<title>The LIST</title>

</head>
<body>
	<center>

<div>
<div><a href="view.php" target="view_main">View List</a></div>
<div><a href="add.php" target="view_main">Add Data</a></div>
</div><br><br>


	<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("crud_sample",$con);

// if the link Edit will click this is the code will executed
if(isset($_GET['id_edit'])){
	$id = $_GET['id_edit'];
	// syntax for SQL SELECT statement
	$query_edit="SELECT * FROM exercise WHERE id = '$id'";
	$result_edit = mysql_query($query_edit);
	//fetching all data from database tables to put in respective variables.
	while($row_edit = mysql_fetch_array($result_edit)){

	$fname = $row_edit[1];
	$age = $row_edit[2];
	$address = $row_edit[3];
	$contact = $row_edit[4];
	$gender = $row_edit[5];
	}

	// if the button update will click this is the code will executed
	if(isset($_POST['update'])){
		if(!empty($_POST['fullname']) && !empty($_POST['age']) && !empty($_POST['address'])){
			$fname1 = $_POST['fullname'];
			$age1 = $_POST['age'];
			$address1=$_POST['address'];
			$contact1=$_POST['contactdetails'];
			$gender1 = $_POST['gender'];
			// syntax for SQL UPDATE statement
			$query = "UPDATE exercise SET fullname='$fname1', age='$age1', address='$address1',contactdetails='$contact1', gender='$gender1' WHERE id = {$id}";
			$result = mysql_query($query);
			if($result){
				$msg = " Successfully Update the record number $id";
				$fname = "";
				$age = "";
				$address = "";
				$contact = "";
				$gender = "";
			}

		}else{
			$msg= " All fields are required!";
		}
	}

?>
<form method="POST">
	<h5><?php if(isset($msg)){ echo "<font color = 'RED' >$msg</font>"; }else { }?></h5>
	<table>
	<tr>
	<td>Full Name</td>
	<td>  <input type="text" name="fullname" value="<?php echo $fname;?>"></td>
	</tr>
	<tr>
	<td>Age</td>
	<td>  <input type="text" name="age" value="<?php echo $age;?>"></td>
	</tr>
	<tr>
	<td>Address</td>
	<td>  <input type="text" name="address" value="<?php echo $address;?>"></td>
	</tr>
	<tr>
	<td>Contact Details</td>
	<td>  <input type="text" name="contactdetails" value="<?php echo $contact;?>"></td>
	</tr>
	<tr>
	<td>Gender</td>
	<td>  <select name="gender">
	<option>Male</option>
	<option <?php if($gender =="Female") echo "selected";?>>Female</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
	</tr>
	</table>
</form>

<?php
}
// if the link Delete will click this is the code will executed
if(isset($_GET['id_delete'])){
$id = $_GET['id_delete'];
$query_delete = "DELETE FROM exercise WHERE id = {$id}";
$result_delete = mysql_query($query_delete);
if($result_delete){
echo "ID number : <font color='RED'><b>$id</b></font> Successfully Deleted From DATABASE";
}
}

$table = "<table border=1px; style='padding:2px;'>
<tr>
<td>ID</td>
<td>Full Name</td>
<td>Age</td>
<td>Address</td>
<td>Contact</td>
<td>Gender</td>
<td>Action</td>
</tr>";

$query = "SELECT * FROM exercise";
$result = mysql_query($query);
$number_rows = mysql_num_rows($result);

// check if the number of rows is greater than 1 or equal. If so, the value from database will fecth and displayed
if($number_rows >= 1){
// fetch all data from database
while($row = mysql_fetch_array($result)){

// Display all data to the table
$table.="<tr>
<td>".$row[0]."</td>
<td>".$row[1]."</td>
<td>".$row[2]."</td>
<td>".$row[3]."</td>
<td>".$row[4]."</td>
<td>".$row[5]."</td>
<td><a href='?id_edit=".$row[0]."'>Edit</a> <a href='?id_delete=".$row[0]."'>Delete</a></td>
</tr>";

}
$table.="</table>";
}else{
$table.="<tr><td colspan='6' align='center'>No Data</td></tr></table>";
}

echo $table;
?>
</body>
</html>