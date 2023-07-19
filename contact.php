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
?>  
  <?php
  include("left.php");
  ?>
    <!-- end #sidebar1 -->
    <!-- begin #mainContent -->
    <div id="mainContent">
      <p>&nbsp;</p>
	  <p><font size = 6><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contact  Information</font></p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p></b></p>
	  <div class="mainContent">
              
                <div id="contact_form">
                  <form method="post" name="contact" action="#">
                        
                        <label for="author"><b>Name:</b></label>
					    <P>&nbsp;</P>
						 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>	MAHA LAXMI WATCH SELLING</b></p>
						 <p>&nbsp;	</p>
						 <p>&nbsp;</p>
                        <div class=""></div>
                        <label for="email"><b>Email:</b></label>
						<P>&nbsp;</P>
						 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>mahalaxmi_watch@gmail.com</b></p>
					    <p>&nbsp;</p>
						 <p>&nbsp; </p>
						 <div class=""></div>
                        
						<label for="subject"><b>Fax  no: <br />
					 </b></label> 
					   <P>&nbsp;</P>
						 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>227356</b></p>
						 <p>&nbsp;</p>
						 <P>&nbsp;</P>
						 	<label for="subject"><b>Location: <br />
							
					 </b></label> 
					   <P>&nbsp;</P>
					   
						 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Jamnagar,Gujarat,India</b></p>
						 <p>&nbsp;</p>
					    <div class=""></div>
        
                        <label for="text"><b><br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                    </b></label>
                        <div class=""></div>
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
