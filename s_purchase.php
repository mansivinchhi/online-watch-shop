<?php
$nm=$_POST['i_nm'];
$qty1=$_POST['qty'];
$add=$_POST['text'];
$cno=$_POST['subject'];


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("watch2",$con);
$q=mysql_query("insert into purchase values('".$nm."','".$qty1."','".$add."','".$cno."')");
if($q)
{
header ("location:deliver.php");
}

?>