<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	include 'config.php';
	if( isset($_SESSION['user']) ) {
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
									<li><a href="contact.php"><i class="fa fa-user"></></i> Contact Us</a></li>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <?php
								if( !isset($_SESSION['user']) ){
									echo "<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
								}
								else{
								echo "<li class='dropdown'>
									<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
									<span class='glyphicon glyphicon-user'></span>&nbsp;Hi, $userRow[userName] &nbsp;<span class='caret'></span></a>
									<ul class='dropdown-menu'>
										<li><a href='logout.php?logout'><span class='glyphicon glyphicon-log-out'></span>&nbsp;Sign Out</a></li>
									</ul>
								</li>";
								}
								?>
                                </ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
				</div>
				<div class="col-sm-12">    			   			
					<h2 align="center">We Would Like To hear from You<br></h2>
					<p align="center">Email Us At<br>
					<h2 class="title text-center">contact_us@eshopper.com<h2>
					<h2 align="center">For other Help or Inconvenience<br></h2>
					<p align="center">We are available 24/7 at<br>
				    <h2 class="title text-center">+91 9833363911<h2>
				    <h2 align="center">Our Location</h2>
                    <dd>
                    <iframe style="border: 50;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.8724390962743!2d77.44509431508263!3d28.633584982417297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee3d4e3485ed%3A0xe0fe1689b57c7d2e!2sABESIT+(Institute+of+Technology)!5e0!3m2!1sen!2sin!4v1533972091994" width="100%" height="250" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </dd>
				</div>
			</div>
    	</div>	
    </div><!--/#contact-page-->
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<p>&nbsp
	<header id="header"><!--header-->
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 ">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href=""><img src="images/home/logo_small.png" height="20px" width="20px"></a></li>
							<li><a href="">E-Shopper</a></li>
							<li><a href=""> - </a></li>
							<li><a href="">Shopping Made Easy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-dribbble"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>