<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
<body>
<?php
include 'navbar.php';
?>
<?php
require 'userdb.php';
$obj=new userdatabase();
$result=$obj->usergetdata();
?>
<form method="post" action="deletealladmin.php">
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>Admin</h1>
</div>
<div class="container">
<table class="table">
<thead>
<th>Action</th>
<th>Name</th>
<th>Email</th>
<th>Image</th>
<th>Action</th>
<th>View More</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        if($row["user_type"]==="admin")                                    
        {

        
            echo '<tr>';
            echo '<td class="active"><input type="checkbox" name="chk[]" value="'. $row["pk_email_id"] .'" ></td>';
            echo '<td class="success">'. $row["user_name"]  .'</td>';
            echo '<td class="info">'. $row["user_gender"] .'</td>';
            echo '<td><img src="../'. $row["user_profile_pic"] .'" style="height:200px;width:200px;" class="img-responsive"></td>';
             echo '<td><a href="admindelete.php?id='. $row["pk_email_id"].'"><span  class="glyphicon glyphicon-trash btn btn-danger"></span></td>';
             echo '<td><a href="viewuseradmindetail.php?id='.  $row["pk_email_id"] .'"><span  class="glyphicon glyphicon-fullscreen btn btn-success"></span></td>';
            echo '</tr>';
        }
    }

}

?>

</table>
</form>
<center><a href="admininsert.php"><input type="submit" value="Insert" class="btn btn-info btn-lg"></center>
</body>
</html>