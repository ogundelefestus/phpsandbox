<?php

//check for postdata
/*if (filter_has_var(INPUT_POST, 'data')) {
	
	echo "Data Fund";
}

else{

	echo "No Data Fund";

}
if (filter_has_var(INPUT_POST, 'data')) {
	$email= $_POST['data'];

	Remove illegal char from email
	$email= filter_var($email, FILTER_SANITIZE_EMAIL);

	echo $email.'<br>';


	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Email Is Valid";
	}else {

		echo "Email Is NOT valid";
	}
	
	
}


#FILTER_VALIDATE_BOOLEAN
#FILTER_VALIDATE_EMAIL
#FILTER_VALIDATE_FLOAT
#FILTER_VALIDATE_INT
#FILTER_VALIDATE_IP
#FILTER_VALIDATE_REGEXP
#FILTER_VALIDATE_URL

#FILTER_SANITIZE_EMAIL
#FILTER_SANITIZE_ENCODED
#FILTER_SANITIZE_NUMBER_FLOAT
#FILTER_SANITIZE_NUMBER_INT
#FILTER_SANITIZE_SPECIAL_CHARS
#FILTER_SANITIZE_STRING
#FILTER_SANITIZE_URL

$var='hhhh';
if (filter_var($var,FILTER_VALIDATE_INT)) {
	echo $var.'is a number';
}else{
	echo $var. 'is not a number';
}

$var= "5555k5l5l";

var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));*/
$var= "<script>alert(1)</script>";
//echo $var;

echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);








?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> ">
	<input type="text" name="data">
	<button type="submit" >Submit</button>
	
</form>