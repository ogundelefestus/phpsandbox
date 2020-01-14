<?php

require('config/config.php');
require('config/db.php');

//get ID
$id =mysqli_real_escape_string($conn,$_GET['id']);
//create query
$query='SELECT * FROM posts WHERE id= '.$id;

//get result
$result=mysqli_query($conn,$query);

//Fetch Data
$post=mysqli_fetch_assoc($result);
//var_dump($posts);
//free result
mysqli_free_result($result);

//close connection

mysqli_close($conn); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>phpblog</title>
	<link rel="stylesheet" type="text/css" href="http://bootswatch.com/cerulean/bootstrap.min.css">
</head>
<body>


	
    <div class="container">
<a href="<?php echo ROOT_URL;?>">back</a>
			<h1><?php echo $post['title']; ?></h1>
			<small>Created on <?php echo $post['created_at'];?> by
				<?php echo $post['author'];?></small>
				<p><?php echo $post
				['body'];?></p>
				<hr>

				<a href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo $post['id']; ?>">Edit</a>
		</div>

</body>
</html>



