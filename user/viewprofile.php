<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<head>
<?php
include 'menu1.php';
?>

    
</head>
<body>
    
<div class="span9" style="min-height:900px">
		<h4>Your Profile</h4>
		<hr class="soft"/>

		
			  <ul class="thumbnails">
<?php
$_email=$_SESSION["mail"];
$conn=new mysqli("localhost","root","","project");
    $sql="select * from user_tbl where pk_email_id='". $_email ."'";
    $result=$conn->query($sql);
 

		while($row=$result->fetch_assoc())
		{
 echo '<div class="row">';
    echo '<div class="span3" >';
    echo '<center><img src="'.$row["user_profile_pic"].'" style="height:400px;width:450px;" class="img-thumbnail"></center><br><br><br>';
    echo '</div>';
    echo '<div class="span6">';
     echo '<h2>Name : '.$row["user_name"].'</h2><br>';
       echo '<h2>Password : '.$row["user_pass"].'</h2><br>';
    echo '<h2>No : '.$row["user_mob_no"].'</h2><br>';
    echo '<h2>Address : '.$row["user_address"].'</h2><br>';
    echo '<h2>Gender : '.$row["user_gender"].'</h2><br>';
     echo '</div>';
      echo '</div>';
		}
		?>		
			  </ul>

        <center><a href="profileupdate.php"><input type="button" value="update profile" class="btn btn-danger btn-lg"></a>&nbsp&nbsp&nbsp<a href="changepass.php"><input type="button" value="Change Password" class="btn btn-success btn-lg"></a></center>
				</div>
</body>
</html>