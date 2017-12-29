<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_proname=$_POST["txtname"];
$_proprice=$_POST["txtprice"];
$_promdate=$_POST["txtmdate"];
$_procolor=$_POST["txtcolor"];


$_prowarr=$_POST["drpwarr"];
$_prostock=$_POST["txtstock"];
$_prodesc=$_POST["txtdesc"];
$_proimg="../images/".basename($_FILES["txtimg"]["name"]);
$_img2=$_POST["txtimg2"];
$_img3=$_POST["txtimg3"];
$fk_cat_id=$_POST["fk_cat_id"];
/*echo $_proname;
echo $_proprice;
echo $_promdate;
echo $_procolor;
echo $_prowarr;
echo $_prostock;
echo $_prodesc;
echo $fk_cat_id;*/



/*$_target_dir="../images/"
$_targetfile=$_target_dir.basename($_FILES["txtimg"]["name"]); */
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"],$_proimg))
{
require 'productclass.php';
$obj=new product();
$result=$obj->insertProduct($_proname,$_proprice,$_promdate,$_procolor,$_proimg,$_img2,$_img3,$_prowarr,$_prostock,$_prodesc,$fk_cat_id);
//    $sql="insert into product_tbl values(null,'". $_proname ."','". $_procolor ."','". $_proprice ."','". $_promdate ."','". $_prowarr ."','". $_prostock ."','". $_proimg ."','".$fk_cat_id."')";
    if($result===true)
    {
        echo "Successfull";
        header('location:prodisplay.php');
    }
    else
    {
   echo "insert into product_tbl values('". $_proname ."','". $_proprice ."','". $_promdate ."','". $_procolor ."','". $_proimg ."','". $_img2 ."','". $_img3 ."','". $_prowarr ."','".$_prostock."','". $_prodesc ."','". $fk_cat_id ."')";
        echo " Not Successfull";
    }
}
}
?>