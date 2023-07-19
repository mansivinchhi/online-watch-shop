<?php
	$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect'. mysql_error());    
		}
	     mysql_select_db("watch",$con);
		 $sql=" INSERT INTO feedback	values('$_POST[name]','$_POST[email]','$_POST[sub]','$_POST[text]')";
		if(!mysql_query($sql))
		{
			die('error'.mysql_error());
			
		}
		include 'thank_feedback.php';
		mysql_close($con);
?>