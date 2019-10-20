<?php
include ("themes.php");
?>
	<center>
      <div class="container2 card">
        
          <form method="post" action="user.php" id="signUp">
             <h2>Create User</h2><br>
             <div class="input-group flex-nowrap">
  <div class="input-group">
    <label for="fname">First Name <span>*</span></label>
  
   <input type="text" class="form-control col-md-7" id="fname" placeholder="Enter first name" name="first_name" required="" style="margin-left:19px;">  
</div>
</div>
       
<div class="input-group flex-nowrap">
    <div class="input-group">
           <label for="lname">Last Name </label>
    <input type="text" class="form-control col-md-7" placeholder="Enter Last name" name="last_name" style="margin-left:30px; ">  
</div>
      </div>
<div class="input-group flex-nowrap">
    <div class="input-group">
            <label for="mailid">Email Id<span>*</span> </label>  
    <input type="text" class="form-control col-md-7" placeholder="Enter Email-id" name="email_id" required="" style="margin-left: 43px;">  
</div>
    </div>
<div class="input-group flex-nowrap">
    <div class="input-group">
            <label for="mobileNo">Mobile No.<span>*</span> </label>  
    <input type="number" class="form-control col-md-7" placeholder="Enter Mobile Number" name="number" required="" style="margin-left:20px;">  
</div>
        </div>
   
    <div class="row">
    	<a href="signUp.php" style="color: #fff;"><button class="btn btn-success" type="submit" name="submit">Submit</button></a>
    	<input class="btn btn-danger" type="reset" name="reset">
    </div>

		</form>
	</div>
</center>

	<?php

include("footer.php");
	?>
