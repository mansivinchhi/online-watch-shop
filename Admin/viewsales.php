<?php
	session_start();
	include ('config.php');
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
 	
	if(isset($_REQUEST["d"]))
	{
		$delete=$_REQUEST["d"];
		$qry="delete from salebill where id='$delete'";
		$tb=mysql_query($qry,$link);		
	}
	if(isset($_REQUEST["search"]))
	{
		$a=$_REQUEST["finduser"];
		$b=$_REQUEST["search"];
		if($b=="Search")
		{
			if(is_numeric($a))
				$qry="select * from salebill where billno=$a order by billno";	
			else
				$qry="select * from salebill where username like '$a%' order by billno";	
		}
		else 
			$qry="select * from salebill order by billno";		
	}
	else 
		$qry="select * from salebill order by billno";		
	
	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);
?>
<body background="../flasher/14.jpg">
<form method=post action="viewsales.php">
<script language="JavaScript" src=../flasher/myfunction.js></script>
<LINK rel="stylesheet" href="../flasher/STYLE1.CSS">
	<?php include ('header.php');?>
<table border=1 width=810 align=center class=first bgcolor=#999999>
	<tr valign=center align=center bgcolor=#CCCCCC>
		<td colspan=2><font color=red><b>Enter User Name </b></font></td>
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
			 <td width=30><img src='../flasher/sr.png'></td>
			 <td width=200><img src='../flasher/userlist.png'></td>
			 <td width=150 align=center><font color=green size=3>Item Name</td>
			 <td width=40 align=center><font color=green size=3>Price</td>
			 <td width=40 align=center><font color=green size=3>Qty</td>
			 <td width=40 align=center><font color=green size=3>Total</td>
 			 <td width=80><img src='../flasher/userdelete.png'></td>		
		           </tr></font>"); 
		while($row=mysql_fetch_row($tb))
		{	
		echo("<tr>");
			echo ("<td><font color=white size=3>&nbsp; $row[1]</td>");				
			echo ("<td><font color=white size=3>$row[2]</td>");				
			echo ("<td><font color=white size=3>$row[3]</td>");				
			echo ("<td align=right><font color=white size=3>$row[4]</td>");				
			echo ("<td align=right><font color=white size=3>$row[5]</td>");								
			echo ("<td align=right><font color=white size=3>$row[6]</td>");	
			echo ("<td align=center><a href='viewsales.php?d=$row[0]'>Delete</a></td>");
		echo("</tr>");
		}	
		echo("</table>");
	}
	else
	{
		echo ("<tr><td colspan=8 align=center><font color=white size=3>No Records Found</font></td></tr>");
	}
?>