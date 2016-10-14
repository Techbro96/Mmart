<?php
$username=$_POST['username'];
$password=$_POST['password'];
session_start(); // Starting Session
$error=''; // Variable To Store Error Message


$dbname = 'm-mart';
$user = 'root';
$pass = '';
$conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to Connect: ".mysql_error());

$query = "select * from user_details where password='$password' AND username='$username'";
mysql_select_db($dbname);
$retval = mysql_query($query, $conn) or die("Unable to Retrieve data: ".mysql_error());
$rows = mysql_num_rows($retval);
	if ($rows > 0)
	{
		echo "Welcome ".$username." to M-Mart";
		$_SESSION['user']=$username;
		header('Refresh: 2,URL=customer-account.php');

	}
	else
	{
		echo "Username or Password is invalid";
		header('Refresh: 2; URL = register.php');
	}
mysql_close($conn); // Closing Connection
?>
