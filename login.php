<?php

	// LOGIN.PHP
	$email_error = "";
	// echo $_POST["email"];

	// kontrollime, et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//echo "keegi vajutas nuppu";
		
		
		if(empty($_POST["email"]))  {
			$email_error = "See väli on kohustuslik";
			
			
		}
		
	}






?>
<html>
<head>
	<title>Facebook login page</title>
	<meta charset="UTF-8">
</head>
<body>
	<center>
		<h1>Logi sisse</h1>
			<form action="login.php" method="post">
				Kasutajanimi:<br>
				<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br>
				Parool:<br>
				<input name="password" type="password" placeholder="Parool"><br><br>
				<input type="submit" value="Logi sisse">
			</form>
	</center>
</body>
</html>