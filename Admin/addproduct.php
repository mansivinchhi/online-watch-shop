<?php
//include("secure.php");
/*include ('config.php');		
if(isset($_POST['submit']))
{
		$fnm=$_FILES['f1']['name'];

		//copy($_FILES['f1']['tmp_name'],"../images/$fnm");
		//echo "Scroll Image1 successfully update, Check home page <a target='_blank' href='http://www.dubble9.com'> click </a> ";
		//$sql = "INSERT INTO `wedding`.`design_img` (`did`, `img_path`, `img_desc`, `price`) VALUES (1,'$fnm','$_POST[desc]','$_POST[price]')";
		$sql = "INSERT INTO `watch2`.`additem` (`name`, `price`, `qty`, `category`, `remarks`, `image`,`display`) 
		VALUES('$_POST[item]','$_POST[price]','$_POST[qty]','$_POST[category]','$_POST[remarks]','$fnm','$_POST[dispcheck]')";
		mysql_query($sql);
		header("Location:viewproducts.php");
}*/
?>
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
 	
	if(isset($_REQUEST["submit"]))
	{
		include ('config.php');		
		$image=$_FILES["f1"]["name"];
		
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
		$qry = "INSERT INTO `watch2`.`additem` (`name`, `price`, `qty`, `category`, `remarks`, `image`,`display`) 
		VALUES('$_POST[item]','$_POST[price]','$_POST[qty]','$_POST[category]','$_POST[remarks]','$ph','$display')";
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
		<td colspan=2 align=center><font color="white">Add Products </font></td>
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
		<select name=s1 id=s1>
		<option value=Men Watches Accessories>Men Watches</option>
		<option value=Women Watches>Women Watches</option>
		<option value=Kidds Watches>Kidds Watches</option>
		<option value=Smart Watches>Smart Watches</option>
		<option value=Others>Others</option>
		
		</select>
	      </td>
	</tr>
	<tr>
	       <td align=center><font color="white">Remarks :</font></td>
	       <td colspan=2><textarea name="tarea" id="tarea" cols=23 rows=3 onBlur="c_out(this,1)" onFocus="c_in(this,1)"></textarea></td>
	</tr>
	<tr>
		<td colspan=2>
		<input type="file" name="f1" id=" f1" onChange="loadph()">

		<input type="checkbox"  name="dispcheck" checked><font color="white">Display</font></td>	
	</tr>
	<tr align="right">
       		<td><input type="submit" name="submit" value="Save"></td>
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