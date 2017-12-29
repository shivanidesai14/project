<!DOCTYPE html>
<html lang="en">


<head>
<?php
include 'menu.php';
?>

    
</head>
<body>
<div class="span9">
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="userinsert.php">

	    <div class="control-group">
			<label class="control-label" for="inputFname1">Mail <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="Enter Mail Address" name="txtmail" required>
			</div>
		 </div>

         
	    <div class="control-group">
			<label class="control-label" for="inputFname1">Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="Enter Name" name="txtname" required>
			</div>
		 </div>
	
    
	    <div class="control-group">
			<label class="control-label" for="inputFname1">Password </label>
			<div class="controls">
			  <input type="password" id="inputFname1" placeholder="Enter Password" name="txtpass" required>
			</div>
		 </div>


	    <div class="control-group">
			<label class="control-label" for="inputFname1">Address </label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="Enter Address" name="txtadd">
			</div>
		 </div>


	    <div class="control-group">
			<label class="control-label" for="inputFname1">Mobile_Number <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="Enter Mobile Number" name="txtmno" required>
			</div>
		 </div>

         
	    <div class="control-group">
			<label class="control-label" for="inputFname1">Gender <sup>*</sup></label>
			<div class="controls">
			  
              <input type="radio" id="inputFname1" name="rbdgen" value="male" placeholder="Password" checked>Male<br/>
              <input type="radio" id="inputFname1" name="rbdgen" value="female" placeholder="Password">Female<br/>

			</div>
		 </div>

         
	    <div class="control-group">
			<label class="control-label" for="inputFname1">Profile_pic </label>
			<div class="controls">
			  <input type="file" name="txtimge">
			</div>
		 </div>

        <div class="control-group">
			
			<div class="controls">
			  <button class="btn btn-success" type="submit" name="btninsert" >Insert</button>
			</div>
		 </div>
 


    </form>
</div>
</body>
</html>