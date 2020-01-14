<?php

//create connection
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//check connnection
if (mysqli_connect_errno()) {
	//Connection Failed
	echo 'failed to connect to mySQL'.mysqli_connect_errno(); 
}