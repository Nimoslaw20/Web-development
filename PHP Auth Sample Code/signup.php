<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="UTF-8"> 
	 
	<link rel="stylesheet" href="./css/bootstrap.css"> 
	<link rel="stylesheet" href="./css/loginstyle.css">
	
	
</head>


<body>

 <?php 
	require_once("./controller/processRegistration.php"); ?>
	<div class="container">  
		<p><?php signupstatus(); ?></p>
		<form id="contact" action="" method="post">
			<center><h2>Create User Account</h2></center>
			<!--########### FIRST NAME #################-->
			<fieldset>
				<input placeholder="User name" type="text" name="uname" value= "" required>
				<span style="color: red"></span>
				<!--javascript validation error message-->
				<span id="fnameError" style="color: blue"></span>
				<!-- <?php //if(isset($GLOBALS['nameError'])){ echo $GLOBALS['nameError']; }?> -->
			</fieldset>

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
				<button name="register" type="submit" id="registerSubmit" data-submit="...Sending">Submit</button>
			</fieldset>
			<center><p><a href="login.php">Already Registered? Login</a></center>
		</form>
		
	</div>
<script type="text/javascript" src="./js/validation.js"></script>
</body>
	
</html>