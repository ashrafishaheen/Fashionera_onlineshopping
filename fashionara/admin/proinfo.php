    
   <?php include_once('header.php'); 
   include_once('left.php');?>
   <script type="text/javascript">
function deleterec(id)
{
	var r=confirm("are you sure to delete"+id);
	if(r==true)
	{
		window.location.href='pdelete.php?id='+id;
	}
	else
	{
	}
}
</script>
    
     <div class="right_content">            
        
    <h2>Manage Product</h2> 
                               
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded-q4"></th>
        </tr>
    </thead>
        
    <tbody>
    	<?php
		$id=$_GET["id"];
include_once("../connect.php");
$result=mysql_query("select * from product where pid=$id") or die(mysql_error());
$n=mysql_num_rows($result);
$row=mysql_fetch_array($result);
echo "<tr>";
echo "<td width=100>Product Code</td>";
 echo "<td>".$row[1]."</td></tr>";
 echo "<tr>";
echo "<td>Product Name</td>";
 echo "<td><p title='$row[2]'>".substr($row[2],0,10)."</p></td></tr>";
 echo "<tr>";
echo "<td>Price</td>";
 echo "<td>".$row[3]."</td></tr>";
 echo "<tr>";
echo "<td>Quantity</td>";
 echo "<td>".$row[5]."</td></tr>";
 
echo "<tr>";
echo "<td>Category</td>";
 echo "<td>".$row[9]."</td></tr>";

  echo "<tr>";
echo "<td>Description</td>";
 echo "<td>".$row[6]."</td></tr>";
echo "<tr>";
echo "<td>Product Image</td>";
echo "<td>";
if($row[7]=='')
{
echo "product has no image";
}
else
{
echo "<img src='image/$row[7]' height=100 width=100/></td></tr>";
 }
?>
    </tbody>
</table>

	 <?php echo "<a href='pedit.php?id=$id' class='bt_green'><span class='bt_green_lft'></span><strong>Edit Product</strong><span class='bt_green_r'></span></a>
     
     <a href=''javascript:deleterec($row[0])'' class='bt_red'><span class='bt_red_lft'></span><strong>Delete items</strong><span class='bt_red_r'></span></a>";?> 
     
      
     
     
     
      
     
     </div><!-- end of right content-->
            
                    
                    
                    
    
    
   <?php include_once('footer.php'); ?>
