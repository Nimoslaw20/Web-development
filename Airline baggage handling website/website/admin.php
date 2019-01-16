<?php 

$msg = "";
if (isset($_POST['submitBtn']) && !empty($_POST['name']) && !empty($_POST['password'])){
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
        
       
       $name = $_POST['name'];
       $password = $_POST['password'];
    
       $sql = "SELECT * FROM admin where username= '$name' and password='$password'";
    
       $result = $conn->query($sql);
    
       if ($result->num_rows == 1) {
           echo "username and password are correct";
           header("Location: airline.html");
        }
        else {
            echo "Wrong username and password commbination";
    }
    
        $conn-> close();
}

 ?>



<!DOCTYPE html>

<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN PAGE</title>

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
        <h1 class="text-uppercase mb-0">LOGIN</h1>
        <div class="container">
    <br/>
    <br/>
</header>
<br/>
<form class="container" method ="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <div class="form-group">
    <label for="User" for="text" placeholder="User">User</label>
    <input type="text" name = "name"  class="form-control">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name= "password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep Me Signed In</label>
  </div>
  <br/>
 <input <input type="submit" name="submitBtn" value="Submit" class="btn btn-lg btn-primary">
</form>
<p id="status"><?php echo $msg;?></p>
</body>

</html>
























