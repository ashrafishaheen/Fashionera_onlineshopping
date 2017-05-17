<?php
include_once('header.php');
	include('connect.php');
	include_once('functions.php');
?>

      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <?php
	include_once('left.php');
	?>
    <!-- end of left content -->
    <div class="center_content">
		  
      
		<?php
							  include_once('connect.php');
							  $pid=$_GET['pid'];
                               $res=mysql_query("select * from product where pid=$pid");
							   $row=mysql_fetch_array($res);
							   ?>  
							   <div style="margin:30px">
							   <div style="float:left">
							   <img src="admin/image/<?php echo $row[7];?>" height="250" width="250" border="2px" /><br />
							   <a href="admin/image/<?php echo $row[7];?>" rel=""><img src="images/zoom.gif" alt="" title="" border="0" /></a>
							   

</div>
							   <div style="float:left;margin-left:30px">
							   <table align="center">
							   <tr><td colspan="2"><font face="Monotype Corsiva" size="+4"><b><?php echo $row[2];?></b></font></td></tr>
							   <tr><td>
							   <label>PRODUCT CODE:</label></td><td><?php echo $row[1];?></td></tr>
							   <tr><td>
							   <label>PRICE:</label></td><td><?php echo $row[3];?></td></tr>
							   <tr><td>
							   <label>QUANTITY:</label></td><td><?php echo $row[4];?></td></tr>
							   <?php $size=$row[8];
							   if($size=="")
							   { 
							   }
							   else
							   { ?>
							   <tr><td>
							   <label>SIZE:</label></td><td><?php echo $size;?></td></tr>
							   <?php } ?>
							 
							   <tr><td>
							   <label>SUB CATEGORY:</label></td><td><?php $sub_cat=$row[4];
							   $res2=mysql_query("select * from subcategory where subid=$sub_cat ");
							   $row2=mysql_fetch_array($res2);
							   echo $row2[1];?></td></tr>
							   <form class="bttn" action="a.php" method="post">
							
							   <tr><td><a href="<?php echo $_SESSION['url']?>">BACK</a>
							   </td><td><form class="bttn" action="a.php" method="post">
								<input type="hidden" value="<?php echo $row[0]; ?>" name="productid" />
									<!--<img src="images/buy.jpg" alt="" width="53" height="23"  />-->
									<input type="image" src="images/buy.jpg"/>
								</form>
							   </table>
							   </div>
							   </div>
							  </td>
							</tr>

						  </table>
						  </td>
					</tr>
    <!-- end of center content -->

    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <?php
  include_once('footer.php');
  ?>
