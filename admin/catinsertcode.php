<?php
if(isset($_POST["btninsert"]))
{
$_id=$_POST["txtid"];
$_name=$_POST["txtname"];
require 'catdb.php';
$obj=new catdatabase();
$result=$obj->catinsert($_id,$_name);
if($result===TRUE)
{
    header('location:catdisplay.php');
}
else
{
    echo "not inserted";
}
}
?>