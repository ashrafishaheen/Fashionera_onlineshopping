 <?php include_once('header.php'); 
   include_once('left.php');?>
  

    
    <div class="right_content">            
        
    <h2>Change Password</h2> 
       
       <script type="text/javascript" src="jquery.js">
</script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 $('#user').change(function()
 {
 var u=$('#newpwd').val();
 $('span#msg').load("checkuser.php?user="+u);
 });
 });
 </script>  
<?php
if(isset($_POST['submit']))
{
$un=addslashes($_SESSION['username']);
$np=md5($_POST['newpwd']);
$cp=md5($_POST['confirmpwd']);
if($np==$cp)
{
include_once('../connect.php');
$res=mysql_query("update admin set password='$np' where username='$un'");
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
                   

     
         <div class="form">
		          <form action="" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">New Password:</label></dt>
                        <dd><input type="password" name="newpwd" id="newpwd" size="54" value=""/></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Confirm Password:</label></dt>
                        <dd><input type="password" name="confirmpwd" id="confirmpwd" size="54" value="" /></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Change" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                            
                    
                    
    
    
   <?php include_once('footer.php'); ?>