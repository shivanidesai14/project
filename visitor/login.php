
<!DOCTYPE html>
<html lang="en">


<head>
<?php
include 'menu.php';
?>

    
</head>
<body>
<form method="post" action="loginuser.php">

<div class="span9" style="min-height:900px">
		<h1>Login</h1>
		<hr class="soft"/>
 <div class="form-group container">
       <div class="span2">
              <label for="psw"></span><h4>Name</h4></label>

        </div>
        <div class="span7">
            <input type="text" class="form-control" name="txtmail" id="psw" placeholder="Enter E-mail Id">
        </div>      
   </div>
  <div class="form-group container" >
   <div class="form-group container" >
      <div class="span2">
   <label for="psw"><h4>Password</h4></label>
   </div>
    <div class="span7">
              <input type="password" class="form-control" name="txtpass" id="psw" placeholder="Enter Password">
     </div>         
  </div>
   
  
<br>
  <br>
  <div class="span7">
  <input type="submit" class="btn-lg btn btn-success" name="btnsubmit"  value="Login">
  </div>
<div class="container">
 <div class="span9">
  <!-- Trigger the modal with a button -->
  <div class="modal-footer">
          <p><h4>Forgot <a href="forgetpass.php">Password?</a></h4></p>
 </div>
    </div>
       
 
</div>

</form>

</body>
</html>