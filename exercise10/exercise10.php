	<?php
		session_start();
		$_SESSION['uname'] = '';
		$user = array(
						'admin'=>'123456'
						);

		if(isset($_GET['logout'])) {
			$_SESSION['uname'] = '';
			header('Location:  ' . $_SERVER['PHP_SELF']);
		}

		if(isset($_POST['uname'])) {
			if($user[$_POST['uname']] == $_POST['pword']) {
				$_SESSION['uname'] = $_POST['uname'];
			}else {
				echo "INVALID INPUT";
				session_destroy();
			}
		}
	?>
<html>
    <head>
        <title>Login</title>
        <link rel = "stylesheet" href = "mystyle.css" type = "text/css" >
    </head>
    <body>
	<div>
        <form name="login" action="" method="post">
           <div> USERNAME:  <input type="text" name="uname" value="" /></div><br />
           <div> PASSWORD:  <input type="password" name="pword" value="" /></div><br />
            <input type="submit" name="submit" value="Submit" />
			
        </form>
		<?php if($_SESSION['uname']): ?>
            <p>You have successfully logged in</p>
            <p><a href="?logout=1">LOGOUT</a></p>
        <?php endif; ?>
		
    </div>
    </body>
</html>