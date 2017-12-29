<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php
include 'menu1.php';

?>
<?php

$_email= $_SESSION["mail"];
$conn=new mysqli("localhost","root","","project");
 $sql="select * from user_tbl where pk_email_id='". $_email ."'";
 $result=$conn->query($sql);
$row=$result->fetch_assoc();
$_name=$row["user_name"];
$_pass=$row["user_pass"];
$_add=$row["user_address"];
$_mob=$row["user_mob_no"];
$_gender=$row["user_gender"];
$_img=$row["user_profile_pic"];
?>

<form method="post" action="profileupdatecode.php?img=<?php echo $_img; ?>" enctype="multipart/form-data">

<div class="span9" style="min-height:900px">
		<h4>Update Profile</h4>
		<hr class="soft"/>
    <div class="form-group container">
   <div class="input-group">
    <div class="span2">  
  <h4> Email </h4> 
  </div>
   <div class="span7">  
   <input id="email" type="text" class="form-control" name="txtemail" value="<?php echo $_email; ?>" placeholder="Email">
  </div>
  </div>
  </div>
  <div class="form-group container" >
    <div class="input-group">
   <div class="span2">  
  <h4> Name </h4> 
  </div>
    <div class="span7">
     <input id="msg" type="text" class="form-control" name="txtname" value="<?php echo $_name; ?>" placeholder="Username" >
  </div>
  </div>
  </div>
   <div class="form-group container">
    <div class="input-group">
    <div class="span2">  
  <h4> Password </h4> 
  </div>
     <div class="span7">  
    <input id="password" type="password" class="form-control" name="txtpass" value="<?php echo $_pass; ?>" placeholder="Password">
  </div>
  </div>
  </div>
  <div class="form-group container">
    <div class="span2">  
  <h4> Address </h4> 
  </div>
    <div>
      <div class="span7">  
    <textarea class="form-control" rows="5" name="txtadd"  placeholder="Address"><?php echo $_add; ?></textarea>
    </div>
  </div>
  </div>
   <div class="form-group container">
   <div class="input-group">
     <div class="span2">  
  <h4> Mobile No. </h4> 
  </div>
     <div class="span7">  
    <input  type="text" class="form-control" name="txtmob" value="<?php echo $_mob; ?>" placeholder="Mobile No" >
  </div>
  </div>
  </div>
   
   <div class="form-group container">
  <div class="span2">  
  <h4> Gender </h4> 
  </div>
   <div class="span7">  
  <div class="radio">
  <label><input type="radio" name="rbt1" <?php if($_gender=="Male"){ echo "checked";} ?> value="male">Male</label>
   <label><input type="radio" name="rbt1" <?php if($_gender=="Female"){ echo "checked";} ?> value="female">Female</label>
</div>
</div>
</div>

<div class="form-group container">
    <div class="input-group">
      <div class="span2">  
      <h4> Profile Pic </h4> 
      </div>
       <div class="span7">  
     <img src="<?php echo $_img; ?>"style="height:200px;width:200px;">
     <input type="file" name="txtimg" >
  </div>
  </div>
  </div>
  <br>
<center><input type="submit" class="btn btn-success btn-lg" name="btnupdate" value="Update Record"></center> 

</form>
</body>
</html>