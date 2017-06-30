<?php
if(isset($_POST["btninsert"]))
{

$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
$_add=$_POST["txtadd"];
$_mno=$_POST["txtmno"];
$_gen=$_POST["rbt1"];
$target_dir="../images/";
$_targetfile=$target_dir.basename($_FILES["txtimg"]["name"]);
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"],$_targetfile))
{
require 'userdb.php';
$obj=new userdatabase();
$result=$obj->userinsert($_email,$_name,$_pass,$_add,$_mno,$_gen,$_targetfile);
if($result===TRUE)
{
    header('location:userdisplay.php');
}
else
{
    
    echo "not succesfully";
}
}

}


?>