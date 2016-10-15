
<?php
session_start();


$dbname = 'm-mart';
$user = 'root';
$pass = '';
$conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to Connect: ".mysql_error());
$srno=$_SESSION['srno'];
$query = "UPDATE `order_details` SET `status`=2 WHERE `sr_no`=$srno";
mysql_select_db($dbname);
$retval = mysql_query($query, $conn) or die("Unable to Retrieve data: ".mysql_error());


echo  $_SESSION['srno'] ;
   header('Refresh: 2,URL=admin.php');
?>
