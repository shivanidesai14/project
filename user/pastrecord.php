<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
include 'menu1.php';
?>
</head>
</body>
<?php
$_mail=$_SESSION["mail"];
 $conn=new mysqli("localhost","root","","project");
//$result=$conn->query("select * from bill_tbl where fk_email_id='". $_mail ."'");
$sql="select p.*,u.*,b.* from product_tbl p,user_tbl u,bill_tbl b where p.pk_pro_id=b.fk_product_id and b.fk_email_id=u.pk_email_id and fk_email_id='". $_mail ."'";
$result=$conn->query($sql);
?>
<div class="span9">
<table class="table table-bordered">
<thead>
<th><h4>Invoice Number</h4></th>
<th><h4>Product Name</h4></th>
<th><h4>Product Image</h4></th>
<th><h4>Payment Type</h4></th>
<th><h4>Bill Amount</h4></th>

</thead>
<tbody>
<?php
    while($row=$result->fetch_assoc())
    {
      //  $_img=$_img=$row["pro_image1"];
       // echo $_img;
              echo '<tr>';
            echo '<td> <h5>'. $row["bill_no"] .'</h5> </td>';
            echo '<td> <h5>'. $row["pro_name"] .'</h5> </td>';
             echo '<td> <h5><img src="'. $row["pro_image1"] .'"style="width:130px;height:110px"></h5> </td>';
            echo '<td> <h5>'. $row["bill_pay_type"] .'</h5> </td>';
            echo '<td> <h5>'. $row["bill_amt"] .'</h5> </td>';
            echo  '</tr>';
    }
?>
</tbody>
</table>
</div>


</body>
</html>