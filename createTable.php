<?php
	$user = 'root';
	$pass = '';
	$dbname = 'm-mart';
	$conn = mysql_connect('localhost',$user,$pass,$dbname) or die("Unable to connect: ".mysql_error());
	echo "Connected Successful...";
	
	$create_table = 'CREATE TABLE user_details( '.
      'username VARCHAR(20) NOT NULL, '.
      'password VARCHAR(20) NOT NULL, '.
	  'emailid VARCHAR(20) NOT NULL, '.
      'primary key (username))';
	mysql_select_db($dbname);
	$return_value = mysql_query($create_table,$conn) or die("Unable to create table: ".mysql_error());
	echo "Table User Details created successfully...";
	
	mysql_close($conn);
?>