<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
<body>
<?php
include 'navbar.php';
?>
<?php
$conn=new mysqli("localhost","root","","project");
$sql="select p.*,u.*,c.* from product_tbl p,user_tbl u,cart_tbl c where p.pk_pro_id=c.fk_product_id and c.fk_email_id=u.pk_email_id";
$result=$conn->query($sql);

?>
<form method="post" action="catdeleteall.php">
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>Cart Table</h1>
</div>
<div class="container">
<table class="table table-bordered">
<thead>
<th>Name</th>
<th>Product Name</th>
<th>Qty</th>
</thead>
<?php
    while($row=$result->fetch_assoc())
    {
            echo '<tr>';
            echo '<td>'. $row["user_name"] .'</td>';
            echo '<td>'. $row["pro_name"] .'</td>';
            echo '<td>'. $row["cart_qty"] .'</td>';
            echo '</tr>';
    }




?>
</table>
</form>
</body>
</html>