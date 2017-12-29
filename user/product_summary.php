<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
	<body>
<?php
include 'menu1.php';
?>

	
<!-- Sidebar end=============================================== -->
	<div class="span9">
	<h3>  SHOPPING CART<a href="loginmainpage.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	<form action="" method="post">
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity</th>
									<th>Price</th>
                  <th>Action</th>
                 <th>Total</th>
				</tr>
              </thead>
	<?php
		$id=$_GET["id"];
		$_mail=$_SESSION["mail"];
    $total=0;
	//	$_SESSION["pid"]=$id;
		$conn=new mysqli("localhost","root","","project");
	  $result=$conn->query("insert into cart_tbl values('". null ."','". $_mail ."','". $id ."','". 1 ."')");
    if($result===true)
	  {
	
    require 'classdemo.php';
    $obj=new database();
    $result=$obj->selectuser($_mail);
		if($result->num_rows>0)
    {
     while($row=$result->fetch_assoc())
    {
	
              echo '<tbody>';
               echo ' <tr>';
                echo '  <td><img width="60" src="'.$row["pro_image1"].'">.</td>';
                 echo ' <td> '.$row["pro_name"].'<br/>Color :'.$row["pro_colour"].'</td>';
				 
						echo '<td>'. $row["cart_qty"] .'</td>';
				
                  echo '<td>Rs.'.$row["pro_price"].'</td>';
									  $product_price=$row["pro_price"];
                     $product_qty=$row["cart_qty"];
                       $subtotal = ($product_price * $product_qty);
                   $total = ($total + $subtotal);
                 echo '<td>Rs.'.$subtotal.'</td>';
                echo '<td><a href="cartdelete.php?id='.$row["pk_cart_id"].'">Remove</a></td>';
               echo '</tr>';
		echo	'<td>';
				
				echo ' </td>';
		}

					?>

				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong>Rs. <?php echo $total;?></strong></td>
                </tr>
				</tbody>
            </table>
<?php	} ?>	
<?php	} ?>		
           
			</form>
	<a href="billdisplay.php" class="btn btn-large pull-right">Proceed To Payment<i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
</div>
<span id="themesBtn"></span>
</body>
</html>