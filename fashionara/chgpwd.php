<?php include_once('header.php');
?>

		  
				 <?php include_once('left.php'); ?>							  </td>
					  <div class="center_content">
	<div class="center_title_bar" id="two" align="center">Change Password</div>
	<div class="prod_box_big" id="second">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
	<table style="padding-top:65px;padding-left:20%">
												           <div class="login_form">

														   
												  <form action="" method="post" class="">
         
               
                  </dd>
				  														   <?php
if(isset($_POST['submit']))
{
$un=$_SESSION['user'];
$np=md5($_POST['npwd']);
$cp=md5($_POST['cpwd']);
if($np==$cp)
{
include_once('connect.php');
$res=mysql_query("update customer set password='$np' where username='$un'");
$c=mysql_affected_rows($con);
if($c>0)
{
echo "password changed";
}
else
{
echo "password not changed";
}
}
else
{
echo "password not matched";
}
}
?>
       
                    <dl>
                        <dt><label for="npwd">New Password:</label></dt>
                        <dd><input type="password" name="npwd" id="npwd"  /></dd>
                    </dl>
                    <dl>
                        <dt><label for="Cpwd"> Password:</label></dt>
                        <dd><input type="password" name="cpwd" id="cpwd"  /></dd>
                    </dl>
                    <dl>
                        
                   
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Change" />
                     </dl>
                    
                
                
         </form>
		 
		 </div></td>
												</tr>
											  </table>
												
												
</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
	<?php
	include_once('right.php');
	?>
	 
	
    <!-- end of right content -->
	<?php include_once('footer.php'); ?>				
