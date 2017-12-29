<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
include 'menu1.php';
?>
</head>
<body>
<div class="span9">
<?php
$_add=$_POST["txtadd"];
$_qty=$_POST["txtqty"];
$_paytype=$_POST["paytype"];
$_pid=$_SESSION["pid"];
$_mail=$_SESSION["mail"];

$conn=new mysqli("localhost","root","","project");
$result=$conn->query("select * from product_tbl where pk_pro_id='".$_pid."'");
$row=$result->fetch_assoc();
$_name=$row["pro_name"];
$_amt=$row["pro_price"];
$_img=$row["pro_image1"];
$_color=$row["pro_colour"];
$_warr=$row["pro_warr"];
$_bill=$_amt*$_qty;
 $conn=new mysqli("localhost","root","","project");
$result=$conn->query("insert into bill_tbl values('". null ."','". $_mail ."','". $_pid ."','". $_qty ."','". $_bill ."','". null ."','". $_add ."','". $_paytype ."')");
   

   //mail code

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";

    

$message="Your Total Bill Amount is" .$_bill;
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = ' veri ';

// Sender email address and name
$mail->SetFrom('maildemo254@gmail.com', 'Bill');

$email1=$_mail;
// reciever address, person you want to send
$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
    echo '<script>';
        echo 'alert("'. $msg .'")';
        echo '</script>';




?>
</div>
<div class="span9">
	<table class="table table-bordered">
              <thead>
                <tr>
                   <th><b><h3 align="center">Product</h3></b></th> 
                  <th><b><h3 align="center">Product Name</h3></b></th>
                  <th><b><h3 align="center">Warranty</h3></b></th>
                  <th><b><h3 align="center">Color</h3></b></th>
				  <th><b><h3 align="center">Price</h3></b></th>
                  
                  <th><b><h3 align="center">Quantity</h3></b></th>
                  <th><b><h3 align="center">Total</h3></b></th>
				</tr>
              </thead>

              <tbody>
              <tr>
              <td> <h5><img src="<?php echo $_img; ?>"style="width:130px;height:110px"></h5> </td>
              <td><h5> <?php echo $_name; ?> </h5> </td>
              <td><h5> <?php echo $_warr; ?> </h5> </td>
              <td><h5> <?php echo $_color; ?></h5>  </td>
              <td><h5> <?php echo $_amt; ?></h5>  </td>
              <td> <h5><?php echo $_qty; ?> </h5> </td>
              <td> <h5><?php echo $_bill; ?> </h5> </td>

             </tr>

            
            </tbody>
    </table>
</div>
</body>
</html>