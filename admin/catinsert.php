<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php

include 'navbar.php';

?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<div class="jumbotron text-center">
  <div class="container">
    <h1>Cat Insert</h1>
  </div>
</div>
 <div class="form-group container">
              <label for="usrname">Cat id</label>
              <input type="text" class="form-control" name="txtid" id="usrname" placeholder="Enter id">
   </div>
  <div class="form-group container" >
   <label for="username">Cat name</label>
    <input type="text" class="form-control" name="txtname" id="psw" placeholder="Enter name">
  </div>

  <div class="form-group container">
   
<center><input type="submit" class="btn btn-success btn-lg"  name="btninsert" value="Insert"></center>
</div>
</form>

</body>
</html>