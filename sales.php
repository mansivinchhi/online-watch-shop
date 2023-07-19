<?php
//error_reporting(0);
//	session_start();											
 	include ('admin/config.php');
	if(isset($_SESSION["username"]))
	{
		$username=$_SESSION["username"];		
		if($_SESSION["username"]=="Guest")
		{
		require("home.php");
			echo ("<script language='JavaScript'>alert('Be A Member from Login')</script>");
			 
 			 exit(0);			
		}
	
	}
	if(isset($_REQUEST["search"]))
	{
		$a=$_REQUEST["findproduct"];
		$b=$_REQUEST["search"];
		if($b=="Search")
		{
			if(is_numeric($a))
				$qry="select * from additem where price<=$a and display=1";	
			else
				$qry="select * from additem where name like '%$a%' and display=1";	
		}
		else 
			$qry="select * from additem where display=1";
	}		
	else
		$qry="select * from additem where display=1";		
		
	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);	
?>
<body  bgcolor=white>
<form method=post action="sales.php">
<script language="JavaScript" src=flasher/myfunction.js></script>
<table  width="800" align="center" cellpadding="3" cellspacing="0" border=2 bordercolor=blue> 
<tr height=10%>
		<td>
		<embed src=main.swf height=100 width=800></embed>
		</td>
	</tr>
	<tr height=5%>
		<td>
			<embed src=menu.swf height=53 width=800></embed>
		</td>
	</tr>

<tr>
	<td align="right">
		<!--<font color=green><b>Enter Product Name : </b></font>
		 -->       <!-- <input type="text" size=40 name="findproduct" onBlur="c_out(this,1)" onFocus="c_in(this,3)">
		         <input type="submit" name="search" value="Search">	
	                        <input type="submit" name="search" value="All">	
 -->		        <a href="logout.php"><font color=blue size=4 face=tahoma>Logout</font></a>
	</td>
</tr>
<tr>
	<td>
		<?php
 	include ('admin/config.php');

	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);	
	echo("<table align=center cellpadding='0' border=2 bordercolor=green><tr>
		");
	if($chk >0)
	{
		$count=0;
		while($row=mysql_fetch_row($tb))
		{
			if($count%5==0)	
				echo("<tr>");
			
			echo("<td ><table width=100 height=100 class=first><tr>");			
			echo("<td align=center colspan=2>
					<a  href='addtocart.php?id=$row[1]'>
					<img src='images/$row[6]' width=125 height=125 alt='$row[1]' border=1>
					</a>
			          </td>
			          <tr>
			                 <td align=center height=40><font color=white>$row[1]</font></td></tr>	
			          <tr><td align=center><font color=red>Rate :</font></td>
			                  <td align=center><font color=red>$row[2]</font></td>");
			echo("</tr></table></td>");
			$count++;
		}	
	}
	else
	{
		echo ("<tr><td colspan=8 align=center><font color=white size=3>No Records Found</font></td></tr>");		
	}
	echo("</table>");
?>

	</td>
</tr>
<tr height=5%>
		<td>
			<table border=0 height=45 width=800 align=center class=first bgcolor=#000000 > 
		<tr align=center>
				<td width=140><a href='home.php'><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="+1">Home</font></a></td>
				<td width=140><a href='aboutus.php'><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="+1">About Us</font></a></td>
				<td width=140><a href='sales.php'><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="+1">Sales</font></a></td>
				<td width=140><a href='suggetion.php'><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="+1">Suggetion</font></a></td>
				<td width=140><a href='contactus.php'><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="+1">Contact US</font></a></td>
				<td width=140><a href='gallary.php'><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="+1">Gallary</font></a></td>
					

	</tr>
	</table>
		</td>
		</tr>
</table>
</form>

</body>	 
