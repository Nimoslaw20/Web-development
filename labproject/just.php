<?php
//if ($_SERVER["REQUEST_METHOD"]== "POST")


if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$mail = $_POST["mail"];
	$gender = $_POST["gend"];
	$message = $_POST["message"];

    //if (preg_match('/^[A-Za-z0-9]+$'))
	echo "Form successfully submitted<br>";
	echo " The name of the student is ".$name."<br>";
	echo " The person's email is ".$mail."<br>";
	echo " The gender is ".$gender."<br>";
	echo " The message left was: ".$message."<br>";



}




?>
