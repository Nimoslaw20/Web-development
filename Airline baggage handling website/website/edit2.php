<?php 
		$id = 0;
    $comments = $status = $firstname = $airline = $email ="";
			if(isset($_GET['id'])){
        session_start();

        //if(isset($_SESSION["can_edit"])){
          $_SESSION['can_edit'] = "Yes";
          $id = $_GET['id'];
          $comments = $_GET['comments'];
          $status =$_GET['status'];
          $airline = $_GET['airline'];
          $email =$_GET['email'];
          $firstname =$_GET['firstname'];
        //}
        
        }
        
          
?>


</body>
</html>



<!DOCTYPE html>

<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN EDIT SECTION</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
     <link rel="stylesheet" href="status.html">
     <link rel="stylesheet" href="airline.html">
  </head>

<body>

<header class="bg-primary text-white text-center" style="padding:60px">
      <div class="container">
        <img class="img-fluid mb-3 d-block mx-auto" src="img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">ADMIN EDIT SECTION</h1>
        <h1> <?php echo $airline; ?> Airways </h1>
        <div class="container">
    <br/>
    <br/>
</header>
<br/>
<form class="container" form action="edit2.php" method="post">
  <div class="form-group">
    <label for="User" for="text" placeholder="User">Edit Status</label>
    <input type="text" class="form-control" id="status" name="status" value="<?php echo $status; ?>" required>
  </div>

  <div class="form-group">
    <label for="comments">Remarks</label>
    <input type="text" class="form-control id="edit" name="comments" value="<?php echo $comments; ?> " required>
  </div>
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <br/>
<div>
 <input class="btn btn-lg btn-primary" type="submit" name="edit" id="editbutton" value="EDIT">
</div>
</form>

<!-- <form action="mailto:sendEmail()">
<div class="form-group">
 <input class="btn btn-lg btn-primary" type="submit" name="edit" id="editbutton" value="SEND EMAIL">
</div>
</form> -->


	<?php 
		if(isset($_POST['status'])){
			$servername = "127.0.0.1";
		    $username = "root";
		    $password = "";
		    $dbname = "bag";
	    	$status = $_POST['status'];
	    	$comments = $_POST['comments'];
	    	$id = $_POST['id']; 

		    // Create connection
		    $conn = new mysqli($servername, $username, $password, $dbname);
		    
		    
		    // Check connection
		    if ($conn->connect_error) {
		        die("Connection failed: " . $conn->connect_error);
		    } 
			
		    
		    
		    $sql = "UPDATE users SET status='$status', comments='$comments' where userid = '$id'";
		    $result = $conn->query($sql);
		    if ($conn->query($sql) === TRUE) {
			    echo "<p><center>Record updated successfully</center></p>";

          $body = "Hello $firstname, your details has been changed to $status and you $comments .Thank you for trusting us!";

         mail("emmanuelnimo76@gmail.com", "Baggage Tracking", $body, "From:" . $email);


			} else {
			    echo "Error updating record: " . $conn->error;
			
//$body = "Hello $firstname, your details has been changed to $status and you $comments .Thank you for trusting us!";

          // Always set content-type when sending HTML email
          //$headers = "MIME-Version: 1.0" . "\r\n";
          //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

          // More headers
          //$headers .= 'From: <emmanuelnimo76@gmail.com>' . "\r\n";

         //mail($email, "Baggage Tracking", $body, $headers);


//
     

        //function sendEmail(){
          //$sql = "SELECT email from users where mydate='$date' and airline='$airline'";
        #echo $sq
          //$result = $conn->query($sql);
          //return $result;
       // }

    }
		

	}
	?>
		
	
</body>
</html>



