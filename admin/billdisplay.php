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
$sql="select p.*,b.*,u.* from product_tbl p,bill_tbl b,user_tbl u where p.pk_pro_id=b.fk_product_id and b.fk_email_id=u.pk_email_id";
$result=$conn->query($sql);

?>
<form method="post" action="catdeleteall.php">
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>Bill Table</h1>
</div>
<div class="container">
<table class="table table-bordered">
<thead>
<th>Bill No</th>
<th>Name</th>
<th>Product Name</th>
<th>Qty</th>
<th>Bill Amount</th>
<th>Bill Date</th>
<th>Bill Shipping Add</th>
<th>Bill Payment type</th>
</thead>
<?php
    while($row=$result->fetch_assoc())
    {
            echo '<tr>';
            echo '<td>'. $row["bill_no"] .'</td>';
            echo '<td>'. $row["user_name"] .'</td>';
            echo '<td>'. $row["pro_name"] .'</td>';
            echo '<td>'. $row["bill_qty"] .'</td>';
            echo '<td>'. $row["bill_amt"] .'</td>';
            echo '<td>'. $row["bill_date"] .'</td>';
            echo '<td>'. $row["bill_shipadd"] .'</td>';
            echo '<td>'. $row["bill_pay_type"] .'</td>';
            echo '</tr>';
    }




?>
</table>
</form>
</body>
</html>