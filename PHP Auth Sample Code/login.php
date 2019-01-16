<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8"> 
	 
	<link rel="stylesheet" href="./css/bootstrap.css"> 
	<link rel="stylesheet" href="./css/loginstyle.css">
	
	
</head>


<body>

<?php 
	require_once("./controller/processRegistration.php"); ?> 
	<div class="container">  
		<form id="contact" action="" method="post">
			<center><h2>Login</h2></center>
			
			<!--########### EMAIL #################-->
			<fieldset>
				<input placeholder="Email" type="email" name="email" value= "" required>
				<span style="color: red"></span>
				<!--javascript validation error message-->
				<span id="emailError" style="color: blue"></span>
			</fieldset>
			
             
             <!--########### PASSWORD #################-->
			<fieldset>
				<input placeholder="Password" type="password" name="pword" required>
				<span style="color: red"></span>	
				<!--javascript validation error message-->
				<span id="pwordError" style="color: blue"></span>
			</fieldset>

			

			
             <!--########### REGISTER BUTTON #################-->
			<fieldset>
				<button name="loginBtn" type="submit">Login</button>
			</fieldset>
			<center><p><a href="signup.php">New Here? Register</a></center>
			<span style="color: red"> <?php if(isset($GLOBALS['loginError'])){ echo $GLOBALS['loginError']; }?></span>
		</form>
		
	</div>
</body>
	
</html>