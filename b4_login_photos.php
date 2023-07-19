<?php
session_start(0);
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("watch2",$con);
	$q=mysql_query("select * from watch2.user");
	$rw=mysql_num_rows($q);
	if($rw==0)
	{
		include("head.php");
	}
	else
	{
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
 	<p>&nbsp;</p>
 	<p>&nbsp;</p>
 	<p>&nbsp;</p>
 	<p>&nbsp;</p>
 	<p><font size = 5><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If You Want To Buy.</font></p>
	  
	  <p><font size = 5><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You Must Log In.</font></p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p><a href="Login.php">Have An Account Log In Here</a>	</p>
	  <p>&nbsp;</p>
	  <p>      <a href="register.php">Don't Have An Account Sign Up Here</a>
	    </p>
           </p>
    </div>
      <?php
	  include("foot.php");
	  ?>
				

