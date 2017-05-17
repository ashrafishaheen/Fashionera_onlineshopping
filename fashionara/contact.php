<?php include_once('header.php');
?>
 <?php include_once('left.php'); ?>							
							  <div class="center_content">
	<div class="center_title_bar">Connect Us</div>
	<div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
												           <div class="login_form">
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
                    message: "Please enter your name"
                });
				jQuery("#msg").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Type your massage"
                });
				jQuery("#email1").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });            });
            /* ]]> */
        </script>

				
														  		 <form action="mailus.php" method="post" class="">
         
              
               <?php if(isset($_GET['val']))
            {
            $y=$_GET['val'];
            if($y=='t')
            {
            echo "Message Sent";
            }
			else
			{
			echo "Message Not Sent";
			}
            }
			?>
       
                    <dl>
                        <dt><label for="user">Enter your name:</label></dt>
                        <dd><input type="text" name="user" id="user" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="email">Emailid:</label></dt>
                        <dd><input type="text" name="email" id="email1"  /></dd>
                    </dl>
                      <dl>
                        <dt><label for="message">Message:</label></dt>
                        <dd><textarea name="msg" id="msg" rows="5" cols="36"></textarea></dd>
                    </dl>
 
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Contact" />
                     </dl>
                    
          
                
         </form>
		 </div></td>
												</tr>
											  </table>
												<table width="734"  border="0" cellspacing="0" cellpadding="0">
												  <tr>
													<td></td>
												  </tr>
												  <tr>
													<td>
														
													</td>
												  </tr>
												  <tr>
													<td></td>
												  </tr>
												</table>
												

									  </td>
									  
									</tr>
							  </table>
							  </td>
							</tr>
						  </table>
						  </td>
					</tr>
	<table style="padding-top:65px;padding-left:19%">
	<form action="" method="post">
	
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
	 
	<?php include_once('footer.php'); ?>				

