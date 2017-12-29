<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

	<body>
<?php
//$_mail=$_SESSION["mail"];
//echo $_mail;
	include 'menu1.php';

?>

    


<div class="span9" style="min-height:900px">
		<h4>Latest Products </h4>
		<hr class="soft"/>
    


			  <ul class="thumbnails">
<?php
$i=1;
$conn=new mysqli("localhost","root","","project");
    $sql="select * from product_tbl where fk_cat_id=2";
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
					 
					  echo '<h4 style="text-align:center"><a class="btn" href="readmore.php?id='. $row["pk_pro_id"] .'"> <i class="icon-zoom-in"></i></a> <a class="btn" href="product_summary.php?id='. $row["pk_pro_id"] .'">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rs.'. $row["pro_price"] .'</a></h4>';
					echo '</div>';
				  echo '</div>';
				echo '</li>';
		}
		?>		
			  </ul>
				</div>
</body>
</html>