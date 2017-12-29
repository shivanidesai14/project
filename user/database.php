<?php
class database
{
    private static $conn=NULL;
    private static function connection()
    {
        self::$conn=mysqli_connect("localhost","root","","project");
        return self::$conn;
    }
    private static function disconnect()
    {
        self::$conn=mysqli_close();
        self::$conn=null;
    }
public function changepassword($_oldpass,$_newpass,$_email)
    {
         $conn=database::connection();
         $sql="select * from user_tbl where pk_email_id='".  $_email ."' and user_pass='". $_oldpass ."'";
         $res=$conn->query($sql);
         if($res->num_rows>0)
         {
             $sql="update user_tbl set user_pass='". $_newpass ."' where pk_email_id='". $_email ."'";
             $res=$conn->query($sql);
             return $res;       
         }
         else
         {
             echo " uncsscefull ";
         }
    }
}
     ?>