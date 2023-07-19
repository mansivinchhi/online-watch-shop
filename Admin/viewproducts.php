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
		$i1=$_REQUEST["ph"];
		$qry="delete from additem where name='$delete'";
		$tb=mysql_query($qry,$link);		
		unlink("../images/$i1");
	}
	$a=$_REQUEST["findproduct"];
	$b=$_REQUEST["search"];
	if($b=="Search")
	{
		if(is_numeric($a))
				$qry="select * from additem where price<='$a'";					
			else
				$qry="select * from additem where name like '$a%' order by id";			
	}
	else 
	{
		$qry="select * from additem order by id";		
	}

	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);
?>
<body background="../flasher/12.jpg">
<form method=post action="viewproducts.php">
<script language="JavaScript" src=../flasher/myfunction.js></script>
<LINK rel="stylesheet" href="../flasher/STYLE1.CSS">
	<?php include ('header.php');?>
<table border=1 width=810 align=center class=first bgcolor=#999999>
	<tr valign=center align=center bgcolor=#CCCCCC>
		<td colspan=2><font color=red><b>Enter Product Name </b></font></td>
		<td colspan=6><img src='../flasher/product.png'>&nbsp;&nbsp;&nbsp;
		<input type="text" size=40 name="findproduct" onBlur="c_out(this,1)" onFocus="c_in(this,3)">
			      <input type="submit" name="search" value="Search">
				  <img src='../flasher/search.png'>
	              <input type="submit" name="search" value="All">
		</td>
	            	<td colspan="2"><a href="logout.php">Logout</a>
					<img src='../flasher/signout.png'>
					</td>
	</tr>
</form>
<?php
	if($chk >0)
	{
		echo("<tr align=center bgcolor=#CCCCCC>
			<td width=30><img src='../flasher/sr.png'></td>
			 <td width=200><img src='../flasher/product.png'></td>
			 <td width=60><img src='../flasher/rate.png'></td>
			 <td width=60><img src='../flasher/qty.png'></td>
			 <td width=60><img src='../flasher/category.png'></td>			 
			 <td width=60><img src='../flasher/remarks1.png'></td>
			 <td width=150><img src='../flasher/pimages.png'></td>
			 <td width=60><font color=green>In Shop</td>
			 <td width=50><img src='../flasher/pedit.png'></td>		 	
 			 <td width=50><img src='../flasher/pdelete.png'></td>	
			 </tr></font>"); 
		$pp=1;
		while($row=mysql_fetch_row($tb))
		{	
			echo("<tr>");
			echo ("<td align=center><font color=white size=4>$pp</td>");				
			$pp++;
			echo ("<td><font color=white size=4>$row[1]</td>");				
			echo ("<td align=right><font color=white size=4>$row[2]</td>");				
			echo ("<td align=right><font color=white size=4>$row[3]</td>");				
		//	echo ("<td><font color=white size=4>$row[4]</td>");				
			echo ("<td><font color=white size=4>$row[5]</td>");
			echo ("<td align=center><img src='../images/$row[6]' nm='i1' value='../images/$row[6]' width=100  height=100 border=1 alt='$row[1]' style='border-color:black'></td>");

			if($row[7]==0)
			echo ("<td align=center><font color=red size=3>No</td>");
			else 
			echo ("<td align=center><font color=white size=3>Yes</td>"); 
			
			echo ("<td width=60 align=center><a href='editproducts.php?e=$row[0]'>Edit</a></td>  
			           <td width=60 align=center><a href='viewproducts.php?d=$row[1]&ph=$row[6]'><?php unlink('../images/$row[6]'); ?>Delete</a></td>");			
			echo("</tr>");
		}	
		echo("</table>");
	}
	else
	{
		echo ("<tr><td colspan=9 align=center><font color=white size=3>No Records Found</font></td></tr>");
	}
?>



		 
