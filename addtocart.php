<?php
	session_start();
	$cart=$_REQUEST["id"];
 	include ('admin/config.php');
	$qry="select * from additem where name='$cart' ";	
	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);		
?>
<script language="JavaScript" src=flasher/myfunction.js></script>
<script language="JavaScript">
	function blankcheck()
	{
		a=document.getElementById("itemname").value;	
		b=document.getElementById("qty").value;	
		c=document.getElementById("price").value;
			
		if (a.length==0 || b.length==0 || c.length==0 || b==0)
		{
			document.getElementById("itemname").focus();
			alert("No Blank Allowed ");
			return false;						
		}

		else
 			return true;	
	}
	function cin()
	{
			document.getElementById("itemname").focus();
	}
	function set_focus()
	{
			document.getElementById("qty").focus();
	}
	function total()
	{
			x=document.getElementById("qty").value;
			y=document.getElementById("price").value;
			document.getElementById("tot").value=x*y;
	}

</script>
<body onLoad="set_focus()">
<form method="post" action="finalsales.php" onSubmit="return blankcheck()">
<table  width="800" align="center" cellpadding="3" cellspacing="0" border=2 bordercolor=blue> 
<tr height=10%>
		<td>
		<embed src=main.swf height=100 width=800></embed>
		</td>
	</tr>
	<tr height=5%>
		<td align=center bgcolor=rgb(107,170,250)>
			<font color=white size=7 face=Impact>Selected Product</font>
		</td>
	</tr>

<tr>
<td>
<?php
	$row=mysql_fetch_row($tb);
	echo("
	<table width=40% height=45% align=left>	
	<tr>
		<td align=center valign=center><img src='images/$row[6]' width=400 height=450></img></td>
	</tr>
	</table>");
	echo("<table width='375' height=450 align=right'>
	<tr><td><font color='blue' size='5'>Product : </font><font color=red size=6 face=tahoma>$row[1]</font></td></tr>
	<tr><td><font color='blue' size='5'>Price  &nbsp;&nbsp;&nbsp&nbsp;       : </font><font color=red size=6 face=tahoma>$row[2]</font></td></tr>
	<tr><td><font color='blue' size='5'>Qty    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp : </font>
			<input type='text' name='qty' id='qty' size='8'  onkeyup='total()' onFocus='c_in(this,1)' onkeyPress=validate('num')></td></tr>
	<tr><td><font color='blue' size='6'>Total&nbsp; :</font><input type='text' name='tot' id='tot' size='8' value='0' readonly></td>
	</tr>
	<tr>
	 	<th align=center>&nbsp;
		      <input type='submit' name='submit' value='Finish'></th>
		  <input type='hidden' name='ph' id='ph' value='$row[6]'>
		  <input type='hidden' name='price' id='price' value='$row[2]'>
		  <input type='hidden' name='itemname' id='itemname' value='$row[1]'>
		  <input type='hidden' name='price' id='price' value='$row[2]'>
	</tr>
	<input type='hidden' value='$row[0]' id='id' name='id'>
	</td>
	</table><br>
	");
	?>
</td>
</tr>

</table>
</form>
</body>
</html>