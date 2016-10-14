<?php
	$user = 'root';
	$pass = '';
	$dbname = 'm-mart';
	$conn = mysql_connect('localhost',$user,$pass,$dbname) or die("Unable to connect: ".mysql_error());
	echo "Connected Successful...";
	
	$create_table = 'CREATE TABLE order_details( '.
      'sr_no VARCHAR(5) NOT NULL, '.
      'username VARCHAR(20) NOT NULL, '.
	  'itemname VARCHAR(20) NOT NULL, '.
	  'pres_filename VARCHAR(100) NOT NULL, '.
	  'status VARCHAR(5) NOT NULL, '.
      'primary key (sr_no))';
	mysql_select_db($dbname);
	$return_value = mysql_query($create_table,$conn) or die("Unable to create table: ".mysql_error());
	echo "Table User Details created successfully...";
	
	mysql_close($conn);
?>