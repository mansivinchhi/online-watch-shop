<?php
//session_start(0);
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("watch2",$con);

//$u=$_POST['Unm'];
$q=mysql_query("select * from watch2.user");

$rw=mysql_num_rows($q);
if($rw==0)
{
	header("location:home.php");
//	include("head.php");
}
else
{
	$_SESSION['nm']=$u;
	header("location:1.php");
	//include("head1.php");
}
?>