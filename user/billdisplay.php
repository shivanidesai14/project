<!DOCTYPE html>
<html>
<head>
<?php
include 'menu1.php';
?>
</head>
<body>
<div class="span9">
    <h3> Buy A Product ??</h3>	
	<hr class="soft"/>
	
			<div class="well">
			<h3>Fill The Form</h3><br/>
		
			<form method="post" action="billshow.php">
			  <div class="control-group">
				<label class="control-label" ><h4> Address </h4></label>
				<div class="controls">
				  <input class="span4"  required type="text" id="inputEmail1" placeholder="Address" name="txtadd">
				</div>
			  </div>

              <div class="control-group">
				<label class="control-label"> <h4>Pin Code </h4></label>
				<div class="controls">
				  <input class="span4"  required type="text" id="inputEmail1" placeholder="Pin Code" name="txtpin">
				</div>
			  </div>
			  
       
              
              <div class="control-group">
				<label class="control-label"><h4> Payment Type</h4></label>
				<div class="controls">
				  <input type="radio" name="paytype" value="Cash On Delivery" checked>Cash On Delivery
                  <input type="radio" name="paytype" value="Master Card">Master Card<br/>
                  <input type="radio" name="paytype" value="Visa Card">Visa Card
                  <input type="radio" name="paytype" value="PAytm">Paytm<br/>
				</div>
			  </div>

        
			  <div class="controls">
			  <button type="submit" class="btn btn-large" >Buy</button>
			  </div>
			</form>
		</div>
    </div>
</body>

</html>