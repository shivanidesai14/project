<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<!--<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div> 
	</div> 
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar" style="padding-top:20px;">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
	<form method="post" action="search.php" >
  <div class="navbar-inner">
    <a class="brand" href="mainpage.php"><img src="themes/images/logo.png"  alt="Bootsshop"/></a>
		
		
	
		  <select class="srchTxt" name="cat">
			<option>All</option>
		   	<option value="CLOTHES">CLOTHES</a> </option>
			<option value="ELECTRONICS">ELECTRONICS </option>
			<option value="WATCHES">WATCHES </option>
			<option value="BAGS">BAGS </option>
			
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary" name="btnfind">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="signupuser.php">Sign-Up</a></li>
	 <li class=""><a href="login.php">Login</a></li>
	
	</li>
    </ul>
  </div>
</div>
</div>
</div>



	<div id="sidebar" class="span3">
	<!--	<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>-->
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="eledisplay.php"> ELECTRONICS [230]</a>
			</li>
			<li class="subMenu"><a href="clothdisplay.php">  CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="clothdisplay.php"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="menclothdisplay.php"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>										
			</ul>
			</li>
			<li><a href="watchdisplay.php">WATCHES</a>

			</li>
			<li><a href="bagdisplay.php">BAGS</a></li>
			
			
		</ul>
		<br/>
		  
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
</html>