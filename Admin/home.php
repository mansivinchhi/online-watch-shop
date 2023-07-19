<?php
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
<body bgcolor=orange>
<table  width="800"  height=600 align="center"  bgcolor="#000000"  border=5 bordercolor=blue cellpadding="0" cellspacing="0"> 
	 
	<tr height=5%>
		<th>
			<font color=red size=7 face=impact>Welcome To Adminstrator Panel</font>
		</th>
	</tr>
	<tr height=80%>
		<td>
				<table width="800" bgcolor="black" align=center cellpadding="2" cellspacing="0">
				<tr>	
					<td>
						  <?php include('login.php');?>
					</td>
				</tr>
	
			</table>

		</td>

	</table>
