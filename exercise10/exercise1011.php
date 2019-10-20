<?php
session_start();

$userinfo = array(
                'admin'=>'password1',
                'trixie'=>'password2'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        //Invalid Login
    }
}
?>

<html>
    <head>
        <title>Login</title>
        <link rel = "stylesheet" href = "style1011.css" type = "text/css" >
    </head>
    <center>
    <body>
        <div id="three">
        <?php if($_SESSION['username']): ?>
            <p>You are logged in as <?=$_SESSION['username']?></p>
            <p><a href="?logout=1">Logout</a></p>
        <?php endif; ?>
  
        <form name="login" action="" method="post">
           <div id="one"> Username:  <input type="text" name="username" value="" /></div><br />
           <div id="one"> Password:  <input type="password" name="password" value="" /></div><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
    </body>
</html>