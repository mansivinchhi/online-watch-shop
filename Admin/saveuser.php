<?php
	session_start();
 	include ('config.php');
		
	$ulock=$_REQUEST["chklock"];
	$disp=$_REQUEST["chkdisp"];
	$msg=$_REQUEST["txtmessage"];
	$p=$_REQUEST["uname"];
	if($ulock=="on")
		$ulock=1;
	else
		$ulock=0;
	if($disp=="on")
		$disp=1;
	else
		$disp=0;

	$qry="update login set locked=$ulock where username='$p'";		
	$tb=mysql_query($qry,$link);
	$qry="update login set display=$disp where username='$p'";		
	$tb=mysql_query($qry,$link);
	$qry="update login set message='$msg' where username='$p'";		
	$tb=mysql_query($qry,$link);
	require("userview.php");

?>

