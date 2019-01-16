<?php
     $name = $_GET['name'];
     $email = $_GET['email'];

     echo "your name is " .$name. " and your email is ".$email;

     if ($name=="Emmanuel" & $email =="emmanuelnimo76@gmail.com"){
     	echo "you are good to go";
     }
     elseif ($name=="Emmanuel" & $email !=="emmanuelnimo76@gmail.com"){
     	echo "your name is correct but email incorrect";

     }
     elseif ($name !=="Emmanuel" & $email =="emmanuelnimo76@gmail.com"){
     	echo "your name is incorrect but email is correct";
     }
     elseif ($name !=="Emmanuel" & $email !=="emmanuelnimo76@gmail.com"){
     	echo "your name and email are incorrect";
     }

?>
