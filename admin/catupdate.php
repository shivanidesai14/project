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
<?php
$_cid=$_GET["id"];
require 'catdb.php';
$obj=new catdatabase();
$result=$obj->getcat($_cid);
$row=$result->fetch_assoc();
$_catid=$row["pk_cat_id"];
$_catname=$row["cat_name"];
?>
<form method="post" action="catupdatecode.php">
<div class="jumbotron text-center">
  <div class="container">
    <h1>Cat Update</h1>
  </div>
</div>
<div class="form-group container">
              <label for="usrname">Cat Id</label>
              <input type="text" class="form-control" name="catid" value=<?php echo $_catid; ?>>
</div>
 <div class="form-group container">
              <label for="usrname">Cat Name</label>
              <input type="text" name="catname" class="form-control" value=<?php echo $_catname; ?>>
</div>
<center><input type="submit" class="btn btn-success btn-lg"  name="btnsubmit" value="Submit"></center>


</form>

</body>
</html>