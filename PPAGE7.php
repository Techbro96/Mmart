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
        Product Info
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
  <link href="css/PPAGE.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">
<style>

    </style>


</head>

<body>
    <?php 
        include 'header.php';
        $_SESSION['item_name'] = 'Duolin Repsules';
    ?>


    <div class="container-fluid">
        <div class="content-wrapper">
    		<div class="item-container">
    			<div class="container">
    				<div class="col-md-6">
    					<div class="product col-md-12 service-image-left">

    						<center>
    							<img id="item-display" src="img\Duolin Repsules.jpeg" alt=""></img>
    						</center>
    					</div>


    				</div>

    				<div class="col-md-6">
    					<div class="product-title">Duolin Repsules</div>
    					<div class="product-desc">Levosalbutamol sulphate…..1.25 mg</div>
    					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
    					<hr>
    					<div class="product-price">&#8377 123.00</div>
    					<div class="product-stock">In Stock</div>
    					<hr>
    					<div class="btn-group cart">
    						<button type="button" class="btn btn-success" onclick=<?php  

                            if(!isset($_SESSION['user'])) // If session is not set that redirect to Login Page
                      {
                        echo "document.location.href='register.php';";
                      }
                      if(isset($_SESSION['user']))
                      {
                        echo "document.location.href='fileUploadDemo.html';";
                      }
                       ?>>
    							Buy Now
    						</button>
    					</div>
    					<div class="btn-group wishlist">
    						<button type="button" class="btn btn-danger">
    							Add to wishlist
    						</button>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="container-fluid">
    			<div class="col-md-12 product-info">
    					<ul id="myTab" class="nav nav-tabs nav_tabs">

    						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
    						<!--<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
    						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>-->

    					</ul>
    				<div id="myTabContent" class="tab-content">
    						<div class="tab-pane fade in active" id="service-one">

    							<section class="container product-info">
                 <p>DUOLIN respules is a combination of the beta2-adrenergic bronchodilator, levosalbutamol sulphate, and the anticholinergic bronchodilator, ipratropium bromide.</p>
<p>Levosalbutamol sulphate is a relatively selective beta2-adrenergic agonist, whose activation leads to an increase in intracellular adenyl cyclase, the enzyme which catalyses the conversion of adenosine triphosphate (ATP) to cyclic-3`, 5`-adenosine monophosphate (cAMP).</p>
<H3>Warning and Precautions: </H3>

<LI>Paradoxical Bronchospasm
<LI>Do Not Exceed Recommended Dose
    							</section>

    						</div>

    				</div>
    				<hr>
    			</div>
    		</div>
    	</div>
    </div>
       <?php
            include 'footer.html';
        ?>




    <!-- /#all -->








</body>

</html>
