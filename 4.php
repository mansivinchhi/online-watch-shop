
<?php
include("secure.php");
	session_start(0);
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("watch2",$con);
	$q=mysql_query("select * from watch2.user");
	$rw=mysql_num_rows($q);
	if($rw==0)
	{
		include("head.php");
	}
	else
	{
		include("head1.php");
	}
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
	<table width="200" border="1" bordercolor = "">
	<tr>
      <td>&nbsp;<a href="4_1.php"></a></td>
      <td>&nbsp;<a href="4_2.php"></a></td>
	</tr>
  <tr>&nbsp;
    <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="4_1.php"><img src="images/images/images5.jpg" alt=""  height=200 width=225/></a></td>
    <td>&nbsp;<a href="4_2.php"><img src="images/images/Copy of 31LkJ8daQRL._SL160_.jpg" alt="" height=200 width=225 /></a></td>
    
  </tr>
  <tr>
    <td>&nbsp;<a href="4_3.php"></a></td>
    <td>&nbsp;<a href="4_4.php"></a></td>
  </tr>
  <tr>
    <td>&nbsp;<a href="4_3.php"><img src="images/images/diamond-embellished-watch.jpg" alt="" height=200 width=225 /></a></td>
    <td>&nbsp;<a href="4_4.php"><img src="images/images/index.jpeg"alt="" height=200 width=225/></a></td>
    
  </tr>
    <tr>
      <td>&nbsp;<a href="4_5.php"></a></td>
      <td>&nbsp;<a href="4_6.php"></a></td>
    </tr>
  <tr>&nbsp;
    <td height="226">&nbsp;&nbsp;&nbsp;&nbsp;<a href="4_5.php"><img src="images/images/product3.jpg" alt=""  height=200 width=225/></a></td>
    <td>&nbsp;<a href="4_6.php"><img src="images/images/karlsson-designer-clock-cum-photo-frame_54.jpg" alt="" height=200 width=225 /></a></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style5"><a href="1.php"><b> 1</b></a>
		<a href="2.php"><b>2</b></a>
			<a href="3.php"><b>3</b></a>
				<a href="4.php"><b>4</b></a>
					<a href="5.php"><b>5</b></a></span></td>
    
  </tr>
</table>

    <p class="style3">&nbsp;</p>
  </div>
   <?php
   include("foot.php");
   ?>

