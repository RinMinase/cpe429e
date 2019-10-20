<?php
$name = $_GET['name'];
$age = $_GET['age'];
$cnum = $_GET['cnum'];
$vid = $_GET['vid'];
?>

<html>
<body>
<form action = "update.php" method = "post">
<center>
<strong>Enter the details asked!</strong>
<br>
<br>
Full Name:
<br>
<input type = "text" name = "name" value = "<?php echo $name;?>">
<br>
Age:
<br>
<input type = "number" name = "age" value = "<?php echo $age;?>">
<br>
Contact #:
<br>
<input type = "number" name = "cnum" value = "<?php echo $cnum;?>">
<br>
Victim ID #:
<input type = "hidden" name = "vid" value = "<?php echo $vid; ?>"><?php echo $vid; ?>
<br>
<br>
<input type = "submit" value = "Submit">
</center>
</form>


</body>
</html>