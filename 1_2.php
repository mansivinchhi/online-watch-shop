<?php

include("secure.php");
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
	include 'left.php'
?>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>

<div id="mainContent">
<form action="purchase.php" method="post">
<p><a href="1_2.php"><img src="images/images/8ddade5bbb475a5bf139623f5c68e744_images_180_240.jpg" alt="" height="200" width="225" /></a></p>
<p class="style1">
  Category &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Men</p>
  
<p class="style1">Company &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Fast Track</p>
<p class="style1">Color &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Red/Black</p>
<p class="style1">price &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000</p>
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
 <p class="style1">
   <input type="submit" name="BUY" value="BUY NOW" />
   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="1.php">GO BACK</a></p>
</form>
</div>
<?php
	include 'foot.php'
?>

