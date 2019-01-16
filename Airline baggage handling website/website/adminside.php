<?php 

	$servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "bag";
    include ("airline.html");

    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	


	if(isset($_GET['insert'])){
		
		$airline = $_GET['plane'];
		$date = $_GET['date'];

		$sql = "SELECT * from users where mydate='$date' and airline='$airline'";
		#echo $sql;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo "<br><br>";
		    	echo "<table width ='600' border='1' cellpadding='1'cellspacing='1'>";
		    	echo"<tr>";

				echo "<th>Firstname</th>";
				echo "<th>Lastname</th>";
				echo "<th>Gender</th>";
				echo "<th>Email</th>";
				echo "<th>Phonenumber</th>";
				echo "<th>Status</th>";
				echo "<th>Current_station</th>";
				echo "<th>Destination</th>";
				echo "<th>Date</th>";
				echo "<th>Comments</th>";
				echo "<th>Baggage Ref</th>";
				echo "<th>Airline</th>";
        		echo "</tr>";

		    	# "Gender: " . $row["gender"]. "Email " . $row["email"].  "Phonenumber: " . $row["phonenumber"]. "Station: " . $row["current_station"].  "Bagstatus: " . $row["status"]. "Destination: " . $row["destination"]. "Comments: " . $row["comments"]. "Airline: " . $row["airline"];

		    	echo "<tr>";

		    	echo "<td>".$row['firstname']."</td>";

		    	echo "<td>".$row['lastname']."</td>";

		    	echo "<td>".$row['gender']."</td>";

		    	echo "<td>".$row['email']."</td>";

		    	echo "<td>".$row['phonenumber']."</td>";

		    	echo "<td>".$row['status']."</td>";

		    	echo "<td>".$row['current_station']."</td>";

		    	echo "<td>".$row['destination']."</td>";

		    	echo "<td>".$row['mydate']."</td>";

		    	echo "<td>".$row['comments']."</td>";

		    	echo "<td>".$row['baggage']."</td>";

		    	echo "<td>".$row['airline']."</td>";
		    }

		   }
		  

			else {
				echo "0 results";
			}


	$conn->close();
	}

?>