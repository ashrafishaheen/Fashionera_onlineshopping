<?php include_once('header.php'); 
   include_once('left.php');?>
    
     <div class="right_content">            
        
    <h2>Order Detail</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company">Order_Id</th>
            <th scope="col" class="rounded">Product Id</th>
            <th scope="col" class="rounded">Quantity</th>
			<th scope="col" class="rounded">Price</th>
                  </tr>
    </thead>
        
    <tbody>
    	<?php
include_once("../connect.php");
$result=mysql_query("select * from order_detail") or die(mysql_error());
$n=mysql_num_rows($result);
$perpage=10;
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
$sql1="select order_detail.orderid,order_detail.productid,order_detail.quantity,order_detail.price,product.pid,product.pname from order_detail inner join product on order_detail.productid=product.pid limit $l,$perpage";
$res=mysql_query($sql1);
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[3]."</td>";
echo "</tr>";
}?>
            
    </tbody>
</table>

	
     
        <?php if($n>10)
							{ ?>
							<div class="pagination">
							<?php 
							if(isset($_GET['p']))
							{ 
							$p=$_GET['p'];
							if($p>1)
							{
							$p--;
							?>
        <a href="vieworderdetail.php?p=<?php echo $p; ?>"><< prev</a>
		<?php
		}
		}
		?>
		<?php for($i=1;$i<=$total;$i++)
		{
		echo "<a href='vieworderdetail.php?p=$i'>".$i."</a>&nbsp;";
		} ?>
		<?php 
							if(isset($_GET['p']))
							{ 
							$p=$_GET['p'];
							if($p<$total)
							{
							$p++;
							?>
        <a href="vieworderdetail.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		}
								if($p==1)
							{ 
							$p++;
							?>
        <a href="vieworderdetail.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		?>

        </div>
		<?php } ?>

     
            
      
     
     </div><!-- end of right content-->
            
                    
                    
                    
    
    
   <?php include_once('footer.php'); ?>