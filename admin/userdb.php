<?php
class userdatabase
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
    public function usergetdata()
    {
        $conn=userdatabase::connection();
        $sql="select * from user_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function useradmindetail($email)
    {
        $conn=userdatabase::connection();
      $sql="select * from user_tbl where pk_email_id='".$email."'";
      $res=$conn->query($sql); 
      return $res;
    }
    public function userinsert($_email,$_name,$_pass,$_add,$_mno,$_gen,$_targetfile)
    {
      $conn=userdatabase::connection();
      $sql="insert into user_tbl values('". $_email ."','". $_name ."','". $_pass ."','". $_add ."','". $_mno ."','". $_gen ."','". $_targetfile ."','yes','','user')";
      $res=$conn->query($sql); 
      return $res;
    }
       public function userdelete($_id)
    {
        $conn=userdatabase::connection();
        $sql="delete from user_tbl where pk_email_id='". $_id ."'";
         $res=$conn->query($sql);
         return $res;
    }
     public function userdeleteall($x)
    {
         $conn=userdatabase::connection();
        $sql="delete from user_tbl where pk_email_id In($x)";
         $res=$conn->query($sql);
         return $res;
    }
}