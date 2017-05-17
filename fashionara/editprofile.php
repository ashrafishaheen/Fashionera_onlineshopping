<?php include_once('header.php');
?>

				 
					
					
				 <?php include_once('left.php'); ?>							  </td>
							 					  <div class="center_content">
	<div class="center_title_bar" id="two" align="center">Update Profile</div>
	<div class="prod_box_big" id="second">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
	<table style="padding-top:65px;padding-left:20%">
												           <div class="login_form">


<?php
			 if(isset($_SESSION['user']))
			 {
$un=$_SESSION['user'];

include('connect.php');
$res=mysql_query("select * from customer where username='$un'");
$row=mysql_fetch_array($res);
$id=$row[0];
$username=$row[1];
$pass=$row[2];
$ph=$row[3];
$add=$row[4];
$email=$row[5];
?>
														   
												  <form action="updateuser.php" method="post" class="">
         
                
				
       <input type="hidden" name="uid" id="uid"  value="<?php echo $id; ?>"/>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="user" id="user"  value="<?php echo $username; ?>"/></dd>
                    </dl><span id="msg"></span>
                    
                     <dl>
                        <dt><label for="phone">Phone:</label></dt>
                        <dd><input type="text" name="phone" id="phone" value="<?php echo $ph; ?>" /></dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="address">Address:</label></dt>
                        <dd><textarea name="address" id="address" rows="5" cols="36" ><?php echo $add; ?></textarea></dd>
                    </dl>
					<dl>
                        <dt><label for="emailid">Email Id:</label></dt>
                        <dd><input type="text" name="emailid" id="emailid"  value="<?php echo $email; ?>" /></dd>
                    </dl>
					
                    
                    <?php } ?>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="update" />
                     </dl>
                     
                    
               
                
         </form>
		 
		 
		 </td>
												</tr>
											  </table>
												        <div class="bottom_prod_box_big"></div>
      </div>
       </div>
</div>
	<?php
	include_once('right.php');
	?>
	 
	
    <!-- end of right content -->

	<?php include_once('footer.php'); ?>				
