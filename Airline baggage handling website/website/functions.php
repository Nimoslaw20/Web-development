<?php 

	$servername = "localhost";
    $username = "nicholas_quansah";
    $password = "nicholas_quansah";
    $dbname = "nicholas_quansah";

    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	

	if(isset($_GET['insert'])){
		
		$firstname =$_GET['firstname'];
		$last =$_GET['last'];
		$phone =$_GET['phone'];
		$bagnum =$_GET['baggage'];
		$email =$_GET['email'];
		$station =$_GET['station'];
		$gender =$_GET['gender'];
		$destination =$_GET['destination'];
		$bagstatus =$_GET['status'];
		$date =$_GET['bdaytime'];
		$comments=$_GET['comments'];
		$airline=$_GET['airline'];


		$sql = "insert into users(firstname,lastname,gender, email, phonenumber,status, current_station, destination, mydate,comments, baggage,airline) values ('$firstname','$last','$gender','$email','$phone','$bagstatus','$station','$destination','$date', '$comments','$bagnum', '$airline')";
		
if ($conn->query($sql) === TRUE) {
	echo '<script language="javascript">';
	//echo 'alert("message successfully sent")';
	echo '</script>';
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
	





$conn->close();
?>