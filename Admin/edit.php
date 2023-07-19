<?php
error_reporting(0);
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
		
	$ed=$_REQUEST["e"];
	$qry="select * from login where username='$ed'";		
	$tb=mysql_query($qry,$link);
	$row=mysql_fetch_row($tb);
	echo("<form action=saveuser.php method=post enctype=multipart/form-data>");
	echo("<body background=../flasher/16.jpg>");
	echo("<table border=1 width=810 align=center class=first bgcolor=#999999>");
	echo("<tr align=center>
			 <td width=60><font color=green>Sr. No.</td>
			 <td width=80><font color=green>Name</td>
			 <td width=60><font color=green>Locked</td>
			 <td width=60><font color=green>Display</td>
			 <td width=80 align=right>&nbsp&nbsp&nbsp<font color=green>Message</td>
			 <td width=60 colspan=2><font color=green>Action</td>			 
		           </tr></font>"); 
			echo("<tr>");
			echo ("<td align=center><font color=white size=4>1</td>");
			echo ("<td><font color=white><input type=hidden value=$row[0] name=uname>$row[0]</td>");				
			if($row[2]==0)
				echo ("<td align=center><input type=checkbox name=chklock></td>");
			else 
				echo ("<td align=center><input type=checkbox name=chklock checked></td>");
			if($row[3]==0)
				echo ("<td align=center><input type=checkbox name=chkdisp></td>");
			else 
				echo ("<td align=center><input type=checkbox name=chkdisp checked></td>");
			echo ("<td><input type=text value='$row[4]' name=txtmessage size=70></td>");
			echo ("<td align=center colspan=2><input type=submit value='Save' name=btnsubmit></td> ");
						
			echo("</tr>");
		echo("</table> </form>");

?>

