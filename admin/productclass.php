
<?php 
class product
{
    private static $con=null;

    private static function connect(){
        self::$con=mysqli_connect('localhost','root','','project');
        return self::$con;
    }

    private static function disconnect(){
        self::$con=mysqli_close();
        self::$con=null;
    }

    public function getAllProduct(){
        $con=product::connect();
        $sql="select p.*,c.* from product_tbl p,cat_tbl c where c.pk_cat_id=p.fk_cat_id";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }

    public function deleteAll($arr)
    {
        $con=product::connect();
        $sql="delete from product_tbl where pk_pro_id In ($arr)";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }
    public function insertProduct($_proname,$_proprice,$_promdate,$_procolor,$_proimg,$_img2,$_img3,$_prowarr,$_prostock,$_prodesc,$fk_cat_id){
        $con=product::connect();
        $sql="insert into product_tbl values('". NULL ."','". $_proname ."','". $_proprice ."','". $_promdate ."','". $_procolor ."','". $_proimg ."','". $_img2 ."','". $_img3 ."','". $_prowarr ."','".$_prostock."','". $_prodesc ."','". $fk_cat_id ."')";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }
    
    public function updateProduct($pro_id,$pro_name,$pro_color,$pro_price,$pro_mdate,$pro_warr,$pro_stock,$pro_img,$fk_cat_id){
        $con=user::connect();
        $sql="update product_tbl set pro_name='". $_proname ."',pro_color='". $_procolor ."',pro_price='". $_proprice ."',pro_mdate='". $_promdate ."',pro_warr='". $_prowarr ."',pro_stock='". $_prostock ."',pro_img='". $_proimg ."' where pro_id='". $_proid ."'";
        $res=$con->query($sql);
        return $res;
        user::disconnect();
    }
}
?>