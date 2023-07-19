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
<p>&nbsp;<img src="stylish_and_unusual_wall_clocks-1.jpg" alt=""  height=200 width=225/></p>
<p class="style1">
  Category &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Wall clock</p>
  
<p class="style1">Company &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Titan</p>
<p class="style1">Color &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;White</p>
<p class="style1">price &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1500</p>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="2.php">GO BACK</a></p></form>
</div>
<?php
	include 'foot.php'
?>