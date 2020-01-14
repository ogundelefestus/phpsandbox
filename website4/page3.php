<?php
  session_start();
  print_r($_SESSION);

$name = isset($_SESSION['name']) ? $_SESSION['name'] :'Guest';
$email = isset($_SESSION['email']) ? $_SESSION['email'] :'Guest';

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP sessions</title>
 </head>
 <body>
 	<h1> Hello<?php echo $name; ?></h1>
 
 </body>
 </html>