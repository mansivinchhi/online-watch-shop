<?php
	error_reporting(0);
	session_start();	
	$link=mysql_connect("localhost","root","");
	$data=mysql_select_db("watch2",$link);		
	$qry="select * from additem where display=1";		
	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);	
?>

<?php
include("secure.php");
	include("head1.php");
?>
    <div id="sidebar1">
    	<h2>WATCHES</h2>
        <div class="phoneBox">
        	<div class="phonePic"><img src="images/images/images11.jpg" height=200 width=200  alt="" /></div>
          <div>
            	<p>&nbsp;</p>
          </div>
            <div class="clearfloat"></div>
        </div>
        <div class="phoneBox">
        	<div class="phonePic"><img src="images/images/P5070231.JPG"  height=200 width=200  alt="" /></div>
          <div>
            	<p>&nbsp;</p>
          </div>
            <div class="clearfloat"></div>
        </div>
        <div class="phoneBox">
        	<div class="phonePic"><img src="images/images/images6.jpeg" alt=""  height=200 width=200  /></div>
          <div>
            	<p>&nbsp;</p>
          </div>
            <div class="clearfloat"></div>
        </div>
    </div>
    <!-- end #sidebar1 -->
    <!-- begin #mainContent -->
  <div id="mainContent">
  
    <p>&nbsp;</p>
	<table width="100" border="1" bordercolor = "">
	<tr>
	
			<tr height=80%>
		<td>
				<?php
 	include ('admin/config.php');

	$tb=mysql_query($qry,$link);
	$chk=mysql_num_rows($tb);	
	echo("<table align=center cellpadding='0' border=2 bordercolor=green><tr>
		");
	if($chk >0)
	{
		$count=0;
		while($row=mysql_fetch_row($tb))
		{
			if($count%5==0)	
				echo("<tr>");
			
			echo("<td ><table width=100 height=100 class=first><tr>");			
			echo("<td align=center colspan=2>
					<a  href='addtocart.php?id=$row[1]'>
					<img src='images/$row[6]' width=125 height=125 alt='$row[1]' border=1>
					</a>
			          </td>
			          <tr>
			                 <td align=center height=40><font color=white>$row[1]</font></td></tr>	
			          <tr><td align=center><font color=red>Rate :</font></td>
			                  <td align=center><font color=red>$row[2]</font></td>");
			echo("</tr></table></td>");
			$count++;
		}	
	}
	else
	{
		echo ("<tr><td colspan=8 align=center><font color=white size=3>No Records Found</font></td></tr>");		
	}
	echo("</table>");
?>
		</td>
<tr height=5%>

	</tr>
	</table>

    <p class="style3">&nbsp;</p>
  </div>
   <?php
   include("foot.php");
   ?>

