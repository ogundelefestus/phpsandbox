<?php if(isset($_GET['name'])){
	
    $name = htmlentities($_GET['name']);

    echo $name;
   // print_r($_GET);

}

/*if(isset($_POST['name'])){
	
    $name = htmlentities($_POST['name']);

    echo $name;
    print_r($_GET);

}

if(isset($_REQUEST['name'])){
	
    $name = htmlentities($_REQUEST['name']);

    echo $name;
    print_r($_GET);

}*/

//echo $_SERVER['QUERY_STRING'];

?>

<!Doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>

			<div>
			<label>Email</label><br>
			<input type="email" name="email">


		</div>
		<input type="submit" value="submit">

		


	</form>
<ul>
	
	<li>
		<a href="get_post.php?name=Brad">Brad</a>

	</li>

	<li>

    <a href="get_post.php?name=Steve">Steve</a>

	</li>
</ul>
<h1><?php echo"{$name}'s Profile"; ?></h1>


</body>
</html>