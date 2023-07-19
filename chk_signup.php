<?php
error_reporting (0);
$fnm1=$_POST['fname'];
$lnm1=$_POST['lname'];
$email1=$_POST['email'];
$unm1=$_POST['u_nm'];
$pwd1=$_POST['pwd'];
$cpwd1=$_POST['cpwd'];
$gender1=$_POST['gender'];


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("watch2",$con);
$w=mysql_query("select *from login where email='".$unm1."' ");
$r=mysql_num_rows($w);

if($r==0)
{
$q=mysql_query("insert into signup values('".$fnm1."','".$lnm1."','".$email1."','".$unm1."','".$pwd1."','".$cpwd1."','".$gender1."')");
$q1=mysql_query("insert into login values('".$unm1."','".$pwd1."')");
if($q and $q1)
{
include '1.php';
}
else
{
echo "sorry";
}

}
else
{
include 'register.php';
}

?>