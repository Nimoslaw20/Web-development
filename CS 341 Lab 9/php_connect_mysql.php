<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
     <title>PHP Weds MySQL</title>
</head>
<body>
     <?php
          $servername = "localhost";
          $username = "root";
          $password = "pass";
          $dbname = "XYZemployees";
          $sql = "SELECT * FROM MyGuests";
           // connection
           try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,  $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // sql to create table
                    $sql = "CREATE TABLE MyGuests (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                    firstname VARCHAR(30) NOT NULL,
                    lastname VARCHAR(30) NOT NULL,
                    email VARCHAR(50),
                    reg_date TIMESTAMP
                    )";

                    // use exec() because no results are returned
                    $conn->exec($sql);
                    echo "Table MyGuests created successfully";
               }
           catch(PDOException $e)
               {
                    if($sql == "SELECT * FROM MyGuests"){
                         echo "Connection was not established. Find reason below:<br><br>";
                         echo $sql . "<br>" . $e->getMessage();
                    }
                    
               }

           $conn = null;
     ?>

</body>
</html>
