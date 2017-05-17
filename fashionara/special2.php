<?php 

include_once('header.php');
include_once("functions.php");
include_once('db.php');
	
?>
<!--<script type="text/javascript">
	function addtocart(pid)
	{
	
		document.form1.productid.value=pid;
		document.form1.submit();
	}
</script>-->
				  <table width="990" height="371" cellpadding="0" cellspacing="0"><tr>
					  <td width="643"><img src="banners/5.jpg" alt="" width="643" height="371" border="0"></td>
					  <td width="343">
							  <table width="342"  border="0" cellspacing="0" cellpadding="0">
								<tr>
								  <td><img src="banners/s20.png" alt="" width="343" height="197" border="0"></td>
								</tr>
								<tr>
								  <td><img src="banners/3.jpg" alt="" width="343" height="175" border="0"></td>
								</tr>
							  </table>
					  </td>
					</tr>
				  </table>
				  
		  
				  <?php include_once('left.php'); ?>
							  
							  <td height="670" class="pro">
							  
<!--<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>-->

							  <div id="cntr">
							  <div class="items">
							  <?php
							  $result=mysql_query("select products.Pid,products.Pcode,products.Pname,products.Price,products.Quantity,products.Categories,products.Sub_cat,products.Image,products.F_view,products.S_view,products.Description,categories.Cat_id,categories.Cat_name from products inner join categories on products.Categories=categories.Cat_id where categories.Cat_name like '%SALE%'") or die(mysql_error());
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
							  $res=mysql_query("select products.Pid,products.Pcode,products.Pname,products.Price,products.Quantity,products.Categories,products.Sub_cat,products.Image,products.F_view,products.S_view,products.Description,categories.Cat_id,categories.Cat_name from products inner join categories on products.Categories=categories.Cat_id where categories.Cat_name like 'SALE%' limit $l,$perpage");
							  while($row=mysql_fetch_array($res))
							  {
							  ?>
							  <div class="item" style="margin-top:0px">
							<h5><?php echo $row[2]; ?> </h5>
							<div class="itemimage">
                        <a href="moreinfo.php?pid=<?php echo $row[0]; ?>"><img src="admin/image/<?php echo $row[7]; ?>" alt="" width="150" height="159" /></a>
                        </div> 
							<div class="price">
							<?php $p=$row[3];
							$dis=$p*(10/100);
							$newp=$p+$dis; ?>
								<p><span class="old">Price:<strike><?php echo $newp; ?></strike></span><span class="new">Rs.<?php echo $row[3]; ?></span></p><br />
								<p class="more"><a href="moreinfo.php?pid=<?php echo $row[0]; ?>">More Info</a></p>
								<form class="bttn" action="a.php" method="post">
								<input type="hidden" value="<?php echo $row[0]; ?>" name="productid" />
									<!--<img src="images/buy.jpg" alt="" width="53" height="23"  />-->
									
									<input type="image" src="images/buy.jpg"/>
								</form>
								<?php
								$_SESSION['url']=$_SERVER['REQUEST_URI'];
								?>
							</div>
						</div>
						<?php } ?>
						</div></div>
							  </td>
							</tr>
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

        </div>
	</td></tr></table>
	<?php } ?>
						  </table>
						  </td>
					</tr>
	<?php include_once('footer.php'); ?>				
