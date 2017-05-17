<?php include_once('header.php'); 
   include_once('left.php');?>
    
     <div class="right_content">            
        
    <h2>Users</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Pcode</th>
            <th scope="col" class="rounded">Pname</th>
            
        </tr>
    </thead>
        <tfoot>
		
    	<tr>
        	<td colspan="7" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    	<?php
include_once("db.php");
$result=mysql_query("select * from products") or die(mysql_error());
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
$sql1="select * from products limit $l,$perpage";
$res=mysql_query($sql1);
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td><input type='checkbox' name='' /></td>";
 echo "<td>".$row[1]."</td>";
 echo "<td>".$row[2]."</td>";
echo "</tr>";
}?>
            
    </tbody>
</table>

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a> 
     
     
        <div class="pagination">
        <span class="disabled"><< prev</span>
		<?php for($i=1;$i<=$total;$i++)
		{
		echo "<a href='viewproduct.php?p=$i'>".$i."</a>";
		}?><a href="">next >></a>
        </div> 
     
     
            
      
     
     </div><!-- end of right content-->
            
                    
                    
                    
    
    
   <?php include_once('footer.php'); ?>