<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
include 'menu1.php';
?>

</head>
<body>

    <?php
$id=$_GET["id"];
$conn=new mysqli("localhost","root","","project");
$result=$conn->query("select * from product_tbl where pk_pro_id='".$id."'");
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    echo '<div class="row">';
    echo '<div class="span3" >';
    echo '<center><img src="'.$row["pro_image1"].'"></center><br><br><br>';
    
    echo '</div>';
    echo '<div class="span6">';
    echo '<h2>Product : '.$row["pro_name"].'</h2><br>';
    echo '<h2>Price: '.$row["pro_price"].'</h2><br>';
    echo '<h2>Colour : '.$row["pro_colour"].'</h2><br>';
    echo '<h2>Manufacturing Date : '.$row["pro_mfg"].'</h2><br>';
    echo '<h2>Desc : '.$row["pro_desc"].'</h2><br>';
     echo '</div>';
      echo '</div>';
}
}
else
{
    echo "not";
}
 /* echo  ' <div class="span9" style="min-height:900px">';
        echo '<hr class="soft"/>';
        echo '<div class="row">';	  
			echo '<div id="gallery" class="span3">';
            echo '<a href="themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">';
			echo	'<img src="themes/images/products/large/3.jpg" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>';
            echo '</a>';
			echo '<div id="differentview" class="moreOptopm carousel slide">';
            echo  ' <div class="carousel-inner">';
                  echo '<div>';
                   echo '<a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>';
                   echo '<a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>';
                   echo '<a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>';
                  echo '</div>';
                                  echo '</div>';
              
			 // echo '<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>';
              //echo '<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>'; 
			
              echo '</div>';
           echo '</div>';
	

echo '</div>';*/
?>
</body>
</html>