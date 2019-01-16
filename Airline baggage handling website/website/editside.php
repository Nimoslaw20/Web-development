<?php 

	$servername = "localhost";
    $username = "nicholas_quansah";
    $password = "nicholas_quansah";
    $dbname = "nicholas_quansah";

    include ("airline.html");
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	


	if(isset($_GET['insert'])){
		
		$airline =$_GET['plane'];
		$date =$_GET['date'];
		//$email =$_GET['email'];
		

		$sql = "SELECT * from users where mydate='$date' and airline='$airline'";
		#echo $sql;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

            echo "<style>
					#people {
					    font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
					    border-collapse: collapse;
					    width: 100%;
					}

					#people td, #people th {
					    border: 1px solid #ddd;
					    padding: 8px;
					}

					#people tr:nth-child(even){background-color: #f2f2f2;}

					#people tr:hover {background-color: #ddd;}

					#people th {
					    padding-top: 12px;
					    padding-bottom: 12px;
					    text-align: left;
					    background-color: #20B2AA;
					    color: white;
					}
					</style>";



			echo "<br>";
		    	echo "<table width ='800' align='center' id='people' background-color='lightgreen' font='Bookman' border='2' padding='2px' cellpadding='1'cellspacing='1'>";
		    	echo"<tr>";

				echo "<th>Firstname</th>";
				echo "<th>Lastname</th>";
				echo "<th>Gender</th>";
				echo "<th>Email</th>";
				echo "<th>Phonenumber</th>";
				echo "<th>Status</th>";
				echo "<th>Edit Status</th>";
				echo "<th>Current_station</th>";
				echo "<th>Destination</th>";
				echo "<th>Date</th>";
				echo "<th>Comments</th>";
				echo "<th>Baggage Ref</th>";
				echo "<th>Airline</th>";
        		echo "</tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	

		    	# "Gender: " . $row["gender"]. "Email " . $row["email"].  "Phonenumber: " . $row["phonenumber"]. "Station: " . $row["current_station"].  "Bagstatus: " . $row["status"]. "Destination: " . $row["destination"]. "Comments: " . $row["comments"]. "Airline: " . $row["airline"];

		    	echo "<tr>";

		    	echo "<td>".$row['firstname']."</td>";

		    	echo "<td>".$row['lastname']."</td>";

		    	echo "<td>".$row['gender']."</td>";

		    	echo "<td>".$row['email']."</td>";

		    	echo "<td>".$row['phonenumber']."</td>";

		    	echo "<td>".$row['status']."</td>";

		    	echo '<td><a href="edit2.php?airline='.$airline.'&date='.$date.'&firstname='.$row['firstname'].'&status='.$row['status'].'&email='.$row['email'].'&comments='.$row['comments'].'&id='.$row['userid'].'">Edit</a></td>';

		    	echo "<td>".$row['current_station']."</td>";

		    	echo "<td>".$row['destination']."</td>";

		    	echo "<td>".$row['mydate']."</td>";

		    	echo "<td>".$row['comments']."</td>";

		    	echo "<td>".$row['baggage']."</td>";

		    	echo "<td>".$row['airline']."</td>";

		    	echo "</tr>";


		    }
				
		   }
		  

			else {
				echo "<p><center>No results found.</center></p>";
			}

			echo "<br><br>";




		    

	$conn->close();
	}

?>