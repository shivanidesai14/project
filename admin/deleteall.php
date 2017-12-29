<?php
$all=implode(",",$_POST["chk"]);

require 'productclass.php';
$obj=new product();
$result=$obj->deleteAll($all);
header('location:prodisplay.php');
?>