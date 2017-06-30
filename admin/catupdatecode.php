<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 $_catid=$_POST["catid"];
$_catname=$_POST["catname"];
require 'catdb.php';
$obj1=new catdatabase();
$result1=$obj1->catupdate($_catname,$_catid);
   
    if($result1===TRUE)
    {

        header('location:catdisplay.php');

    }
    else
    {
       
         echo " not succesfully";


        }



 }


?>