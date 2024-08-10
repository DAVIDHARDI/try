<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROJECT</title
</head>
<body>
<center>
	<br><br><br><br><br><div class="container">
		<form  	action="reg.php" method="post">
			<h1 style="color:white">REGISTRATION FORM</h1><hr>
			<input type="text" name="username" placeholder="Username" required ><br><br>
			<input type="email" name="email" placeholder="email" required ><br><br>
			<input type="text" name="sudent_id" placeholder="Student ID" required ><br><br>
			<input type="password" name="password" placeholder="password" required ><br><br>
			<input type="password" name="cpassword" placeholder="Confirm password" required><br><br>
			<input type="submit" name="submit" value="submit" class="ok">
			<a href="login.php" style="color:white;">LOGIN</a>
		</form>
	</div>
	</center>
	<style>
		.container{
			background-color: blueviolet;
			width: 400px;
			padding: 40px;
			box-shadow: 10px 10px 10px;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
		}
		input{
			padding: 15px;
			width: 300px;
		}
		.ok{
			width: 100px;
			color: brown;
			background-color: pink;
		}
		.ok:hover{
			background-color: green;
			color:white;
			padding: 25px;
		}
	</style>

</body>
</html>