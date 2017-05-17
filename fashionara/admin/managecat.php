    
   <?php include_once('header.php'); 
   include_once('left.php');?>
    
     <div class="right_content">            
        
    <h2>Manage Categories</h2> 
          
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Category Id</th>
            <th scope="col" class="rounded">Category Name</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        
    <tbody>
    	<?php
include_once("../connect.php");
$result=mysql_query("select * from category") or die(mysql_error());
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
$sql1="select * from category limit $l,$perpage";
$result=mysql_query($sql1);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td><input type='checkbox' name='' /></td>";
 echo "<td>".$row[0]."</td>";
 echo "<td>".$row[1]."</td>";
 echo "<td><a href='editcat.php?id=$row[0]'><img src='images/user_edit.png' alt='' title='' border='0'/></a></td>";
 echo  "<td><a href='deletecat.php?id=$row[0]' class='ask'><img src='images/trash.png' alt='' title='' border='0' /></a></td>";
echo "</tr>";
}?>
    </tbody>
</table>

	 <!--<a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a> -->
     
     
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
        <a href="managecat.php?p=<?php echo $p; ?>"><< prev</a>
		<?php
		}
		}
		?>
		<?php for($i=1;$i<=$total;$i++)
		{
		echo "<a href='managecat.php?p=$i'>".$i."</a>&nbsp;";
		} ?>
		<?php 
							if(isset($_GET['p']))
							{ 
							$p=$_GET['p'];
							if($p<$total)
							{
							$p++;
							?>
        <a href="managecat.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		}
								if($p==1)
							{ 
							$p++;
							?>
        <a href="managecat.php?p=<?php echo $p; ?>">next >></a>
		<?php
		}
		?>

        </div>
		<?php
		} 
		?>
     
            
      
     
     
      
     
     </div><!-- end of right content-->
            
                    
                    
                    
    
    
   <?php include_once('footer.php'); ?>