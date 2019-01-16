<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body{
			font-family:"poor richard";
			font-size: 20px;
		}
	</style>
</head>

<body>
	<script>
		function validate(){
			if (document.getElementById("name").value=="") {
				alert("Please fill in the username field");
				return false;
			} 
			if (document.getElementById("password").value=="") {
				alert("Please fill out the password field");
				return false;
			}else{
				return true;
			}
		}
		
	</script>
	<?php 
		if (isset($_GET["error"])) {
			echo "<h1>".$_GET['error']."</h1>";
		}
	 ?>
	<form method="POST" action="login.php" onsubmit="return validate()">
		<div>Username: <input id="name" type="text" name="username" placeholder="username" ></div>
		<div>Password: <input id="password" type="password" name="password" placeholder="password"></div>
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>