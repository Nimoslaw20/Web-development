<?php

	$servername = "localhost";
    $username = "nicholas_quansah";
    $password = "nicholas_quansah";
    $dbname = "nicholas_quansah";
    include ("edit2.html");
    $status = "";

    echo $_POST["status"];

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    	$status = $_POST["status"];
    	echo "working";
    }else{
    	echo "not working";
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	
    $query = "UPDATE user SET status=$status, City='Frankfurt' WHERE CustomerID=1";

?>

