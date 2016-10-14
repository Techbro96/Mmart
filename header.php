<!DOCTYPE html>
<?php   session_start();  ?>
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">

<!-- theme stylesheet -->
<link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="robots" content="all,follow">
  <meta name="googlebot" content="index,follow,snippet,archive">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Obaju e-commerce template">
  <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
  <meta name="keywords" content="">

  <meta name="keywords" content="">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

  <!-- styles -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- your stylesheet with modifications -->
<link href="css/custom.css" rel="stylesheet">

<script src="js/respond.min.js"></script>

<link rel="shortcut icon" href="favicon.png">

</head>

<body>

<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
            <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over ₹2000</a>
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
              <?php


                      $login="<a href='register.php'>Login</a> ";
                      $register="<a href='register.php'>Register</a>";
                      if(!isset($_SESSION['user'])) // If session is not set that redirect to Login Page
                      {
                           echo "<li>$login</li>";
                           echo "<li>$register</li>";
                       }
                      else{
                        $uname=$_SESSION['user'];
                        $UserName="<a href='customer-order.php'>$uname</a>";
                          echo "<li>$UserName</li>";
                       }


              ?>


                <li><a href="about-us.php">About us</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                <img src="img/logo.png" alt="Obaju logo" class="hidden-xs" style="margin-top: -20px;">
                <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs" style="margin-top: -16px;"><span class="sr-only">M - Mart</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle" href="basket.html">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"> 0 items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.php">Home</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Personal Care<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Body Care</h5>
                                        <ul>
                                            <li><a href="category.html"Nivea</a>
                                            </li>
                                            <li><a href="category.html">Himalaya</a>
                                            </li>
                                            <li><a href="category.html">Lakme</a>
                                            </li>
                                            <li><a href="category.html">Lotus</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Hair Care</h5>
                                        <ul>
                                            <li><a href="category.html">schwarzkopf</a>
                                            </li>
                                            <li><a href="category.html">L'Oréal</a>
                                            </li>
                                            <li><a href="category.html">tresemme</a>
                                            </li>
                                            <li><a href="category.html">Livon</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Wellness<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                  <ul>
                                      <li><a href="category.html">Fitness</a>
                                      </li>
                                      <li><a href="category.html">Suppliments</a>
                                      </li>
                                      <li><a href="category.html">speaciality</a>

                                  </ul>


                                    <div class="col-sm-3">
                                        <div class="banner">
                                            <a href="#">

                                            </a>
                                        </div>
                                        <div class="banner">
                                            <a href="#">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">OTC<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                      <ul>
                                          <li><a href="category.html">First Aid</a>
                                          </li>
                                          <li><a href="category.html">Health Care</a>
                                          </li>
                                          <li><a href="category.html">Mens Care</a>
                                          </li>
                                          <li><a href="category.html">Womens Care</a>
                                          </li>
                                      </ul>


                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                  <script>
                  function showResult(str) {
                    if (str.length==0) {
                      document.getElementById("livesearch").innerHTML="";
                      document.getElementById("livesearch").style.border="0px";
                      return;
                    }
                    if (window.XMLHttpRequest) {
                      // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp=new XMLHttpRequest();
                    } else {  // code for IE6, IE5
                      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange=function() {
                      if (this.readyState==4 && this.status==200) {
                        document.getElementById("livesearch").innerHTML=this.responseText;
                        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                      }
                    }
                    xmlhttp.open("GET","livesearch.php?q="+str,true);
                    xmlhttp.send();
                  }
                  </script>
                  <form>
                  <input type="text" size="30" onkeyup="showResult(this.value)">
                  <div id="livesearch" style="    border: 1px solid rgb(165, 172, 178);
    WIDTH: 232PX;
     LEFT: 78PX;
        FLOAT: right;"></div>
                  </form>
                    <span class="input-group-btn" >

  <button type="submit" class="btn btn-primary"style="    margin-left: 5px;"><i class="fa fa-search"></i></button>

    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->
<!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/front.js"></script>
</body>

</html>
