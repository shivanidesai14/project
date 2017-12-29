<!DOCTYPE html>
<html>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Tables
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="prodisplay.php">Product Table</a></li>
           <li><a href="catdisplay.php">Cat Table</a></li>
            <li><a href="cartdisplay.php">Cart Table</a></li>
             <li><a href="billdisplay.php">Bill Table</a></li>
            
        </ul>
      </li>
         </ul>
           <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">User
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="admindisplay.php">Admin</a></li>
        <li><a href="userdisplay.php">User</a></li> 
            
        </ul>
      </li>
         </ul>
      <ul class="nav navbar-nav navbar-right">
      <!-- <li>//
     // $_name= $_SESSION["mail"];
      //echo $_name;
      //$cnn=new mysqli("localhost","root","","project");
      //$sql="select * from user_tbl where 	pk_email_id='". $_name ."'";
      //$result=$cnn->query($sql);
      //while($row=$result->fetch_assoc())
      {
        //echo '<h4 style="color:grey;"><center>Welcome,'. $row["pk_email_id"] .'</center></h4>';  
      
      }  
        </li>-->
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
    </ul>
  </div>
</nav>
</html>