<?php
ob_start();
session_start();
include_once('functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fashionara</title>
 <link rel="stylesheet" type="text/css" href="stylesheets/jquery.validate.css" />
       
        <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
		
		
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">

  <div class="top_bar">
    <div class="top_search">
	<form action="search.php" method="post">
  
	  <div style="float:left">
	  <table width="90%"  border="0" cellspacing="0" cellpadding="0">
													  <tr>
													  
														
														<td width="55%">Search<select class="cls" name="textfield">
														<?php include_once('connect.php');
														$res=mysql_query("select * from subcategory");
														while($row=mysql_fetch_array($res))
														{ ?>
												<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
												<?php } ?>
											  </select></td>
														<td width="22%"><input type="image" src="images/search.gif" alt="" width="32" height="23" border="0"></td></form>
													  </tr>
													  
													</table>
													</div>
													<?php
											if(isset($_SESSION['username']))
 {?>
 
 <?php
 }
 else
 { 
 ?>
 <?php } ?>
     
    </div>
	
    <div class="languages">
      <div class="lang_text">Languages:</div>
      <img src="images/1.png" alt="" border="0" /> <a href="http://all-free-download.com/free-website-templates/" class="lang"><img src="images/de.gif" alt="" border="0" /></a> </div>
  </div>
  <div id="header">
    <div id="logo"> <a href="http://all-free-download.com/free-website-templates/"><img src="images/logo.gif" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
      <div class="oferta">
        <div class="oferta_content" style="width:100%"><img src="images/images.jpg" width="625" height="150" alt="" border="0"class="oferta_img" />
          
      </div>
     
    </div>
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index1.php" class="nav1"> Home</a></li>
        <li class="divider"></li>
        <li><a href="index.php" class="nav2">Products</a></li>
        <li class="divider"></li>
        <li><a href="special.php" class="nav3">Specials</a></li>
        <li class="divider"></li>
        <li><a href="login.php" class="nav4">My account</a></li>
        <li class="divider"></li>
        <li><a href="register.php" class="nav4">Sign Up</a></li>
        <li class="divider"></li>
       
        <li><a href="contact.php" class="nav6">Contact Us</a></li>
        <li class="divider"></li>
	

		<?php if(isset($_SESSION['user']))
		{ ?>
		<li><a href="chgpwd.php" name="cpwd" id="wht">Change Password</a></li>
		<td rowspan="2" align="center">&nbsp;&nbsp;&nbsp;<a href="logout.php" name="pwd" id="wht">Logout</a></td></tr>
 <li><a href="editprofile.php" id="wht" name="pwd">Update Profile</a></li>
 </table>
       
     
        </li>
		<?php } ?>
      </ul>