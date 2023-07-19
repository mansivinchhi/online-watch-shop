<?php
	session_start();
	$username=$_SESSION["username"];	
	$billno=$_SESSION["bno"];
 	include ('admin/config.php');
	if(isset($_REQUEST["d"]))
	{
		$delete=$_REQUEST["d"];
		$qry="delete from salebill where id=$delete";	
		$tb=mysql_query($qry,$link);
	}
?>
<body  bgcolor=white>
<form method=post action="sales.php">
<script language="JavaScript" </script>
<table  width="800" align="center"  border=2 bordercolor=blue> 
<tr height=10%>
		<td>
		</td>
	</tr>
	<tr height=80%>
	<td>
<?php 
	$x=1;
$qry="select * from salebill where username='$username' and billno=$billno";	
$tb=mysql_query($qry,$link);
	$p=date("d.m.Y");
	$q=date("l");
	$tot_qty=0;
	$tot_rs=0;
	echo("<table border=0 bgcolor='black' align='center' width=800><tr>");
		echo("<td><table border=0 bgcolor='black' align='center' width=800>");
			echo("<tr><td colspan=8 height=40><font color=white size=4>User Name : <font color='red' size=6>$username
			</td><td align=right><a href='logout.php'><font size=4>Logout</a></td></tr>
		          <tr>
			<td colspan=2 height=50><font color=white size=4>Bill No : 
			<font color=red size=6>$billno</td><td></td>
			<td colspan=2 align=center><font color=white size=4>Date :
			<font color=red size=6>$p</td><td></td>
			<td colspan=3 align=right><font color=white size=4>Day :
			<font color=red size=6>$q</td>
		</tr></table></td></tr>");
	
		while($row=mysql_fetch_row($tb))
		{			
			echo("<tr border=1 bordercolor=white>");
			echo ("<td width=10 align=center><font color=white size=3>$x</td>");
	                              $x++;
			$ph="images/".$row[7];		
			echo ("<td><font color=white size=3>&nbsp;$row[3]</td>");
			
			echo ("<td align=center><font color=white size=3><img src=$ph width=100 height=100></td>");
			
			echo ("<td align=right><font color=white size=3>$row[4]&nbsp;</td>"); 
			
			echo ("<td align=right><font color=white size=3>$row[5]&nbsp;</td>");
		 
			echo ("<td align=right><font color=blue size=5>$row[6]&nbsp;</td>"); 			

			echo ("<td align=center width=40><a href='finalsales2.php?e=$row[0]'>Edit</a></td>"); 
			echo ("<td width=25 align=center><a href='finalsales1.php?d=$row[0]'>Delete</a></td>");
			echo("</tr>");
			$tot_qty=$tot_qty + $row[5];
			$tot_rs=$tot_rs + $row[6];
		}	
		echo("<tr>");
			echo ("<td colspan=4><font color='white'>Total : </td>");
			echo ("<td align=right><font color='white'>$tot_qty </td>");
			echo ("<td align=right><font color='blue' size=5>$tot_rs</td><td colspan=2 align=center><a href=delivery.php?billno=$billno><font color=red face=impact size=6>Next</a></td>");
		echo("</tr>");
		echo("</table></td></tr>");
	
		echo("</table>");
?>
</form>

</body>

