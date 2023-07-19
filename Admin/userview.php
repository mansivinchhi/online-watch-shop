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
		$qry="delete from login where username='$delete'";
		$tb=mysql_query($qry,$link);		
	}
	$a=$_REQUEST["finduser"];
	$b=$_REQUEST["search"];
	if($b=="Search")
	{
		$qry="select * from login where username like '$a%' ";	
	}
	else 
	{
		$qry="select * from login";		
	}

	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);
?>
<body background="../flasher/11.jpg">
<form method=post action="userview.php">
<script language="JavaScript" src=../flasher/myfunction.js></script>
	<?php include ('header.php');?>
<table border=1 width=810 align=center class=first bgcolor=#999999>
	   <tr valign=center align=center bgcolor=#CCCCCC>
		<td colspan=2><font color=red><b>Enter User Name </b></font></td>
		<td colspan=3><img src='../flasher/user.png'>&nbsp;&nbsp;&nbsp;
		<input type=text size=40 name=finduser onBlur=c_out(this,1) onFocus=c_in(this,3)>
		       <input type=submit name=search value=Search>
			   <img src='../flasher/search.png'>
		      <input type=submit name=search value=All></td>
	                <td colspan=2 valign="middle"><a href=logout.php>Logout</a>&nbsp;&nbsp;
								  <img src='../flasher/signout.png'></td></tr>
</form>
<?php
	if($chk >0)
		{
		   echo("<tr align=center bgcolor=#CCCCCC>
			 <td width=30><img src='../flasher/sr.png'></td>
			 <td width=200><img src='../flasher/userlist.png'></td>
			 <td width=60><img src='../flasher/lock.png'></td>
			 <td width=60><img src='../flasher/messages.png'></td>
			 <td width=360><img src='../flasher/email.png'></td>
			 <td width=50><img src='../flasher/useredit.png'></td>		 	
 			 <td width=50><img src='../flasher/userdelete.png'></td>		 	
		           </tr></font>"); 

		$x=1;
		while($row=mysql_fetch_row($tb))
		{	
			echo("<tr>");
			echo ("<td align=center><font color=white size=3> $x</td>");
	                                           $x++;
			echo ("<td><font color=white size=3>&nbsp $row[0]</td>");				
			
			
			if($row[2]==0)
			echo ("<td align=center><font color=white size=3>No</td>");
			else 
			echo ("<td align=center><font color=red size=3>Yes</td>"); 
			

			
			if($row[3]==0)
			echo ("<td align=center><font color=white size=3>No</td>");
			else 
			echo ("<td align=center><font color=red size=3>Yes</td>"); 
			

			echo ("<td><font color=white size=3>&nbsp $row[4]</td>");
//			echo ("<td width=25 align=center><a href='edit.php?e=$row[0]'>&nbsp;Edit</a></td>"); 
			echo ("<td width=25 slign=center><a href='userview.php?d=$row[0]'>&nbsp;&nbsp;Delete</a></td>");
			echo("</tr>");
		}	
		echo("</table>");
	}
	else
	{
		echo ("<tr><td colspan=7 align=center><font color=white size=3>No Records Found</font></td></tr>");
	}

?>

