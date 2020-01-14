<?php


if (isset($_POST['submit'])) {

    $username = htmlentities($_POST['username']);
	setcookie('username',$username,time()+3600);
	//1Hour

	header('location:page2.php'); 
}

?>











<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <input type="text" name="username"  placeholder="enterusername"/>
 
    <input type="submit" name="submit" value="submit">

	</form>
</body>
</html>
