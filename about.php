<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free Css Template #186 - Best APP</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {font-size: 12px;}
.style6 {
	font-size: 10px;
	font-weight: bold;
}
.style8 {
	font-size: 12px;
	font-weight: bold;
	
}
-->
.style10
{
	padding:10px;
	}
</style>
</head>
<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
      <div class="clearfloat"></div>
	  <?php
error_reporting(0);
	  //		session_start(0);
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("watch2",$con);

//$u=$_POST['Unm'];
		$q=mysql_query("select * from watch2.user");
		$rw=mysql_num_rows($q);
		if($rw==0)
		{
			include("head.php");
		}
		else
		{
	//		$_SESSION['nm']=$u;
			include("head1.php");

		}
?>
        <div class="clearfloat"></div>
    </div>
    <!-- end #header -->
    <!-- begin #sidebar1 -->
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
    <div class="style10" id="mainContent">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    
      <p align="justify">&nbsp;</p>
      <p align="justify">&nbsp;</p>
      <p align="justify"><span class="style8">Created in 2020, today  <u><em>mahalaxmi watch</em></u> can be found worldwide in over 2,000 stores. </span></p>
      <p align="justify">&nbsp;</p>
      <p align="justify">&nbsp;</p>
      <p align="justify"><span class="style8">Jewelry,</span><span class="style8"> Fashion and department stores located in some of the most elegant places in the world such as Milan, Rome. </span><span class="style8">Paris, Porto cervo, Florence, Forte dei Marmi, London, Cannes and Puerto Banus carry ToyWatch.</span></p>
      <p align="justify">&nbsp;</p>
      <p align="justify"><span class="style8"><br />
      First Lady Michelle Obama as well as international stars like Oprah Winfrey,</span><span class="style8">Alicia Keys,Naomi Campbell,Madonna, Leonardo di Caprio, Michael Jordan and Sandra Bullock wear ToyWatch.</span></p>
      <p align="justify" class="style8"> </p>
      <p align="justify" class="style8">&nbsp;</p>
      <p align="justify" class="style8">&nbsp;	</p>
      <p align="justify" class="style8">In India we have Mandira Bedi, Tara Sharma, Siddhart Mallya,Liza Hayden, Sophie Choudry, Akki Narula, Bikram Salujaa and Sahil Shroff only to name a few who wear ToyWatch.</p>
      <p align="justify" class="style8">&nbsp;</p>
      <p align="justify" class="style8">&nbsp;</p>
      <p align="justify" class="style8">TW launched in Mumbai at the end of 2008 and is now available at manystores across the city. TW is the first and only fashion watch to be sold in high-end, exclusive garment boutiques in India such as Ensemble,</p>
      <p align="justify" class="style8">&nbsp;</p>
      <p align="justify" class="style8"><br />
      Aza and Aditya Birla's The collective. After garnering attention in MumbaiTW is now available across the country in cities including, Delhi, Bangalore,Hyderbad, Chennai and Kolkatta.</p>
      <p align="justify" class="style8">&nbsp;</p>
      <p align="justify" class="style8">&nbsp;</p>
      <p align="justify" class="style8">As a joint venture with the parent company we are committed to keeping our prices the lowest in the world.We currently boast an extremely eclectic and diverse collection of over 20 styles. Underlined by uniqueness, </p>
      <p align="justify" class="style8">&nbsp;</p>
      <p align="justify" class="style8"><br />
        we constantly reinvent ourselves in an attempt to provide fresh, relevant and exciting styles.</p>
      <p><span class="style6">.</span><br />
      </p>
    </div>
    <!-- end #mainContent -->
    <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
    <!-- begin #footer -->
    <div id="footer">
		<p><abbrev><b><i><u>Developed by:-</u></i></b></abbrev></p>
		<p>Vinchhi Mansi.</p>
		<p>Parmar Hiral.  </p> 
		<p><a href="Admin/index.php"> ADMIN </a></p>
    </div>
    <!-- end #footer -->
</div>

<!-- end #container -->
</body>
</html>
