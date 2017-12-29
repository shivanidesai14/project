

<?php
$_id=$_GET["id"];
$conn=new mysqli("localhost","root","","project");
    $sql="delete from cart_tbl where pk_cart_id='". $_id ."'";
    $result=$conn->query($sql);
if($result===TRUE)
{
    header('location:cartdisplay.php');
}
else
{
    echo "not succesfully";
}

?>

