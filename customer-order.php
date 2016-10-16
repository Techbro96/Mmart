<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Account
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <?php
        include 'header.php';
    ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>My account</li>
                        <li>   <?php echo $_SESSION['user'];?> </li><!-- user name -->
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer-order.php"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li>
                                    <a href="customer-account.php"><i class="fa fa-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">

                        <?php echo "Welcome ".$_SESSION['user'];

                        $error=''; // Variable To Store Error Message


$dbname = 'm-mart';
$user = 'root';
$pass = '';
$conn = mysql_connect("localhost",$user,$pass,$dbname) or die("Unable to Connect: ".mysql_error());
$logged_user = $_SESSION['user'];

$query = "select * from order_details where  username='$logged_user'";
mysql_select_db($dbname);
$retval = mysql_query($query, $conn) or die("Unable to Retrieve data: ".mysql_error());
echo "<h3>All Orders </h1>";
echo "<table> <th>Order No &nbsp;</th><th>Itemname &nbsp;<th>Status &nbsp;</th>";
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
     echo "<tr><td> {$row['sr_no']}  ".
    //    "<td> {$row['username']}  &nbsp;&nbsp;".
        "<td> {$row['itemname']}  &nbsp;&nbsp;";

        if($row['status']==0)
        {
          echo "<td> <p class='bg-warning'>Order Pending..</p> ";
        }
        if($row['status']==1)
        {
          echo "<td>  <p class='bg-success'>Order Accepted</p> ";
        }
        if($row['status']==2)
        {
          echo "<td>  <p class='bg-danger'>Order Rejected</p> ";
        }

  }
echo "</table>";
                 ?>
<!-- <p class="bg-warning">This text represents a warning.</p>
 <p class="bg-success">This text indicates success.</p>
 <p class="bg-danger">This text represents danger.</p>-->
               </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        </div>
        <?php include 'footer.html';?>


</body>

</html>
