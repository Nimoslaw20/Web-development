<?php 

session_start();

//if there is no session for this user, redirect to login page
if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
	header("location:login.php");
}

//this function gets the username of the logged in user
function getUsername(){
	echo isset($_SESSION['username']) ? $_SESSION['username'] : "No User";
}
 
?>
