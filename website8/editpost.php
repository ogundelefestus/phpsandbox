<?php
require('config/config.php');
require('config/db.php');

//check for submit
if(isset($_POST['submit'])){



    $update_id=mysqli_real_escape_string($conn, $_POST['update_id']);
	$title=mysqli_real_escape_string($conn, $_POST['title']);
	$body=mysqli_real_escape_string($conn, $_POST['body']);
	$author=mysqli_real_escape_string($conn, $_POST['author']);



	$query= "UPDATE posts SET    
                 title='$title',
                 author='$author',
                 body='$body'
                 WHERE id={$update_id}
	                ";

	if (mysqli_query($conn, $query)) {

		header('location:'.ROOT_URL.'');
		# code...
	}else{

		echo 'ERROR: '.mysqli_error($conn);
	}
}

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
	<h1>AddPost</h1>

	<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">


<input type="text" name="title" placeholder="title" value="<?php echo $post['title']?>"><br>

<input type="text" name="author" placeholder="author"  value="<?php echo $post['author']?>"><br>

<textarea name="body"><?php echo $post['body'];?></textarea>
<input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
<input type="submit" name="submit" value="submit">


	</form>


			

</div>

</body>
</html>



