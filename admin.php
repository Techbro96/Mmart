<head>  
<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body align='center'>
<form action="load_pres.php" method="POST">
<input type="text" name="sr_no" placeholder="enter sr_no">
<input type="submit" name="display prescription">
</form>
</body>
<?php
$error=''; // Variable To Store Error Message


$dbname = 'm-mart';
$user = 'root';
$pass = '';
$conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to Connect: ".mysql_error());

$query = "select * from order_details where status=0";
mysql_select_db($dbname);
$retval = mysql_query($query, $conn) or die("Unable to Retrieve data: ".mysql_error());
echo "<h3>Order Details</h1>";
echo "<table align='center'> <th>Sr No &nbsp;</th><th>Username &nbsp;</th><th>Itemname &nbsp;</th><th>Prescription Filename &nbsp;</th><th>Status &nbsp;</th>";
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     echo "<tr><td> {$row['sr_no']}  ".
        "<td> {$row['username']}  &nbsp;&nbsp;".
        "<td> {$row['itemname']}  &nbsp;&nbsp;".
        "<td> {$row['pres_filename']} &nbsp;&nbsp; ".
        "<td> {$row['status']} ";

  }
echo "</table>";
mysql_close($conn); // Closing Connection
?>