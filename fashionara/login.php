<?php
include_once('header.php');
?>       
		<div class="right_menu_corner">
    

														    
      </div>
    <!-- end of menu tab -->
    <?php
	include_once('left.php');
	?>
    <!-- end of left content -->
    <div class="center_content">
	<div class="center_title_bar" id="two" align="center">Click here to Login</div>
	<div class="prod_box_big" id="second">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
	<table style="padding-top:65px;padding-left:20%">
	<?php
            if(isset($_GET['val']))
            {
            $y=$_GET['val'];
            if($y=='f')
            {
            echo "Wrong username and password";
            }
            }
            ?> 
			
			 <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#username").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Username"
                });
				jQuery("#password").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
				
            });
            /* ]]> */
        </script>
	<form action="auth.php" method="post">

                 </dd>
       
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="username" id="username" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="password" id="password" /></dd>
                    </dl>
                    
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Login" />&nbsp;&nbsp;
                     </dl>
                    
               
                
	</form>
	
    </table>
	</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
	
	<?php
	include_once('right.php');
	?>
	 
	
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <?php
  include_once('footer.php');
  ?>
