<?php
include_once('header.php');
?>
	<script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
			
							/* jQuery("#email").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "enter the Required field"
                });*/
              jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "enter a valid Email ID"
                });
				});
				</script>

	
	<tr>
										  <td height="165" align="left" valign="top" class="news">
										  <?php
	include_once('connect.php');
	if(isset($_POST['email'])){
	    $email = $_POST['email'];
	    if(empty($email)){
	        echo "<font color='white'>you must write your email!</font>";
	    }
		else
		{
	        mysql_query("insert into newsletter(emailid) values('$email')");
	        echo "<font color='red'>Thanks, for subscribing to our newsletter</font>";
	    }
	}
	?>
	
										  <form name="form1" method="post" action="">
											<table width="100%"  border="0" cellspacing="0" cellpadding="0">
											  <tr>
												<td width="10%" height="37">&nbsp;</td>
												<td width="90%" valign="bottom" class="WhiteNews">Newsletter</td>
											  </tr>
											  <tr>
												<td height="29">&nbsp;</td>
												<td valign="bottom" class="txt">Enter your e-mail:</td>
											  </tr>
											  <tr>
												<td height="41">&nbsp;</td>
												<td><input type="text" name="email" id="email" class="NewsInfo"></td>
											  </tr>
											  <tr>
												<td>&nbsp;</td>
												<td><input type="image" name="submit" value="Subscribe"  alt="" width="82" height="23" border="0"
												src='images/sb.jpg'></a></td>
											  </tr>
											</table>
										  </form>
										  </td>
										</tr>
									 
 