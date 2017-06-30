<?php

$x=implode(",",$_POST["chk"]);
require 'userdb.php';
$obj=new userdatabase();
$result=$obj->userdeleteall($x);
header('location:userdisplay.php');
?>