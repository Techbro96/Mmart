<?php

   $insert_name=$_POST['user_name'];
   $insert_email=$_POST['user_email'];
   $insert_pass=$_POST['user_pass'];
   $dbname = 'm-mart';
   $user = 'root';
   $pass = '';
   $conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to connect: ".mysql_error());

   $insert_data = "INSERT INTO user_details (username,password,emailid) 
                     VALUES ('$insert_name','$insert_pass','$insert_email')";

   mysql_select_db($dbname);
   $retval = mysql_query($insert_data,$conn) or die('Unable to insert data: ' . mysql_error());
   echo "Entered data successfully\n";
   header('Refresh: 2;URL=index.php');
   mysql_close($conn);
?>
