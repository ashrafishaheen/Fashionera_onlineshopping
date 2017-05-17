
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


<style type="text/css">
.list ul
{
list-style:none;
}
.list ul li
{
list-style-image:url('2.gif');
}
.list ul li a
{
text-decoration:none;
color:white;
}
#para
{
font-size:18px;
color:white;
text-transform:uppercase;
}
 #admin
 {
 border:1px solid white;
 text-shadow:2px 2px 2px #A2C8D2;
 text-align:center;
 font-weight:bold;
 color:white;
 }
  .p1
 {
 width:20px;
 height:20px;
 margin:10px;
 color:grey;
 }

</style>

<?php
include_once('header.php');
?>
    
    </div>
    <!-- end of menu tab -->
    <?php
	include_once('left.php');
	?>
    <!-- end of left content -->
  <div class="right_content">            
        
    <h2>Manage Product</h2> 
                               
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded-q4"></th>
        </tr>
    </thead>
        
    <tbody>	<?php
												$id=$_GET['id'];
						include('../connect.php');
$sql1="select * from product where pid=$id";
$result=mysql_query($sql1);

$row=mysql_fetch_array($result);
?>
						<tr>
		<td><font color="red">Pcode</font></td><td><?php echo $row[1]?></td></tr>
		<tr><td><font color="red">Pname</font></td><td><?php echo $row[2]?></td></tr>
						<tr><td><font color="red">Price</font></td><td><?php echo $row[3]?></td></tr>
						<tr><td><font color="red">Quantity</font></td><td><?php echo $row[5]?></td></tr>
						<tr><td><font color="red">Description</font></td><td><?php echo $row[6]?></td></tr>
						<tr><td><font color="red">Image</font></td><td>
						<?php
						if($row[7]=='')
						{
						echo "image not found";
						}
						else
						{
						?>
						<img src='image/<?php echo $row[7]?>' width='100px' height='100px'/></td></tr>
						
						<?php
						}
echo "<td><a href='pedit.php?id=$row[0]'><img src='image/edit.jpg'></a></td>";
echo "<td><a href='javascript:deleterec($row[0])'><img src='image/delete.jpg'></a></td>";
					?>	
					</table>	
						
						

	
	
	
	</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>

</body>
</html>
    