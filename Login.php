
<?php
include ("head.php");
?>
<?php
include("left.php");
?>
<html>
<body>
<script type="text/javascript">

function valid(aa)
{
	
	if(aa.email.value=="")
	{
		alert("Please Enter Email");
		return false;
	}
	if(aa.password.value=="")
	{
		alert("Please Enter Password");
		return false;
	}
	
}
</script>
<div id="mainContent">
      <p>&nbsp;</p>
	  <p><font size="6"><b>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Log In </b></font><span class="style4"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	  <a href="register.php">Create a New Account</a>
      	  <p><b>&nbsp;</b></p>
	  <p><b>&nbsp;</b></p>
	  <p><b>&nbsp;</b></p>
	  <div class="mainContent">
              
                <div id="contact_form">
                   <form method="post" name="contact" action="check_login.php" onSubmit="return valid(this)">
                        
                
                       
						 <div class=""></div>
                        <label for="email"><b>UserName:</b></label>
                        <p>
                          <input id="email" name="email" class="validate-email required input_field" type="text">
                         </p>
                         <div class="">
                           <p>&nbsp;</p>
                           <p>&nbsp;</p>
                        </div>
                        
						<label for="subject"><b>Password:<br>
					 </b></label> 
						<p>
						  <input  type="password" name="password">
						   
						 
				     </p>
						
						<div class="">
						  <p>&nbsp;</p>
						  <p>&nbsp;</p>
						  <p>&nbsp;</p>
						  <p>&nbsp;</p>
						</div>
        
                        
                     </b></label>
                         	<p>
                          			<input type="SUBMIT" value="          LOGIN          ">
									
                         		</p>
                 
				   </form>
        </div>

      </div>
	  
	  <br class="clearfloat">
					
                     </div>
	  
    

<?php
	include("foot.php");
	?>
	</body>
	</html>
	
	