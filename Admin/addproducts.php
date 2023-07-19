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
 	
if(isset($_REQUEST["submit"]))
{
	include ('config.php');		
	/*	$itemname=$_REQUEST['item'];
		$price=$_REQUEST['price'];
		$qty=$_REQUEST['qty'];*/
		$category=$_REQUEST['Category'];
	$remarks=$_REQUEST['Remarks'];
	$image=$_FILES["f1"]["name"];
	$display=$_REQUEST['dispcheck'];
		
	if($display=="on")
		$display=1;
	else
		$display=0;
		
	$extension=$_FILES["f1"]["type"];
		
	if($_FILES["f1"]["size"]>2000000)
	{
		echo ("<script language='JavaScript'>alert('File More Than 2 MB is Not Supported')</script>");
	}
	else if($extension!='image/pjpeg' && $extension!='image/bmp' && $extension!='image/gif' && $extension!='image/jpeg')
	{
		echo ("<script language='JavaScript'>alert('Not Supported Your File Type')</script>");
	}
	else
	{
			$qry="select id from additem order by id desc";
			$tb=mysql_query($qry,$link);		
			$r=mysql_fetch_row($tb);		
			$new_id=$r[0];
			$new_id++;
			$ph=$new_id.".jpg";
		//	$qry="insert into additem values (NULL,'$itemname',$price,$qty,'$category','$remarks','$ph',$display)";
			$qry = "INSERT INTO `watch2`.`additem` (`name`, `price`, `qty`, `category`, `remarks`, `image`,`display`) 
		VALUES('$_POST[item]','$_POST[price]','$_POST[qty]','$Category','$remarks','$ph','$display')";

			$tb=mysql_query($qry,$link);		
			move_uploaded_file($_FILES["f1"]["tmp_name"],"../images/".$ph);
	}
}	
?>
<html>
<head>
<title>Add Item</title>
<script language="JavaScript">
function noblank()
{
	a=document.getElementById("item").value;
	b=document.getElementById("price").value;
	c=document.getElementById("qty").value;
	d=document.getElementById("s1").value;
	e=document.getElementById("remarks").value;

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
<body background="../flasher/16.jpg">	
<LINK rel="stylesheet" href="../flasher/STYLE1.CSS">
<form action="addproducts.php" method="POST" enctype=multipart/form-data onSubmit="return noblank()">
<script language="JavaScript" src="../flasher/myfunction1.js"></script>
<table border=0 width="800" align="center" class="first" bgcolor="#999999"> 
	<tr>
		<td colspan=2><?php include ('header.php'); ?></td>
	</tr>
	<tr><td>
	<table border=0 width="200" height="450" align="center" class="first" bgcolor="#999999" cellpadding="0" cellspacing="0"> 
	<tr>	
		<td colspan=2 align=center><font color="white">Add Products</font></td>
	</tr>
	<tr>
	        <td align=center><font color="white"> Name : </font></td>
	        <td colspan=2><input type="text" name="item" id="item" size=30 onBlur="c_out(this,1)" onFocus="c_in(this,1)" onkeyPress="validate('alfa','num')"></td>
	</tr>
	<tr>
	       <td align=center><font color="white"> Price : </font></td> 
	       <td colspan=2><input type="text" name="price" id="price" size=8 onBlur="c_out(this,1)" onFocus="c_in(this,1)" onkeyPress="validate('num')"></td>
	</tr>
	<tr>
	       <td align=center><font color="white">Qty :</font></td>
	       <td colspan=2><input type="text" name="qty" id="qty" size=8 onBlur="c_out(this,1)" onFocus="c_in(this,1)" onkeyPress="validate('num')"></td>
	</tr>
	<tr>
	       <td align=center><font color="white">Category :</font></td>
	       <td colspan=2>
		<select name=Category id=Category>
		<option value=Men Watches>Men Watches</option>
		<option value=Women Watches>Women Watches</option>
		<option value=Kidds Watches>Kidds Watches</option>
		<option value=Smart Watches>Smart Watches</option>
		<option value=Others>Others</option>
		
		</select>
	      </td>
	</tr>
	<tr>
	       <td align=center><font color="white">Remarks :</font></td>
	       <td colspan=2><input name="Remarks" type="text" id="Remarks" onFocus="c_in(this,1)" onBlur="c_out(this,1)" value="" size="23"></td>
	</tr>
	<tr>
		<td colspan=2>
		<input type="file" name="f1" id=" f1" onChange="loadph()">

		<input type="checkbox"  name="dispcheck" checked><font color="white">Display</font></td>	
	</tr>
	<tr align="right">
       		<td><input id="submit" type="submit" name="submit" value="Save"></td>
		<td><input type="reset" name="reset" value="Reset"></td>		
	</tr>
	</table>
	</td>
	<td align=right> 
	<table border=0 width="385" height="440" align="center" class="first" bgcolor="#999999"> 
	<tr><td>
	<!--<img src="C:\Wallpaper\aum_17.jpg" name="myph"  width=100% height=100%>-->
	</td></tr>
	</table>	
	</td>
	</tr>
</table>
</form>
</body>
</html>