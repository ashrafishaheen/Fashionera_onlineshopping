<?php
include_once('header.php');
	include('connect.php');
	include_once('functions.php');
?>
<style type="text/css">
.p1
 {
 width:20px;
 height:20px;
 margin:10px;
 color:grey;
 }
 </style>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <?php
	include_once('left.php');
	?>
    <!-- end of left content -->
    <div class="center_content">
		  
      <div class="center_title_bar">Products</div>
		<?php
		// $sid=$_GET['subid'];
		include_once('connect.php');
		
		$res=mysql_query("select * from product") or die(mysql_error());
        $n=mysql_num_rows($res);
$perpage=9;
$total=ceil($n/$perpage);
if(isset($_GET['p']))
{
$p=$_GET['p'];
}
else
{
$p=1;
}
$l=($p-1)*$perpage;
$s="select * from product limit $l,$perpage";
$result=mysql_query($s);
		while($row=mysql_fetch_array($result))
		{
		?>
		<div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
         <div class="product_title"><a href="details.html"><?php echo $row[2]; ?></a></div>
          <div class="product_img"><a href="details.html"><img src="admin/image/<?php echo $row[7]; ?>" height="90px" width="90px" alt="" border="0" /></a></div>
          <div class="prod_price"> <span class="price">Rs.<?php echo $row[3]; ?></span></div>
        </div>
		<div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> 
		<form action="a.php" method="post">
		<input type="hidden" name="productid" value="<?php echo $row[0]?>" />
				<input type="image" src="images/cart.gif" alt="" border="0" class="left_bt" />
		<a href="moreinfo.php?pid=<?php echo $row[0] ?>" class="prod_details">details</a>
		
		</form>
		
		<?php
								$_SESSION['url']=$_SERVER['REQUEST_URI'];
								?> 
		 </div>
      </div>
		<?php 
		} ?>
        
      							<?php if($n>9)
							{ ?>
							<table align="center"><tr><td><div class="pagination">
							<?php 
							if(isset($_GET['p']))
							{ 
							$p=$_GET['p'];
							if($p>1)
							{
							$p--;
							?>
        <a href="index.php?p=<?php echo $p; ?>"><< prev</a>
		<?php
		}
		}
		?>
		<?php for($i=1;$i<=$total;$i++)
		{
		echo "<a href='index.php?p=$i'>".$i."</a>&nbsp;";
		} ?>
		<?php 
							if(isset($_GET['p']))
							{ 
							$p=$_GET['p'];
							if($p<$total)
							{
							$p++;
							?>
        <a href="index.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		}
								if($p==1)
							{ 
							$p++;
							?>
        <a href="index.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		?>

        </div>
	</td></tr></table>
	<?php } ?>
						  </table>

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
