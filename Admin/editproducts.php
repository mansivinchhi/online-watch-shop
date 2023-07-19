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

	if(isset($_REQUEST["submit"]))
	{
						
		$itemname=$_REQUEST['item'];
		$price=$_REQUEST['price'];
		$qty=$_REQUEST['qty'];
	//	$category=$_REQUEST['s1'];
		$remarks=$_REQUEST['tarea'];
		$image=$_FILES["f1"]["name"];
		$display=$_REQUEST['dispcheck'];
		$delete=$_REQUEST["xx"];
		if($display=="on")
			$display=1;
		else
			$display=0;
		if(strlen($image)>0)
		{
			$extension=$_FILES["f1"]["type"];
			if($_FILES["f1"]["size"]>2000000)
			{
				echo ("<script language='JavaScript'>alert('File More Than 2 MB is Not Supported')</script>");
			}
			else if($extension!='image/pjpeg' && $extension!='image/bmp' && $extension!='image/gif')
			{	
				echo ("<script language='JavaScript'>alert('Not Supported Your File Type')</script>");
			}
			else
			{
				//$qry="update additem set name='$itemname',price='$price',qty='$qty',category='$category',remarks='$remarks',image='$image',display='$display' where id=$delete";
				//move_uploaded_file($_FILES["f1"]["tmp_name"],"../images/".$_FILES["f1"]["name"]);
			
				$qry=("UPDATE `watch2`.`additem` SET `name` = '$itemname', `price` = '$price', `qty` = '$qty', `remarks` = '$remarks',`image` = '$ph',`display` = '$display' WHERE id=$delete");

				$tb=mysql_query($qry,$link);		
			}	
		}
		else
		{
				//$qry="update additem set name='$itemname',price='$price',qty='$qty',category='$category',remarks='$remarks',display='$display' where id=$delete";
				
				$qry=("UPDATE `watch2`.`additem` SET `name` = '$itemname', `price` = '$price', `qty` = '$qty', `remarks` = '$remarks',`display` = '$display' WHERE id=$delete");
				$tb=mysql_query($qry,$link);		
				
		}
	require('viewproducts.php');
	exit();
	}
	if(isset($_REQUEST["e"]))
	{
		$delete=$_REQUEST["e"];
		$qry="select * from additem where id=$delete";
		$tb=mysql_query($qry,$link);		
		$row=mysql_fetch_row($tb);
		$new_id=$row[0];
		$new_id++;
		$ph=$new_id.".jpg";
	}
		
?>
<html>
<head>
<title>Edit Item</title>
<script language="JavaScript">
function noblank()
{
	a=document.getElementById("item").value;
	b=document.getElementById("price").value;
	c=document.getElementById("qty").value;
	d=document.getElementById("price").value;
	e=document.getElementById("tarea").value;

	if (a.length==0 || b.length==0 || c.length==0 || d.length==0 || e.length==0)
		{
			document.getElementById("item").focus();
			alert("No Blank is allowed");
			return false;						
		}
		else
 			return true;	
}
function loadph()
{
	x=document.getElementById("f1").value;
	alert(x);
	document.getElementById("myph").src=x;
	y=document.getElementById("myph").src;
	alert(y);
	
}
</script>
</head>
<body background="../flasher/11.jpg">
<LINK rel="stylesheet" href="../flasher/STYLE1.CSS">
<form action="editproducts.php" method="POST" enctype=multipart/form-data onSubmit="return noblank()">
<script language="JavaScript" src=flasher/myfunction.js></script>


<table border=0 width="800" align="center" class="first" bgcolor="#999999"> 
	<tr>
		<td colspan=2><?php include ('header.php'); ?></td>
	</tr>
	<tr><td>
	<table border=0 width="200" height="450" align="center" class="first" bgcolor="#999999" cellpadding="0" cellspacing="0"> 
	<tr>
		<td colspan=2 align=center><font color="white">Edit Products </font></td>
	</tr>
	<tr>
	         <td align=center><font color="white"> Name : </font></td>
	        <td colspan=2><input type="text" name="item" value= '<?php echo($row[1]); ?>' size=30 onFocus="c_in(this)"></td>
	</tr>
	<tr>
	        <td align=center><font color="white"> Price : </font></td> 
	        <td colspan=2><input type="text" name="price" value= '<?php echo($row[2]); ?>' size=8 onFocus="c_in(this)"></td>
	</tr>
	<tr>
	       <td align=center><font color="white">Qty :</font></td>
	       <td colspan=2><input type=hidden value='<?php echo($row[0]); ?>' name=xx>
	       <input type="text" name="qty" value= '<?php echo($row[3]); ?>' size=8 onFocus="c_in(this)"></td>
	</tr>
	<tr>
	       <td align=center><font color="white">Category : </font></td>
	       <td colspan=2>
		<select name=s1>
		<option value=Men's Accessories>Men's Accessories</option>
		<option value=Men's Fahion Wear>Men's Fashion Wear</option>
		<option value=Women's Accessories>Women's Accessories</option>
		<option value=Women's Fashion Wear>Women's Fashion Wear</option>
		<option value=Electronic Gadgets>Electronic Gadgets</option>
		<option value=Others>Others</option>
			<?php
				/*if($row[4]=="Suit")
					echo("<option value=Suit selected>Suit</option>");
				else
					echo("<option value=Suit>Suit</option>");
				if($row[4]=="Saree")
					echo("<option value=Saree selected>Saree</option>");
				else
					echo("<option value=Saree>Saree</option>");*/
			?>
		</select>
	      </td>
	</tr>
	<tr>
	       <td align=center><font color="white">Remarks :</font></td>
	       <td colspan=2><textarea name="tarea" cols=23 rows=3 onFocus="c_in(this)"><?php echo($row[5]); ?></textarea></td>
	</tr>
	<tr>

		<?php	
		echo("<td colspan=2><input type='file' name='f1' onChange='loadph()'><br>");
			if($row[7]==0) 
			 	echo("<input type='checkbox' name='dispcheck'>"); 	          
			else 
			 	echo("<input type='checkbox' name='dispcheck' checked>"); 	          
		echo("<font color='white'>Display</font></td>");	
		?>

	</tr>
	<tr align="right">
       		<td><input type="submit" name="submit" value="Save"></td>
	<td>
		<input type="reset" name="reset" value="Reset">
	</td>		
	</tr>	
	</table>
	</td>
	<td align=right> 
	<table border=0 align="center" class="first" bgcolor="white"> 
	<tr><td>
	<?php 
	echo("<img src='../images/$row[6]' name='myph'  width='385' height='440'>");
	?>
	</td></tr>
	</table>	
	</td>
	</tr>
</form>
</body>
</html>