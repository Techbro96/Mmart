<head>  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message


$dbname = 'm-mart';
$user = 'root';
$pass = '';
$conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to Connect: ".mysql_error());

$query = "select * from order_details where status=0";
mysql_select_db($dbname);
$retval = mysql_query($query, $conn) or die("Unable to Retrieve data: ".mysql_error());
echo "<table> <th>Sr No</th><th>Username</th><th>Itemname</th><th>Prescription Filename</th><th>Status</th>";
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     echo "<tr><td> {$row['sr_no']}  ".
        "<td> {$row['username']}  ".
        "<td> {$row['itemname']}  ".
        "<td> {$row['pres_filename']}  ".
        "<td> {$row['status']} ";

  }
echo "</table>";
mysql_close($conn); // Closing Connection
?>
<body>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Open File</button>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</body>
