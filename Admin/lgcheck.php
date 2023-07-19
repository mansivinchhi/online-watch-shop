<?php
	error_reporting(00);
	session_start();

	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	
	if($username=="admin" && $password=="admin")
	{
		$_SESSION["username"]="admin";
		require("userview.php");
	}
	else
	{
		echo("Wrong username & password");
		$_SESSION["username"]="Guest";
		require("home.php");
	}
	
?>

