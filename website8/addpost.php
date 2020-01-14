<?php
require('config/config.php');
require('config/db.php');

//check for submit

if(isset($_POST['submit'])){


	$title=mysqli_real_escape_string($conn,$_POST['title']);

	$author=mysqli_real_escape_string($conn,$_POST['author']);

	$body=mysqli_real_escape_string($conn,$_POST['body']);

	$query= "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')
	                ";

	if (mysqli_query($conn,$query)) {

		header('location:'.ROOT_URL.'');
		# code...
	}else{

		echo 'ERROR: '.mysqli_error($conn);
	}
}

 

?>
<!DOCTYPE html>
<html>
<head>
	<title>phpblog</title>
	<link rel="stylesheet" type="text/css" href="http://bootswatch.com/cerulean/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1>AddPost</h1>

	<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">


<input type="text" name="title" placeholder="title"><br>

<input type="text" name="author" placeholder="author"><br>

<textarea name="body"></textarea>
<input type="submit" name="submit" value="submit">


	</form>


			

</div>

</body>
</html>



