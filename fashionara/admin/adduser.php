    
   <?php include_once('header.php'); 
   include_once('left.php');?>
  

    
    <div class="right_content">            
        
    <h2>Add User</h2> 
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
       <?php
if(isset($_POST['submit']))
{
$u=$_POST['user'];
$p=md5($_POST['password']);
$g=$_POST['gender'];
$ph=$_POST['phone'];
$add=$_POST['address'];
$email=$_POST['emailid'];
$ut=$_POST['usertype'];
include_once("../connect.php");
mysql_query("insert into customer(username,password,gender,mobile_no,address,email,Usertype)
values('$u','$p','$g','$ph','$add','$email','$ut')") or die(mysql_error());
$c=mysql_affected_rows($con);
if($c>0)
{
echo "account created";
}
else
{
echo "problem while creating account";
}
}?>              
        <link rel="stylesheet" type="text/css" href="stylesheets/jquery.validate.css" />
        
        <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#user").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Username"
                });
				jQuery("#password").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
				jQuery("#radio").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please select a radio button"
                });
                jQuery("#phone").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
                jQuery("#ValidInteger").validate({
                    expression: "if (VAL.match(/^[0-9]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid integer"
                });
                
                jQuery("#emailid").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                jQuery("#address").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Address"
                });
                jQuery("#chkbx").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please chk the Checkbox to accept the Terms & conditions"
                });
				
            });
            /* ]]> */
        </script>
     
         <div class="form">
         <form action="" method="post" class="">
         
                <fieldset>
                    <dl>
                        <dt><label for="username">Username:</label></dt>
                        <dd><input type="text" name="user" id="user" /></dd>
                    </dl><span id="msg"></span>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="password" id="password"/></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="gender">Gender</label></dt>
                        <dd>
						<span id="radio">
                            <input type="radio" name="gender" id="male" value="Male" /><label class="check_label">Male</label>
                            <input type="radio" name="gender" id="female" value="Female" /><label class="check_label">Female</label></span>
                        </dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="phone">Phone:</label></dt>
                        <dd><input type="text" name="phone" id="phone"  /></dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="address">Address:</label></dt>
                        <dd><textarea name="address" id="address" rows="5" cols="36"></textarea></dd>
                    </dl>
					<dl>
                        <dt><label for="emailid">Email Id:</label></dt>
                        <dd><input type="text" name="emailid" id="emailid"/></dd>
                    </dl>
					
                    
                    <dl><dt></dt><dd><input type="hidden" name="usertype" id="usertype" value="1" /></dd></dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                            
                    
                    
    
    
   <?php include_once('footer.php'); ?>