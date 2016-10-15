<?php
$srno=$_POST['sr_no'];
session_start(); // Starting Session
$error=''; // Variable To Store Error Message


$dbname = 'm-mart';
$user = 'root';
$pass = '';
$conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to Connect: ".mysql_error());

$query = "select * from order_details where sr_no=$srno";
mysql_select_db($dbname);
$retval = mysql_query($query, $conn) or die("Unable to Retrieve data: ".mysql_error());
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		$image=$row['pres_filename'];
		 $_SESSION['srno']=$row['sr_no'];
     $_SESSION['prescription'] =$image;
     header('Refresh: 2,URL=display.php');
  }
mysql_close($conn); // Closing Connection
?>
