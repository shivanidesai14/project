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
    public function login($mail,$pass)
    {
        $conn=database::connect();
        $sql="select * from user_tbl where pk_email_id='". $mail ."' and user_pass='". $pass ."' ";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

 /*  public function selectusers($id)
    {
        $conn=database::connect(); 
        $sql="select * from user_tbl where pk_email_id='". $id ."' " ;
        $res=$conn->query($sql);
        $row=$res->fetch_assoc();
        if($res->num_rows==1)
        {
            $n=$row["user_pass"];
            
        }
        else
        {
            $n="No Record Found";
        }
        return $n;
        database::disconnect();
    }*/
    public function selectuser($_id)
    {
         $conn=database::connect(); 
        $sql="select p.*,c.* from product_tbl p,cart_tbl c where p.pk_pro_id=c.fk_product_id and c.fk_email_id='". $_id ."' " ;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function userget()
    {
        $conn=database::connect(); 
        $sql="select * from user_tbl " ;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();

    }

    public function prodisplay()
    {
        $conn=database::connect(); 
        $sql="select * from product_tbl " ;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();

    }


}
?>