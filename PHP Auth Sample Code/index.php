<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8"> 
	 
	<link rel="stylesheet" href="./css/bootstrap.css"> 
	<link rel="stylesheet" href="./css/loginstyle.css">
	
	
</head>


<body>

<?php 
	require_once("./auth/auth.php"); ?>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">CS341 Lab</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Page 1</a></li>
	      <li><a href="#">Page 2</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="logout.php">Logout</a></li>
	    </ul>
	  </div>
	</nav>

	<div class="container">  
		<center><h1>Welcome <?php getUsername();?></h1></center>
	</div>
</body>
	
</html>