<?php
class database
{
    private static $conn=null;

    public static function connect()
    {
        self::$conn=mysqli_connect("localhost","root","","project");
        return self::$conn;
    }

    public static function disconnect()
    {
        mysqli_close(self::$conn);
        self::$conn=null;
    }    
    
    public function insertuser($mail,$name,$pass,$add,$mobile,$gen,$img,$veri,$captcha,$_type)
    {
         $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="insert into user_tbl values('". $mail ."','". $name ."','". $pass ."','". $add ."','". $mobile ."','". $gen ."','". $img ."','". $veri ."','". $captcha ."','". $_type ."')";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }



}
?>