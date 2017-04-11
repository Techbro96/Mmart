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
        Register/Login
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

<script>
function validateform(){
var name=document.register_form.user_name.value;
var email=document.register_form.user_email.value;

var password=document.register_form.user_pass.value;
var password_confirm=document.register_form.user_pass_confirm.value;

  var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

if (name==null || name==""){
  alert("Name can't be blank");
  return false;
}else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
 alert("Please enter a valid email id");

        return false;
    }else if(password.length<6){
  alert("Password must be at least 6 characters long.");
  return false;
  }
  else if(password!=password_confirm)
  {
    alert("Password must be same");
    return false;
  }
}
</script>

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
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>Dear Valued Customer, Welcome back! Thank you for continuing to rely on Netmeds.com for your healthcare needs. We are committed to 100% customer satisfaction and we will do everything possible to make sure you are always satisfied with your purchase and our service.
                        This is M'MarT’ commitment to you – our loyal customer.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                         <form action="save_user.php" method="post" name="register_form" onsubmit="return validateform()">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="user_name"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="user_email"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="user_pass"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" name="user_pass_confirm"/>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>


                        <hr>

                        <form action="authenticate.php" method="post">
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


    </div>
    <!-- /#all -->



<?php include 'footer.html'?>

</body>

</html>
