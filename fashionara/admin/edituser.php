 <?php include_once('header.php'); 
   include_once('left.php');?>
  

    
    <div class="right_content">            
        
    <h2>Manage User</h2> 
       
       <script type="text/javascript" src="jquery.js">
</script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 $('#user').change(function()
 {
 var u=$('#user').val();
 $('span#msg').load("checkuser.php?user="+u);
 });
 });
 </script>  
        
        <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
			jQuery("#phone").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				});
				</script>           

     
         <div class="form">
		 <?php
$eid=$_GET['id'];
include('../connect.php');
$res=mysql_query("select * from customer where id=$eid");
$row=mysql_fetch_array($res);
$id=$row[0];
$username=$row[1];
$pass=$row[2];
$ph=$row[3];
$add=$row[4];
$email=$row[5];
?>
         <form action="updateuser.php" method="post" class="niceform">
         
                <fieldset>
				<input type="hidden" name="uid" id="uid"  value="<?php echo $id; ?>"/>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="user" id="user" size="54" value="<?php echo $username; ?>"/></dd>
                    </dl><span id="msg"></span>
                    
                     <dl>
                        <dt><label for="phone">Phone:</label></dt>
                        <dd><input type="text" name="phone" id="phone" size="54" value="<?php echo $ph; ?>" /></dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="address">Address:</label></dt>
                        <dd><textarea name="address" id="address" rows="5" cols="36" ><?php echo $add; ?></textarea></dd>
                    </dl>
					<dl>
                        <dt><label for="emailid">Email Id:</label></dt>
                        <dd><input type="text" name="emailid" id="emailid" size="54" value="<?php echo $email; ?>" /></dd>
                    </dl>
					
                    
                    
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="update" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                            
                    
                    
    
    
   <?php include_once('footer.php'); ?>