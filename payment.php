<?php   session_start();  ?>
<?php

   $insert_name=$_SESSION['user'];
   $insert_itemname=$_SESSION['item_name'];
   $insert_pres=$_SESSION['pres_filename'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $zip=$_POST['zip'];
   $city=$_POST['city'];
$faddress=$address .' , ' . $city .'-'. $zip;

             echo $email;

             echo $address;

             echo $city;

             echo $zip;
             echo $faddress;
   $dbname = 'm-mart';
   $user = 'root';
   $pass = '';
   $conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to connect: ".mysql_error());

   $insert_data = "INSERT INTO order_details (username,itemname,pres_filename,status,address)
                     VALUES ('$insert_name','$insert_itemname','$insert_pres',0,'$faddress')";

   mysql_select_db($dbname);
   $retval = mysql_query($insert_data,$conn) or die('Unable to insert data: ' . mysql_error());
   echo "Entered data successfully\n";
   header('Refresh: 2;URL=index.php');
   mysql_close($conn);
?>
