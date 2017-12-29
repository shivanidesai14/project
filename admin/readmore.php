
<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <script src="../js/jquery-3.2.1.min.js"></script>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
  <?php

include 'navbar.php';
  ?>
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>Product Details</h1>
</div>
<form method="post" action="">
<div class="container">
  <div class="col-md-4">
<?php
$id=$_GET["id"];
$cnn=new mysqli("localhost","root","","project");
$sql="select * from product_tbl where pk_pro_id='". $id ."'";
$result=$cnn->query($sql);
while($row=$result->fetch_assoc())
{
  echo '<img src="' . $row["pro_image1"] . '" class="img-responsive">';
 
?>
</div>
<div class="col-md-8">
<?php 
echo '<h2>Name :-   '. $row["pro_name"]  .'</h2><br>';
echo ' <h2>Manufacturing Date :-   '. $row["pro_mfg"] .'</h2><br>';
echo '<h2>Warranty :-   '. $row["pro_warr"] .'</h2><br>';
echo '<h2>Stock :-   '. $row["pro_soh"] .'</h2><br>';
echo '<h2>Product Colour :-   '. $row["pro_colour"] .'</h2><br>';
echo ' <h2>Product Price :-    '. $row["pro_price"] .'</h2><br>';
 echo '<h2>Product Desc :-   '. $row["pro_desc"] .'</h2><br>';
}?>
<center><a href="prodisplay.php"><input type="button" class="btn btn-warning btn-lg" name="btnback" value="Return"></center></a>
  </div>
</div>
</form>
</body>
</html>