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
		  
      <div class="center_title_bar">Latest Products</div>
		
		<?php
$result=mysql_query("select product.pid,product.pcode,product.pname,product.price,product.pquantity,product.category,product.pimage,product.pdescription,category.id,category.maincat from product inner join category on product.Category=category.id where category.maincat like '%SALE%'") or die(mysql_error());
$n=mysql_num_rows($result);
$perpage=9;
$total=ceil($n/$perpage);
if(isset($_GET["p"]))
{
$p=$_GET["p"];
}
else
{
$p=1;
}
$l=($p-1)*$perpage;
 $res=mysql_query("select product.pid,product.pcode,product.pname,product.price,product.pquantity,product.category,product.pimage,product.pdescription,category.id,category.maincat from product inner join category on product.Category=category.id where category.maincat like 'SALE%' limit $l,$perpage");
							  while($row=mysql_fetch_array($res))
							  {
							  ?>
		<div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
         <div class="product_title"><a href="details.html"><?php echo $row[2]; ?></a></div>
          <div class="product_img"><a href="details.html"><img src="admin/image/<?php echo $row[7]; ?>" height="90px" width="90px" alt="" border="0" /></a></div>
          <div class="prod_price">
		  <?php $p=$row[3];
							$dis=$p*(10/100);
							$newp=$p-$dis; ?>
		  <span class="price">Price:<strike><?php echo $row[3]; ?></strike></span> <span class="price">
		  <?php echo $newp; ?></span></div>
        </div>
		<div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> 
		<form action="a.php" method="post">
		<input type="hidden" name="productid" value="<?php echo $row[0]?>" />
		<input type="image" src="images/cart.gif" alt="" border="0" class="left_bt" />
	 
		<a href="moreinfo.php?pid=<?php echo $row[0]; ?>" class="prod_details">details</a>
		<input type="image" src="images/buy.jpg"/>
		</form>
		<?php
								$_SESSION['url']=$_SERVER['REQUEST_URI'];
								?> 
		 </div>
      </div>
		
      <?php 
		} ?>  
		 </div>
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
        <a href="special.php?p=<?php echo $p; ?>"><< prev</a>
		<?php
		}
		}
		?>
		<?php for($i=1;$i<=$total;$i++)
		{
		echo "<a href='special.php?p=$i'>".$i."</a>&nbsp;";
		} ?>
		<?php 
							if(isset($_GET['p']))
							{ 
							$p=$_GET['p'];
							if($p<$total)
							{
							$p++;
							?>
        <a href="special.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		}
								if($p==1)
							{ 
							$p++;
							?>
        <a href="special.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		?>

       
	</td></tr></table>
	<?php } ?>
						  </table>
						  </td>
					</tr>
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
