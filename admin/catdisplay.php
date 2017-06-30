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
require 'catdb.php';
$obj=new catdatabase();
$result=$obj->catgetdata();
?>
<form method="post" action="catdeleteall.php">
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>Cat Table</h1>
</div>
<div class="container">
<table class="table table-bordered">
<thead>
<th>Action</th>
<th>Name</th>
<th>Action</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
            echo '<tr>';
              echo '<td><input type="checkbox" name="chk[]" value="'. $row["pk_cat_id"] .'" ></td>';
            echo '<td>'. $row["cat_name"] .'</td>';
             echo '<td><a href="catdelete.php?id='.$row["pk_cat_id"].'"><span  class="glyphicon glyphicon-trash">
        </span></a>|<a href="catupdate.php?id='.$row["pk_cat_id"].'"><span  class="glyphicon glyphicon-edit"></span></a></td>';
            echo '</tr>';
    }

}



?>
</table>
</form>
<center><a href="catinsert.php"><input type="button" value="Insert" class="btn btn-success btn-lg"></a>&nbsp&nbsp&nbsp<input type="submit" value="Delete All" class="btn btn-danger btn-lg"></a></center>
</body>
</html>