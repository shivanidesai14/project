<?php
session_start();
 $conn=new mysqli("localhost","root","","project");
 $oldimg=$_GET["img"];
 $_proid=$_GET["id"];
 
$_proname=$_POST["txtname"];
$_procolor=$_POST["txtcolor"];
$_proprice=$_POST["txtprice"];
$_promdate=$_POST["txtmdate"];
$_prowarr=$_POST["drpwarr"];
$_prostock=$_POST["txtstock"];
$_img2=$_POST["txtimg2"];
$_img3=$_POST["txtimg3"];
$_prodesc=$_POST["txtdesc"];
$fk_cat_id=$_POST["fk_cat_id"];
$_proimg=basename($_FILES["txtimg"]["name"]);
/*if($_proimg=="")
{
    $_proimg=$oldimg;
}   
else
{
    unlink($oldimg);
    move_uploaded_file($_FILES["txtimg"]["tmp_name"],"images/".$_proimg);
    $_proimg="images/".$_proimg;
}*/
 
    //echo $sql;
    if($conn->query($sql)===true)
    {
        echo "Successfull";
        header('location:prodisplay.php');
    }
    else
    {
        echo "update product_tbl set pro_name='". $_proname ."',pro_price='". $_proprice ."',pro_mfg='". $_promdate ."',pro_colour='". $_procolor ."',pro_image1='". $_proimg ."',pro_image2='".$_img2."',pro_image3='".$_img3."',pro_warr='". $_prowarr ."',pro_soh='". $_prostock ."',pro_desc='".$_prodesc."',fk_cat_id='".$fk_cat_id."' where pk_pro_id='". $_proid ."'";
        echo " Not Successfull";
    }
?>