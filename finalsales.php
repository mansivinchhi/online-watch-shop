<?php
	session_start();
	
	$b=$_REQUEST["submit"];
	include('admin/config.php');

	if(!isset($_SESSION["bno"]))
	{
		$tb1=mysql_query("select * from salebill order by billno desc",$link);
		$row1=mysql_fetch_row($tb1);
		$billno=$row1[1];
		$billno=$billno+1;		
		$_SESSION["bno"]=$billno;
	}
	$billno=$_SESSION["bno"];
	
	$username=$_SESSION["username"];		
	$itemname=$_REQUEST['itemname'];
	$price=$_REQUEST['price'];
	$qty=$_REQUEST['qty'];
	$total=$_REQUEST['tot'];
	$ph=$_REQUEST['ph'];

	$qry="insert into salebill values(NULL,$billno,'$username','$itemname',$price,$qty,$total,'$ph')";
	 $tb=mysql_query($qry,$link);
	echo("<script language=JavaScript>alert('$qry')</script>");
	if($b=="Finish")
		require("1.php");	
	else
		require("1.php");
?>
