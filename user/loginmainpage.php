<?php
session_start();
?>
<!DOCTYPE html>
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
<?php

include 'menu1.php';
?>
<!-- Header End====================================================================== -->

<!-- Sidebar end=============================================== -->
<div class="span9" style="min-height:900px">
		<h4>Electronics</h4>
		<hr class="soft"/>
			  <ul class="thumbnails">
<?php
$i=1;
$conn=new mysqli("localhost","root","","project");
    $sql="select * from product_tbl where fk_cat_id=1";
    $result=$conn->query($sql);
 

		while($row=$result->fetch_assoc())
		{
						echo '<li class="span3">';
				  echo '<div class="thumbnail">';
					echo '<a  href="product_details.html"><img src="'. $row["pro_image1"] .'" ></a>';
					echo '<div class="caption">';
					
					 echo '<h5> '. $row["pro_name"] .' </h5>';
					  echo '<p>'; 
					  echo '<h6> '. $row["pro_desc"] .' </h6>';
					  echo '</p>';
					 
					  echo '<h4 style="text-align:center"><a class="btn" href="readmore.php?id='. $row["pk_pro_id"] .'"> <i class="icon-zoom-in"></i></a> <a class="btn" href="product_summary.php?id='. $row["pk_pro_id"] .'">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="">Rs.'. $row["pro_price"] .'</a></h4>';
					echo '</div>';
				  echo '</div>';
				echo '</li>';
		}
		?>		
			  </ul>	
				</div>

		</div>
		</div>
	</div>
</div>

</div>
<span id="themesBtn"></span>
</body>
</html>