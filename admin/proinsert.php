<!DOCTYPE html>
<html>
<head>
    <script src="../js/jquery-3.2.1.min.js"></script>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</head>

<body>
<?php

include 'navbar.php';

?>

<div class="jumbotron text-center" class="btn btn-primary">
  <h1>Product Insert</h1>
</div>
<form method="post" enctype="multipart/form-data" action="proinsert1.php">
<div class="container">
 
  <div class="row">
   <div class="form-group col-ld-10">
    <input type="text" name="txtname" class="form-control" id="text" placeholder="Enter Product Name">
 </div>
 </div>

 <div class="row">
   <div class="form-group col-ld-10">
    <td><input type="text" name="txtprice" class="form-control" id="text" placeholder="Enter Product Price" /></td>
 </div>
 </div>

<div class="row">
   <div class="form-group col-ld-10">
    <td><input type="text" name="txtmdate"   class="form-control" id="text" placeholder="Enter Product Manufacturer"></td>
</div>
 </div>


<div class="row">
   <div class="form-group col-ld-10">
    <td><input type="text" name="txtcolor" class="form-control" id="text" placeholder="Enter Product Color" /></td>
 </div>
 </div>
  <div class="row">
   <div class="form-group col-ld-10">
    <td><input type="file" name="txtimg"></td>
 </div>
 </div>
 

 <div class="row">
   <div class="form-group col-ld-10">
    <td><input type="text" name="txtimg2" class="form-control" id="text" placeholder="Enter Image2"></td>
 </div>
 </div>

 
 <div class="row">
   <div class="form-group col-ld-10">
    <td><input type="text" name="txtimg3" class="form-control" id="text" placeholder="Enter Image3"></td>
</div>
 </div>

 
 

 <div class="row">
   <div class="form-group col-ld-10">
    <select  name="drpwarr" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
</div>
 </div>
 
 <div class="row">
   <div class="form-group col-ld-10">
    <td><input type="number" name="txtstock" class="form-control" id="text" placeholder="Enter Stock On Hand"></td>
 </div>
 </div>

<div class="row">
   <div class="form-group col-ld-10">
    <textarea name="txtdesc" rows="5" cols="22" class="form-control" id="text" placeholder="Description"></textarea>
 </div>
 </div>

 <div class="row">
   <div class="form-group col-ld-10">
    <select name="fk_cat_id" class="form-control">
        <?php
        $conn=new mysqli("localhost","root","","project"); 
        $sql="select * from cat_tbl";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            while($rows=$result->fetch_assoc())
            {
                echo '<option value='.$rows["pk_cat_id"].'>'.$rows["cat_name"].'</option>';
            }
        }
        ?>
        </select>
 </div>
 </div>



 <div class="row">
   <div class="form-group col-ld-10">
<center><input type ="submit" name="btnadd" value="DONE" class="btn btn-info btn-lg"></center>
</div>
</div>
</form>
</body>
</html>