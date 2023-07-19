<?php
	session_start();
?>
<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<script language="JavaScript" src=flasher/myfunction.js></script>
<form action="totalsales.php" method="POST" enctype=multipart/form-data>
<table border=1 bordercolor=black bgcolor=#FFFFCC align=center width=300>
<tr><th colspan=2>Sale Bill</th></tr></table>
<table border=1 bordercolor=black bgcolor=#FFFFCC align=center width=300 height=100>  
<tr>
        <td colspan=5>Name :
        <input type="text" name="item" size=20 onfocus="c_in(this)"></td>
</tr>
<tr>
       <td colspan=5>Bill No :
       <input type="text" name="qty" size=8 onfocus="c_in(this)">
       Date :
       <input type="text" name="qty" size=8 onfocus="c_in(this)"></td>
</tr>
	<tr>
		 <td><font color=green>Sr. No.</td>
		 <td><font color=green>Name</td>
		 <td><font color=green>Prize</td>
		 <td><font color=green>Qty</td>
		 <td><font color=green>Total</td>
	        </tr>

<tr>
	 <td colspan=5>Paymet</td>
	<td><input type="text" name="prize" size=8 onfocus="c_in(this)"></td>
	<td>Total :</td>
	<td><input type="text" name="prize" size=8 onfocus="c_in(this)"></td>
</tr>
</table>
<table border=1 bordercolor=black bgcolor=#FFFFCC align=center width=300 height=35>  
<tr>
       <td align=right><input type="button" name="save" value="Save" onClick="c_in()"></td>
</tr>
</table>
</form>

</body>
</html>