<?php
include_once('header.php');
?>
<?php
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
      <!--<div class="center_title_bar">Latest Products</div>-->
	 									  <?php
										  if(isset($_POST['textfield']))
										  {
							  $s=$_POST['textfield'];
							  }
							  else
							  {
							  $s=3;
							  }
							   $res=mysql_query("select * from product where subid=$s") or die(mysql_error());
							  while($row=mysql_fetch_array($res))
							  {?>
 
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html"><?php echo $row[2]?></a></div>
          <div class="product_img"><a href="details.html"><img src="admin/image/<?php echo $row[7]?>" height="90px" width="90px" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="price"><?php echo $row[3]?></span></div>
        </div>
		
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> 
			<form action="a.php?id=<?php echo $row[0]; ?>" method="post">
		<input type="hidden" name="productid" value="<?php echo $row[0]?>" />
		<input type="image" src="images/cart.gif" alt="" border="0" class="left_bt" />
		<a href="moreinfo.php?pid=<?php echo $row[0] ?>" class="prod_details">details</a>
		</form>
		
		 
		
		 </div>
      </div>
	  <?php
	  }
	  ?>
	 
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
