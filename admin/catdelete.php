<?php
$_id=$_GET["id"];
require 'catdb.php';
$obj=new catdatabase();
$result=$obj->catdelete($_id);
if($result===TRUE)
{
    header('location:catdisplay.php');
}
else
{
    echo "not succesfully";
}

?>