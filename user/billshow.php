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
	<h3 align="center">  Bill </h3>
    <h3 align="right"><?php echo date("d/m/y"); ?> </h3>	
	<hr class="soft"/>
	<form action="" method="post">
	<table class="table table-bordered">
 
               
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
					<th>Price</th>
                  <th>Payment Type</th>
             
                 
				</tr>
              </thead>
          
	<?php
    $_id=$_SESSION["mail"];
    $total=0;
    require 'classdemo.php';
    $obj=new database();
    $result=$obj->selectuser($_id);
	$_address=$_POST["txtadd"];
    $_payment=$_POST["paytype"];
    $_date=date("d/m/y");
    $pid="";
 
    	if($result->num_rows>0)
    {
     while($row=$result->fetch_assoc())
    {

          $productid=$row["fk_product_id"];
        $pid=$pid.$row["fk_product_id"].",";
//        $qty=explode(",",$row["bill_product_qty"]);

              echo '<tbody>';
               echo ' <tr>';
                echo '  <td><img width="60" src="'.$row["pro_image1"].'">.</td>';
                 echo ' <td> '.$row["pro_name"].'<br/>Color :'.$row["pro_colour"].'</td>';
				  						echo '<td>'. $row["cart_qty"] .'</td>';
							
				
             
                    $product_price=$row["pro_price"];
                     $product_qty=$row["cart_qty"];
                    $subtotal = ($product_price * $product_qty);
                    
                   $total +=  $subtotal;
                 echo '<td>Rs.'.$subtotal.'</td>';
                
               
             
		echo	'<td>'.$_payment.'   </td>';
echo '</tr>';
	
				
		}
		
					?>
             
	 <tr>
                 
                  <td colspan="5" style="text-align:right"><strong>Shipping Address =</strong></td>
                  <td style="display:block"> <strong> <?php  echo $_address;?></strong></td>
                </tr>
  


				 <tr>
                 
                  <td colspan="5" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong>Rs. <?php  echo $total;?></strong></td>
                </tr>
            </table>
<?php	} ?>	
		
           
			</form>
<?php
echo $pid;
	$conn=new mysqli("localhost","root","","project");
	  $result=$conn->query("insert into bill_tbl values('". null ."','". $_id ."','". $pid ."','". $total ."','". date("d/m/y") ."','".$_address ."','". $_payment ."')");
    $res=$conn->query("delete from cart_tbl where fk_email_id='". $_id ."'");
?>
	
</div>
</div></div>
</div>


<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
</div>
<span id="themesBtn"></span>
</body>
</html>