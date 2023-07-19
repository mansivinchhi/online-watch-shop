<?php
session_start(0);
session_destroy();
header("location:index.php");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("watch2",$con);
$q=mysql_query("DELETE FROM watch2.user",$con);
?>
