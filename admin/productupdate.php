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
<?php
include 'navbar.php';
$_proid=$_REQUEST["id"]; 
$_proid="";
$_proname="";
$_procolor="";
$_promdate="";
$_prostock="";
$_proimg="";
$_proprice="";
$_prowarr="";

$conn=new mysqli('localhost','root','','project');
$sql="select * from product_tbl where pk_pro_id=".$_GET["id"];
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_proid=$row["pk_pro_id"];
$_proname=$row["pro_name"];
$_procolor=$row["pro_colour"];
$_proprice=$row["pro_price"];
$_promdate=$row["pro_mfg"];
$_prowarr=$row["pro_warr"];
$_prostock=$row["pro_soh"];
$_proimg=$row["pro_image1"];
$_img2=$row["pro_image2"];
$_img3=$row["pro_image3"];
$_prosdesc=$row["pro_desc"];
?>

<body>
<div class="page-header">
  <h1>    Update    <small>Product details</small></h1>
</div>
<form method="post" action="productupdate1.php?img=<?php echo $_proimg; ?>" enctype="multipart/form-Data">
<div class="container">
<table class="table">
 
 <tr class="info">
    <td><label>NAME</label></td>
    <td><input type="text" name="txtname" value="<?php echo $_proname; ?>"/></td>
 </tr>

 <tr class="success">
    <td><label>PRICE</label></td>
    <td><input type="text" name="txtprice"  value="<?php echo $_proprice; ?>"/></td>
 </tr>

 <tr class="danger">
    <td><label>MANUFACTURING DATE</label></td>
    <td><input type="text" name="txtmdate"  value="<?php echo $_promdate; ?>"></td>
 </tr>


 <tr class="warning">
    <td><label>COLOUR</label></td>
    <td><input type="text" name="txtcolor"  value="<?php echo $_procolor; ?>"/></td>
 </tr>

  <tr class="danger">
    <td><label>IMAGE 1</label></td>
    <td><img src=<?php echo $_proimg; ?> height="100" width="80"><input type="file" name="txtimg"></td>
 </tr>
 

 <tr class="active">
    <td><label>IMAGE 2</label></td>
    <td><input type="text" name="txtimg2" value="<?php echo $_img2; ?>"></td>
 </tr>

 
 <tr class="success">
    <td><label>IMAGE 3</label></td>
    <td><input type="text" name="txtimg3" value="<?php echo $_img3; ?>"></td>
 </tr>

 
 

 <tr class="active">
    <td><label>WARRANTY</label></td>
    <td><select  name="drpwarr">
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
</select></td>
 </tr>
 
 <tr class="success">
    <td><label>STOCK ON HAND</label></td>
    <td><input type="number" name="txtstock"  value="<?php echo $_prostock; ?>"></td>
 </tr>

 <tr class="warning">
    <td><label>DESCRIPTION</label></td>
    <td><textarea name="txtdesc" rows="5" cols="22"><?php echo $_prosdesc; ?></textarea></td>
 </tr>

 <tr class="info">
    <td><label>CATEGORY</label></td>
    <td><select name="fk_cat_id">
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
    </td>
 </tr> 

<tr><td colspan="2"><center><input type="submit" class="btn btn-warning" name="btnadd" value="DONE"></center></td></tr>
</table>
</div>
</form>
</body>
</html>