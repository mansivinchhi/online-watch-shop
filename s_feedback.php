<?php
error_reporting (0);
$name1=$_POST['name'];
$email1=$_POST['email'];
$sub1=$_POST['sub'];
$msg1=$_POST['comment'];


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("watch2",$con);
$q=mysql_query("insert into feedback  values('".$name1."','".$email1."','".$sub1."','".$msg1."')");
if($q)
{
header("location:thank_feedback.php");
}
else
{
echo "sorry";
}

?>