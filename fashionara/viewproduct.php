<?php
include_once('header.php');
?>
<?php
	include('connect.php');
	include_once('functions.php');
?>


<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>

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
	  $sid=$_GET['sid'];
	  include('connect.php');
	  $res=mysql_query("select * from product where subid=$sid");
	 while($r= mysql_fetch_array($res))
	 {
	  ?>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html"><?php echo $r[2]?></a></div>
          <div class="product_img"><a href="details.html"><img src="admin/image/<?php echo $r[7]?>" height="90px" width="90px" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="price"><?php echo $r[3]?></span></div>
        </div>
		
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> 
			<form action="a.php" method="post">
		<input type="hidden" name="productid" value="<?php echo $r[0]?>" />
		<input type="image" src="images/cart.gif" alt="" border="0" class="left_bt" />
	
		<a href="moreinfo.php?pid=<?php echo $r[0] ?>" class="prod_details">details</a> </div>

		</form>
		<?php
								$_SESSION['url']=$_SERVER['REQUEST_URI'];
								?>
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
