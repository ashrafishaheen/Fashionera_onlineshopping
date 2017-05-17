<?php include_once('header.php'); 
   include_once('left.php');?>
    
     <div class="right_content">            
        
    <h2>Orders</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company">Order_No.</th>
            <th scope="col" class="rounded">Date</th>
            <th scope="col" class="rounded">Customer Name</th>
		<th scope="col" class="rounded">Products</th>
		<th scope="col" class="rounded">Total order</th>
                  </tr>
    </thead>
        
    <tbody>
    	<?php
include_once("../connect.php");
$result=mysql_query("select * from orders") or die(mysql_error());
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
$sql1="select orders.serial,orders.date,orders.customerid,orders.amount,bcustomer.serial,bcustomer.name from orders inner join bcustomer on orders.customerid=bcustomer.serial limit $l,$perpage";
$res=mysql_query($sql1);
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
 echo "<td>".$row[1]."</td>";
 echo "<td>".$row[5]."</td>";
 $sql2=mysql_query("select * from order_detail where orderid=$row[0]");
 echo "<td>";
 while($row2=mysql_fetch_array($sql2))
 {
 $sql3=mysql_query("select * from product where pid=$row2[1]");
 $row3=mysql_fetch_array($sql3);
 echo $row3[2]."<br>";
 }
 echo "</td>";
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
        <a href="vieworder.php?p=<?php echo $p; ?>"><< prev</a>
		<?php
		}
		}
		?>
		<?php for($i=1;$i<=$total;$i++)
		{
		echo "<a href='vieworder.php?p=$i'>".$i."</a>&nbsp;";
		} ?>
		<?php 
							if(isset($_GET['p']))
							{ 
							$p=$_GET['p'];
							if($p<$total)
							{
							$p++;
							?>
        <a href="vieworder.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		}
								if($p==1)
							{ 
							$p++;
							?>
        <a href="vieworder.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		?>

        </div>
		<?php } ?>
    
            
      
     
     </div><!-- end of right content-->
            
                    
                    
                    
    
    
   <?php include_once('footer.php'); ?>