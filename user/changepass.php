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
		<h4>Change Password</h4>
		<hr class="soft"/>
<form method="post" action="changepassword.php">
 <div class="form-group container">
       <div class="span2">
              <label for="psw"></span><h4>Old Password</h4></label>

        </div>
        <div class="span7">
            <input type="password" class="form-control" name="oldpassword" id="psw" placeholder="Enter old Password">
        </div>      
   </div>
  <div class="form-group container" >
      <div class="span2">
   <label for="psw"><h4>New Password</h4></label>
   </div>
    <div class="span7">
              <input type="password" class="form-control" name="newpassword" id="psw" placeholder="Enter New Password">
     </div>         
  </div>
  <div class="form-group container" >
       <div class="span2">
   <label for="psw"><h4>Confirm Password</h4></label>
   </div>
    <div class="span7">
              <input type="password" class="form-control" name="conpassword" id="psw" placeholder="Enter Confirm Password">
              </div>
  </div>
  <br>
  <br>
  <center><input type="submit" class="btn-lg btn btn-success" name="btnsubmit"  value="Change Password"></center>
  </div>
  </form>
</body>
</html>