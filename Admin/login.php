<?php
error_reporting(0);
	session_start();
	if(isset($_SESSION['username']))
	{
		$username=$_SESSION["username"];		
	}
	else
	{
		$username="Guest";
		$_SESSION["username"]="Guest";
	}
?>
<script language="JavaScript" src=flasher/myfunction.js></script>
<script language="JavaScript">
	function blankcheck()
	{
		a=document.getElementById("username").value;	
		b=document.getElementById("password").value;	
		if (a.length==0)
		{
			document.getElementById("username").focus();
			alert("Blank User Name");
			return false;						
		}

		else if (b.length==0)
		{
			document.getElementById("password").focus();	
			alert("Blank Password");
			return false;						
		}
		else
 			return true;	
	}
	function cin()
	{
			document.getElementById("username").focus();
	}
</script>
<form method="post" action="lgcheck.php" onSubmit="return blankcheck()">
<table  bgcolor="#000000" bordercolor=orange width=300 class=first align=center border=5>
<tr>
	<th colspan="2"><font color="#FF0033" size="6" face=tahoma>Login</font></th>
</tr>
<tr>
<td><font color="#FF0033" size="4">Name :</font></td>
<td><font color=white>
<input type=text name=username size=21  onBlur='c_out(this,1)' onFocus='c_in(this,1)'>
</td>
</tr>
<tr>
<td><font color="#FF0033" size="4">Password :</font></td>
<td><input type="password" name="password" size="21" onBlur="c_out(this,1)" onFocus="c_in(this,1)" onkeyPress="">
</td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="Send"  name="submit"/><input type="reset" value="Clear"  name="Clear"/></td>
</tr>
</table>
</form>
