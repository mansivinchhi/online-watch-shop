<?php
error_reporting(0);
	session_start();
	session_destroy();
	$_SESSION["username"]="Guest";
	//require("home.php");
?>