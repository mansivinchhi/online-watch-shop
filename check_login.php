<?php
session_start(0);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("watch2",$con);

$u=$_POST['email'];
$p=$_POST['password'];
$q=mysql_query("select * from login where email='$u' and pwd='$p'");

$rw=mysql_num_rows($q);
if($rw==0)
{
	
	header("location:home.php");
}
else
{
	$_SESSION['email']=$u;
	$_SESSION['password']=$p;
	
		header("location:1.php");
		$q=mysql_query("INSERT INTO `watch2`.`user`(`nm`)VALUES ('$u')",$con);
}
?>