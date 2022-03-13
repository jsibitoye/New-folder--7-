<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
if(isset($_POST['bn']))
{
	//$con= mysql_connect('localhost,root','');
	//mysql_select_db("my_php");
	//if($con)
	//{
	//echo "wowwwww";
	//}
	//else
	//{ echo"hoooo noooo";}
	
	$name = $_POST['username'];
	$pw1=$_POST['p1'];
	$pw2= $_POST['p2'];
	$dir= "admin_pic/";
	$pic= $_POST['img']['name'];
	$pic_tmporary= $_POST['im']['tmp_name'];
}
?>
<link href="css/pagees.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
  <div id="main_block">
    <!--Top Block Starts -->
    <div id="top_block">
 <div id="top">   <div id="me" align="center"><i><b>
      ROLLO</b></i></div>
  <div id="me2">
  <marquee scrollamount="3"><I>ROLLO.COM, HOME OF CARS & INVESTMENTS</I></marquee>
  </div>
  <div id="sch"><input type="text" placeholder="search"id="schbx"/> <input type="submit" id="schbut" value="SEARCH"/></div>
  </div>
      <div class="navi"> <a href="index.php" class="navi_tx">Home</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Clients </a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Services</a> <span class="navi_txp">
  <ul>
     <li id="t">Products
         <ul id="ls">
           <li> <a href=products.php?cat=car class="prdt">				                 New Cars</a></li>
           <li><a href=products.php?cat=lap class="prdt">                 Laptops</a></li>
           <li><a href=products.php?cat=mob class="prdt">                 Mobiles</a></li>
           <li><a href=products.php?cat=ext class="prdt">	                 Extremes</a></li>
         </ul>
     </li>
  </ul>
      
      </span> <a href="http://all-free-download.com/free-website-templates/" class="navi_hm">Admin..</a> </div>
    </div>
    <!--Top Block Ends -->
  </div>
  <div id="sub_block1">
    <!--Content Block Starts -->
    <div id="content_block">
      <!--Left Block Starts -->
      <form method="post" action="addadmin.php" enctype="multipart/form-data">
      <div id="adlog2"> <div style="z-index:1; position:relative; width:130px; left:220px; top:-40px;">Admin Registration</div>
  	User name: 
  	<input type="text" name="username" style=" position:relative;left:40px; width: 140px;" />
    <br /><br />
      Password: <input type="password" name="p1" style=" position:relative;left:47px; width: 140px;" />
<br /><br />
Confirm Password:  <input type="password" name="p2" style=" position:relative;left:3px; width: 140px;" />
<br /><br />
Picture:  <input type="file" name="img"style=" position:relative;left:62px; width: 140px;" />
<br /><br /><br />
<input type="submit" value="Register" style="float:right; margin:0 80px 0 0"  name="bn"/>
<p> 
</p>
  </div>
  </form>
      <div id="left_block"> <span class="blk1_lp"> <span class="our">ADMIN</span></span><br /><br /> <br /><br />
   <ul id="sbar">
  <li style=" background:#FC3; color:#FFF; font:25px 'Arial Black', Gadget, sans-serif">QUICK LINK</li><br>
  <li> <a href="#">Account Settings</a></li><br />
  <li><a href="#">Google Connect</a></li><br />
  <li><a href="#">Organins Products</a></li><br />
  <li><a href="adminside.php">Site Map</a></li><br />
  <li><a href="#">Accesories</a></li>
  </ul>
  </div>
  
      <!--Left Block Ends -->
      <!--Right Block Starts --><!--Right Block Ends -->
      <!--Content Block Ends -->
    </div>
  </div>
  <div id="sub_block2">
    <div id="footer_block"> <span class="ftr_nv"> <a href="http://all-free-download.com/free-website-templates/">Home</a> <span>|</span> <a href="index.php>Clients </a> <span>|</span> <a href="clients.php">Services</a> <span>|</span> <a href="services.php">About Us </a> <span>|</span> <a href="about.php">Contact us</a> </span> <span class="cpy">Copyright &copy; 2014, All rights reserved. Rollo cars designed by Joshua</span> </div>
  </div>
</center>
<div align=center></div></body>
</html>
