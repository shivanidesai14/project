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

<?php 
require 'productclass.php';
$obj=new product();
$result=$obj->getAllProduct();
//$conn=new mysqli("localhost","root","","testdb");
//$sql="select p.*,c.* from product_tbl p,cat_tbl c where c.cat_id=p.fk_cat_id";
//$sql="select * from product_tbl";
//$result=$conn->query($sql);
?>
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>Product Table</h1>
</div>
<div class="container">
<form action="deleteall.php" method="post">
<table class="table table-bordered">
<thead>
<th>SELECT</th>
<th>NAME</th>
<th>COLOUR</th>
<th>PRICE</th> 
<th>CATEGORY</th>
<th>IMAGE</th>
<th>ACTION</th>
<th>VIEW MORE</th>
</thead>
<?php
while($row=$result->fetch_assoc())
{
    echo '<tr>';
    echo '<td><input type="checkbox" name="chk[]" value="'.$row["pk_pro_id"].'"></td>';
    echo '<td>'. $row["pro_name"] .'</td>';
    echo '<td>'. $row["pro_colour"] .'</td>';
    echo '<td>'. $row["pro_price"] .'</td>';
    echo '<td>'. $row["cat_name"] .'</td>';
    echo '<td>'.'<img src="'.$row["pro_image1"].'" height="100" width="80">'.'</img>'.'</td>';
    echo '<td>&nbsp&nbsp&nbsp<a href="prodelete.php?id='.$row["pk_pro_id"].'"><span class="glyphicon glyphicon-trash"></span></a>
      &nbsp&nbsp&nbsp<a href="productupdate.php?id='.$row["pk_pro_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
     echo '<td><a href="readmore.php?id='.$row["pk_pro_id"].'"><span class="glyphicon glyphicon-plus-sign"></span></a></td>';  
    echo '</tr>';
}
?>
</table>
<center><a class="btn btn-info btn-lg" href="proinsert.php" role="button">Insert</a>
<input type="submit" name="btnall" class="btn btn-danger btn-lg"value="Delete All"</center>
</div>
</form>
</body>
</html>