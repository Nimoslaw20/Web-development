<?php 

/*
if register button is clicked, do this
*/
 if (isset($_POST['register'])) {

    $uname; $email; $pword; $ok = true;
        //validate user name
        if (isset($_POST['uname']) && !empty($_POST["uname"])) {
            $uname = $_POST['uname'];
        } 
        else{
           $ok = false; 
           $GLOBALS['unameError'] = "Enter your first name";
        }

        //validate email
        if (isset($_POST['email']) && !empty($_POST["email"])) {
            $email = $_POST['email'];
        } 
        else{
           $ok = false; 
           $GLOBALS['emailError'] = "Enter your email address";
        }

        //validate password
        if (isset($_POST['pword']) && !empty($_POST["pword"])) {
            $pword = $_POST['pword'];

            //$hashedPword = password_hash($pword, PASSWORD_DEFAULT);
        } 
        else{
           $ok = false; 
           $GLOBALS['pwordError'] = "Password cannot be blank";
        }
        if($ok){

        //NOW SAVE DATA TO DATABASE

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "cs341";

        // Create connection
        $conn = new mysqli($host, $user, $password, $db);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO users (name, email, password) VALUES ('$uname', '$email', '$pword')";
        if ($conn->query($sql) === TRUE) {
            $GLOBALS['status'] = 1;
            
        } else {
            $GLOBALS['status'] =2;
        }

        $conn->close();

    }
}

//HANDLE LOGIN REQUEST
if (isset($_POST['loginBtn'])) {
    $email; $pword; $ok = true;

        //validate email
        if (isset($_POST['email']) && !empty($_POST["email"])) {
            $email = $_POST['email'];
        } 
        else{
           $ok = false; 
           $GLOBALS['emailError'] = "Enter your email address";
        }

        //validate pword
        if (isset($_POST['pword']) && !empty($_POST["pword"])) {
            $pword = $_POST['pword'];
        } 
        else{
           $ok = false; 
           $GLOBALS['pwordError'] = "Password cannot be blank";
        }
        if($ok){

        //CONNECT TO DATABASE

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "cs341";

        // Create connection
        $conn = new mysqli($host, $user, $password, $db);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pword'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                //start session and redirect user to index page
                session_start();
                $_SESSION["username"] = $row["name"];
                header("location:index.php");
            }
        } else {
             $GLOBALS['loginError']= "No user found with this credential. Try again";
        }

        $conn->close();

    }
}


function signupstatus(){
    if (!empty($GLOBALS['status']) && $GLOBALS['status'] == 1) {
        echo "<center><h3 style='color:green'>Registration Successful </h3></center> <br>
        <p style='color:green'>You will be redirected to login pages in a few seconds<p>";
        header("Refresh:5; URL=login.php");
    }
    else if (!empty($GLOBALS['status']) && $GLOBALS['status'] == 2) {
        echo "<center><h2 style='color:red'> Registration Unsuccessful </h2></center>" ;
    }
}

function sanitize_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
 ?>