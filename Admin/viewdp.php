<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
		require("home.php");
		exit (0);
	}
	else
	{
		$uname=$_SESSION["username"];
		if($uname=="Guest")
		{
			require("home.php");
			exit (0);
		}
	}

 	include ('config.php');
	if(isset($_REQUEST["d"]))
	{
		
		$delete=$_REQUEST["d"];
		$qry="delete from delivery_payment where billno='$delete'";
		$tb=mysql_query($qry,$link);		
	}
	$a=$_REQUEST["finduser"];
	$b=$_REQUEST["search"];
	if($b=="Search")
	{
		$qry="select * from delivery_payment where billno like '$a%' ";	
	}
	else 
	{
		$qry="select * from delivery_payment";		
	}

	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);
?>
<body background="../flasher/16.jpg">
<form method=post action="viewdp.php">
<script language="JavaScript" src=../flasher/myfunction.js></script>
	<?php include ('header.php');?>
<table border=1 width=810 align=center class=first bgcolor=#999999>
	<tr valign=center align=center bgcolor=#CCCCCC>
		<td colspan=2><font color=red><b>Enter Bill No.</b></font></td>
		<td colspan=4><img src='../flasher/user.png'>&nbsp;&nbsp;&nbsp;
		<input type="text" size=40 name="finduser" onBlur="c_out(this,1)" onFocus="c_in(this,3)">
		       <input type="submit" name="search" value="Search">
			    <img src='../flasher/search.png'>
                <input type="submit" name="search" value="All"></td>
		<td><a href="logout.php">Logout</a>&nbsp;&nbsp;
			<img src='../flasher/signout.png'></td></tr>
		</td></tr>
</form>
<?php
	if($chk >0)
	{  
		echo("<tr align=center bgcolor=#CCCCCC> 
			 <td width=30><font color=blue size=3 face=tahoma>Sr. No.</font></td>
			 <td width=140><font color=blue size=3 face=tahoma>Bill No.</font></td>
			 <td width=80><font color=blue size=3 face=tahoma>Bill Amt.</font></td>
			 <td width=140><font color=blue size=3 face=tahoma>Delivery Address</font></td>
			 <td width=60><font color=blue size=3 face=tahoma>Payment Type</font></td>
			 <td width=200><font color=blue size=3 face=tahoma>Payment Details</font></td>
 			 <td width=80><img src='../flasher/userdelete.png'></td>		
		           </tr></font>"); 
		$pp=1;
		while($row=mysql_fetch_row($tb))
		{	
		echo("<tr>");
			echo ("<td align=center><font color=white size=3>$pp</td>");
			$pp++;
			echo ("<td align=center><font color=white size=3>&nbsp; $row[1]</td>");				
			echo ("<td align=right><font color=white size=3>$row[2]</td>");				
			echo ("<td align=left><font color=white size=3>$row[3]</td>");				
			echo ("<td><font color=white size=3>&nbsp; $row[4]</td>");				
			echo ("<td><font color=white size=3>&nbsp; $row[5]</td>");								
			echo ("<td align=center><a href='viewdp.php?d=$row[1]'>Delete</a></td>");
		echo("</tr>");
		}	
		echo("</table>");
	}
	else
	{
		echo ("<tr><td colspan=8 align=center><font color=white size=3>No Records Found</font></td></tr>");
	}
?>