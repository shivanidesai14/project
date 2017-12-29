<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
 <body>

 <?php

 include 'menu1.php';

 ?>    
<!-- Header End====================================================================== -->
<?php
 $_email=$_SESSION["mail"];
?>
	<div class="row">
		<div class="span3">
		<h4>Contact Details</h4>
		<p>	18 Fresno,<br/> CA 93727, India
			<br/><br/>
			info@bootsshop.com<br/>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:bootsshop.com
		</p>		
		</div>
		<div class="span3">
		<h4>Opening Hours</h4>
			<h5> Monday - Friday</h5>
			<p>09:00am - 09:00pm<br/><br/></p>
			<h5>Saturday</h5>
			<p>09:00am - 07:00pm<br/><br/></p>
			<h5>Sunday</h5>
			<p>12:30pm - 06:00pm<br/><br/></p>
		</div>
		<div class="span3">
		<h4>Email Us</h4>
		<form class="form-horizontal" method="post" action="review.php">
        <fieldset>
          <div class="control-group">
           
              <input type="text" name="txtname" placeholder="name" class="input-xlarge"/ >
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="txtemail" placeholder="email" value="<?php echo $_email; ?>" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="txtsubject" placeholder="subject" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" name="txtreview" placeholder="Your View..." id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <input class="btn btn-large" type="submit" name="btnsubmit" value="Send Messages"></button>

        </fieldset>
      </form>
		</div>
	</div>
</div>
</div>
</body>
</html>