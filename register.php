<?php 
include("head.php");
?>

<?php
include 'left.php';
?>
<head>
<script type="text/javascript">

function valid(aa)
{
	if(aa.fname.value=="")
	{
		alert("Please Enter Name");
		return false;
	}
	
	if(aa.lname.value=="")
	{
		alert("Please Enter Name");
		return false;
	}
	if(aa.email.value=="")
	{
		alert("Please Enter Email");
		return false;
	}
	
	if(aa.u_nm.value=="")
	{
		alert("Please Enter User Name");
		return false;
	}
	if(aa.pwd.value=="")
	{
		alert("Please Enter Password");
		return false;
	}
	if(aa.cpwd.value=="")
	{
		alert("Please Enter conform password");
		return false;
		
			}
	if(aa.gender.value=="")
	{
		alert("Please Enter Gender");
		return false;
	}
	
	}
	function alert1()
	{
		var a=document.getElementById("pwd").value;
		var b=document.getElementById("cpwd").value;
	if(a!=b)
	 {
	 alert("password not match");
	document.getElementById('cpwd').focus();
	return false;
	 }	
	 return true;
	}
	
	
	
	
</script>
  </head><body>
	<div id="mainContent">
              
                <div id="contact_form">
                  <form method="post" name="contact" action="chk_signup.php" onSubmit="return valid(this)" >
                        
                         <p align="center"><font size="5">Create a New Account</font></p>
                        <div class=""></div>
                        <label for="fname"><b>First Name:</b></label>
						 <p>
						   <input id="fname" name="fname" class="validate-email required input_field" type="text">
                       </p>
						 
						 <p>&nbsp;</p>
						
						 <p></p>
                        <div class=""></div>
                        <label for="lname"><b>Last Name:</b></label>
						 <p>
						   <input id="lname" name="lname" class="validate-email required input_field" type="text">
                       </p>
						 
						 <p>&nbsp;</p>
						
                        <div class=""></div>
                        <label for="email"><b>Email:</b></label>
<p>
						   <input id="email" name="email" class="validate-email required input_field" type="text" >
				    </p>
						 <p>&nbsp;</p>
						
                        <div class=""></div>
                        <label for="u_nm"><b>Choose Your User Name:</b></label>
						 <p>
						   <input id="u_nm" name="u_nm" class="validate-email required input_field" type="text">
				     </p>
						 <p>&nbsp; </p>
						 <div class=""></div>
                        
						<label for="pwd"><b>Password:<br>
					 </b></label> 
						<p>
						  <input name="pwd" id="pwd" class="input_field" type="password" >
				     </p>
					 
					 <p>&nbsp; </p>
						 <div class=""></div>
                        
						<label for="cpwd"><b>Confirm Password:<br>
					 </b></label> 
<p>
						  <input name="cpwd" id="cpwd" class="input_field" type="password" onBlur="alert1();" >
				     </p>
						
						<p>&nbsp;</p>
						 <div class=""></div>
                        
						<label for="gender"><b>Gender:
					 </b>
					 <input type="radio" name="gender" value="FEMALE" />FEMALE
					 <input type="radio" name="gender"  value="MALE"/>MALE
					 
					 
						
						  
						  
				     </label>
						  
				     </p>
					 
					 <p>&nbsp; </p>
						<p>&nbsp;</p>
						<div class=""></div>
        
                        
                     </b></label>
                        <p>&nbsp;</p>
						 <p>&nbsp; </p>
						 <div class="">	</div>
                        
                         <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input value="      Sign in     " id="submit" name="submit" type="submit">
                         </p>
                         <p>&nbsp;</p>
                         <p>&nbsp;</p>
                         <p>&nbsp;</p>
                         <p>&nbsp;</p>
                         <p>&nbsp;</p>
                         <p>&nbsp;</p>
                  </form>
        </div>

    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					 <p>&nbsp;</p>
					</div> 
					  <?php
					  include ("foot.php");
					  ?>
