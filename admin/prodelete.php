<?php
$id=$_GET["id"]; 
$conn=new mysqli('localhost','root','','project');
$sql="select * from product_tbl where pk_pro_id=".$id;
$res=$conn->query($sql);
$rows=$res->fetch_assoc();
unlink($row["pro_img"]);
$sql="delete from product_tbl where pk_pro_id=".$id;
if($conn->query($sql)===true)
{
    header('location:prodisplay.php');
}
else
{
    echo "Not Successful";
}
?>