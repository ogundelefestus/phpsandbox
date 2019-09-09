<?php 
//Message var
$msg= "";
$msgClass= "";


//check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
	
	//echo "Submitted";
	$name =htmlspecialchars($_POST['name']);
	$email =htmlspecialchars($_POST['email']);
	$message =htmlspecialchars($_POST['message']);

	//check required field
	if (!empty($name) && !empty($email) && !empty($message) ) {

		if (filter_var($email,FILTER_VALIDATE_EMAIL)==false) {
			 $msg="please use a valid email";
              $msgClass="alert-danger";
		}else{

			//echo "Passed";
			//Recipient Email

			$toEmail='festusogundele9@gmail.com';
			$subject='Contact Request From'.$name;
			$body='<h2>Contact Request</h2>

			<h4>Name</h4><p>'.$name.'</p>
			<h4>email</h4><p>'.$email.'</p>
			<h4>message</h4><p>'.$message.'</p>

			';
			//Email header
			$headers= "MIME-Version: 1.0" ."\r\n";
			$headers.="Content-Type:text/html;charset=UTF-8" ."\r\n";
           //Additional Header
			$headers.="From:" .$name. "<".$email.">". "\r\n";

			if (mail($toEmail,$subject,$body,$headers)) {
				//Email Sent

				 $msg="Your email as been sent";
                $msgClass="alert-success";

				
			}else{

				 $msg="Your email was not sent";
                 $msgClass="alert-danger";
			}

		}
   

	   //echo "Passed";
	}else{
       $msg="please fill all fields";
       $msgClass="alert-danger";

	}
}


 ?>




<!Doctype html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-dark bg-dark">
		<div class="container">
			<div class="navbar-header">

      <a class="navbar-brand" href="index.php">My Website</a>

		</div>
		</div>

	</nav>

		<div class="container">
			<?php if ($msg !=''):?> 
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>
			<?php endif;?>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
           <div class="form-group">
            <label >Name</label>

            <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name'])? $name : ''; ?>">
           </div>
             <div class="form-group">
            <label >Email</label>

            <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email'])? $email : ''; ?>">
           </div>
             <div class="form-group">
            <label >Message</label>

            <textarea name="message" class="form-control"><?php echo isset($_POST['message'])? $message : ''; ?></textarea> 
           </div>
           <br>

           <button type="submit" name="submit" class="btn btn-primary">Submit</button> 

			</form>

		</div>


	

</body>
</html>