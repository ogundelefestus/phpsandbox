<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script >
		fuction showSuggestion(str){

        if(str.length==0){

        	document.getElementById('output').innerHTML ='';
        }else{



        	//AJAX REQ
        }


		}
	</script>
</head>
<body>
	<div class="container">
		<h1>Search Users</h1>
		<form>
			Search User:<input type="text" class="form-control" onkeyup="showSuggestion(this.value">
		</form>
		<p>Suggestions:<span id="output" style="font-weight: bold;"></span></p>


		</form>
</div>
</body>
</html>