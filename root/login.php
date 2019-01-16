<!DOCTYPE html>
<html>
<head>
	<title>Login Processor</title>
</head>
<body>
	<?php
		$username = "";
		$password = "";
		if (isset($_POST["submit"])) {
			if (isset($_POST["username"])) {
				$username = $_POST["username"];
			}else{
				header("Location:index.php?error=Please%20fill%20out%20the%20name%20field");
			}
			if (isset($_POST["password"])) {
				$password = $_POST["password"];
			}else{
				header("Location:index.php?error=Please%20fill%20out%20the%20password%20field");
			}

			/*
			if ($username==="Agatha" && $password==="Isaac") {
				header("Location:welcome.php?message=Wecome,%20".$username);
			}else{
				header("Location:index.php?error=Please%20fill%20in%20the%20correct%20details");
			}
			*/

			$host = "localhost";
			$dbname = "logindb";
			$user = "root";
			$pass = "";
			try{
				$conn = new PDO("mysql:host=$host;dbname=$dbname",$user, $pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$stmt = $conn->prepare("select * from userdetailstb where username=:username and password=:password");
				$stmt->bindParam(":username",$username);
				$stmt->bindParam(":password", $password);
				$stmt->execute();
				$stmt->setFetchMode(PDO::FETCH_NUM);
				$array = $stmt->fetchAll();
				if (count($array)>0) {
					header("Location:welcome.php?message=Wecome,%20".$username);
				}else{
					header("Location:index.php?error=Please%20fill%20in%20the%20correct%20details");
					
				}
			}catch(Exception $e){
				echo $e->getMessage();
			}
			
		}else{
			header("Location:index.php?error=Please%20fill%20out%20the%20form");
		}
	 ?>
</body>
</html>



