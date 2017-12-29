<?php
session_start();
?>
<?php
$_email=$_SESSION["mail"];
$_oldpassword=$_POST["oldpassword"];
$_newpassword=$_POST["newpassword"];
$_conpassword=$_POST["conpassword"];
if($_newpassword==$_conpassword)
{
    require 'database.php';
    $obj=new database;
   $result= $obj->changepassword($_oldpassword,$_newpassword,$_email);
   if($result===TRUE)
   {
      echo' <script>';
        echo 'alert ("password change succesfully")';
       echo '</script>';
       header('location:viewprofile.php');
       
   }
   else
   {
        echo "not succsessfully";
   }
}
else
{
    echo "passwords are not same";
}

?>