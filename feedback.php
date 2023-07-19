<?php
error_reporting (0);
		session_start(0);
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("watch2",$con);

//$u=$_POST['Unm'];
		$q=mysql_query("select * from watch2.user");
		$rw=mysql_num_rows($q);
		if($rw==0)
		{
			include("head.php");
		}
		else
		{
	//		$_SESSION['nm']=$u;
			include("head1.php");

		}
?><?php
	include("left.php");
	?>
	
	<script type="text/javascript">

function valid(aa)
{
	if(aa.name.value=="")
	{
		alert("Please Enter Name");
		return false;
	}
	if(aa.email.value=="")
	{
		alert("Please Enter Email");
		return false;
	}
	if(aa.sub.value=="")
	{
		alert("Please Enter Subject");
		return false;
	}
	if(aa.comment.value=="")
	{
		alert("Please Enter Message");
		return false;
	}
	
}
</script>
         
    <!-- end #sidebar1 -->
    <!-- begin #mainContent -->
    <div id="mainContent">
      <p>&nbsp;</p>
	  <p><font size="6"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FeedBack Information</b></font></p>
<b>	  </b><p><b>&nbsp;</b></p>
<b>	  </b><p><b>&nbsp;</b></p>
<b>	  </b><p><b>&nbsp;</b></p>
<b>	  </b><p><b></b></p>
	  <div class="mainContent">
              
                <div id="contact_form">
                   <form method="post" name="contact" action="s_feedback.php" onsubmit="return valid(this)">
                        
                        <label for="author"><b>Name:</b></label>
						 <p>
						   <input id="name" name="name" class="required input_field" type="text">
				     </p>
						 <p>&nbsp;</p>
						 <p></p>
                        <div class=""></div>
                        <label for="email"><b>Email:</b></label>
						 <p>
						   <input id="email" name="email" class="validate-email required input_field" type="text">
				     </p>
						 <p>&nbsp; </p>
						 <div class=""></div>
                        
						<label for="subject"><b>Subject:<br>
						</b></label> 
						<p>
						  <input name="sub"  class="input_field" type="text">
				     </p>
						<p>&nbsp;</p>
						<div class=""></div>
        
                        <label for="text"><b>Message:<br>
                        </b></label>
						 <p>
						   <textarea id="text" name="comment" rows="5" cols="16" class=""></textarea>
						 </p>
						 <p>&nbsp;</p>
						 <p>&nbsp; </p>
						 <div class="">	</div>
                        
                         <input value="    Send      " id="submit" name="submit" type="submit" />
                         <input value="     Reset     " id="reset" name="reset" type="reset">
				  </form>
        </div>

      </div>
					 <br class="clearfloat">
					
                     </div>
					  <?php
					 include("foot.php");
					 ?>
					 </body></html>