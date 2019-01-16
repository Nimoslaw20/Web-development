<?php 

	$servername = "localhost";
    $username = "nicholas_quansah";
    $password = "nicholas_quansah";
    $dbname = "nicholas_quansah";

    include ("status.html");
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	


	if(isset($_GET['insert'])){
		
		$firstname =$_GET['email'];
		$bagnum =$_GET['baggage'];
		
	

		$sql = "SELECT * from users where baggage='$bagnum' and firstname='$firstname'";
		#echo $sql;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {

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

		    echo "<table id='people'  style='width:50%; left:25%; position:absolute; border-down:50px;'>";
		    //echo"<tr><th>Information</th>"." "."<th>Details</th></tr><br>";
		    //border-collapse: collapse;
		    
		    //echo "<tr style='background-color: #454545'>";
		    echo "<tr >";
		    //echo "<th style='color:white'>";
		    echo "<th>";
		    echo "Information";
		    echo "</th>";
		    //echo "<th style='color:white'>";
		    echo "<th>";
		    echo "Detail";
		    echo "</th>";
		    echo "</tr>";

		    echo "<tr>";
		    echo "<td>";
		    echo "First Name";
		    echo "</td>";
		    echo "<td>";
		    echo $row["firstname"];
		    echo "</td>";
		    echo "</tr>";


		    //echo "<tr style='background-color: #f2f2f2'>";
		    echo "<tr>";
		    echo "<td>";
		    echo "Last Name";
		    echo "</td>";
		    echo "<td>";
		    echo $row["lastname"];
		    echo "</td>";
		    echo "</tr>";


		    echo "<tr>";
		    echo "<td>";
		    echo "Gender";
		    echo "</td>";
		    echo "<td>";
		    echo $row["gender"];
		    echo "</td>";
		    echo "</tr>";

		    //echo "<tr style='background-color: #f2f2f2'>";
		    echo "<tr>";
		    echo "<td>";
		    echo "Date";
		    echo "</td>";
		    echo "<td>";
		    echo $row["mydate"];
		    echo "</td>";
		    echo "</tr>";


		    //echo "<tr style='background-color: #f2f2f2'>";
		    echo "<tr>";
		    echo "<td>";
		    echo "Email";
		    echo "</td>";
		    echo "<td>";
		    echo $row["email"];
		    echo "</td>";
		    echo "</tr>";


		    echo "<tr>";
		    echo "<td>";
		    echo "Phonenumber";
		    echo "</td>";
		    echo "<td>";
		    echo $row["phonenumber"];
		    echo "</td>";
		    echo "</tr>";


		    //echo "<tr style='background-color: #f2f2f2'>";
		    echo "<tr>";
		    echo "<td>";
		    echo "Station";
		    echo "</td>";
		    echo "<td>";
		    echo $row["current_station"];
		    echo "</td>";
		    echo "</tr>";

		    echo "<tr>";
		    echo "<td>";
		    echo "Bagstatus";
		    echo "</td>";
		    echo "<td>";
		    echo $row["status"];
		    echo "</td>";
		    echo "</tr>";

		    //echo "<tr style='background-color: #f2f2f2'>";
		    echo "<tr>";
		    echo "<td>";
		    echo "Destination";
		    echo "</td>";
		    echo "<td>";
		    echo $row["destination"];
		    echo "</td>";
		    echo "</tr>";

		    		    echo "<tr>";
		    echo "<td>";
		    echo "Comments";
		    echo "</td>";
		    echo "<td>";
		    echo $row["comments"];
		    echo "</td>";
		    echo "</tr>";

		    		    //echo "<tr style='background-color: #f2f2f2'>";
		    echo "<tr>";
		    echo "<td>";
		    echo "Airline";
		    echo "</td>";
		    echo "<td>";
		    echo $row["airline"];
		    echo "</td>";
		    echo "</tr>";


		    echo "</table";
		    echo "<p></p>";

		    //echo "<tr><td>". " Name:" ."</td>"."<td>". $row["firstname"]."</td>"."</tr>";


		    /*. " " . $row["lastname"].
        "Gender: " . $row["gender"]. "Email " . $row["email"].  "Phonenumber: " . $row["phonenumber"]. "Station: " . $row["current_station"].  "Bagstatus: " . $row["status"]. "Destination: " . $row["destination"]. "Comments: " . $row["comments"]. "Airline: " . $row["airline"];*/

		    }
		   }

							else {
												    echo "<p><center>Result cannot be matched.</center></p>";
												}


										$conn->close();
										}

?>

										
											  
															   
																	
																	

																  
												    