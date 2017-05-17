<?php
ob_start();
include_once('header.php');
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
?>
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
</style>


    
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
        
    <tbody>												<?php
						$eid=$_GET['id'];
						include('../connect.php');
						$result=mysql_query("select * from product where pid=$eid");
						$r=mysql_fetch_array($result);
						$id=$r[0];
						$name=$r[1];
						$pname=$r[2];
						$price=$r[3];
						$pquantity=$r[5];
						$pdescription=$r[6];
						$pimage=$r[7];
						if(isset($_POST['submit']))
						{
						$un=$_POST['name'];
					    $n=$_POST['pname'];
					    $p=$_POST['price'];
					    $q=$_POST['qnt'];
					    $d=$_POST['pdesc'];
					
				    $iname=$_FILES['img1']['name'];
					$type=$_FILES['img1']['type'];
					$tmpname=$_FILES['img1']['tmp_name'];


$u=uniqid();
$e=explode(".",$iname);
$ext=$e[1];
$newname=$u.".".$ext;
$mov=move_uploaded_file($tmpname,'image/'.$newname);
$path="image/".$newname;

						mysql_query("update product set pcode='$un',pname='$n',price=$p,pquantity=$q,pdescription='$d',pimage='$newname' where pid=$eid");
						$c=mysql_affected_rows($con);
						if($c>0)
						{
						header('location:manageproduct.php');
						ob_end_flush();
						}
						}
						?>
						<table>
<form action="" method="post" enctype="multipart/form-data">
<tr><td>
					Code</td><td><input type="text" name="name" value="<?php echo $name?>"/></td></tr>
					<tr><td>
					Pname</td><td><input type="text" name="pname" value="<?php echo $pname?>"/></td></tr>
					<tr><td>
					Price</td><td><input type="text" name="price" value="<?php echo $price?>"/></td></tr>
					<tr><td>
					Pquantity</td><td><input type="text" name="qnt" value="<?php echo $pquantity?>"/></td></tr>
					<tr><td>
					Pdescriptiont</td><td><input type="text" name="pdesc" value="<?php echo $pdescription?>"/></td></tr>
					<tr><td>
					Pimage</td><td>
					<?php
						if($r[7]=='')
						{
						echo "image not found";
						}
						else
						{
						?>
<img src='image/<?php echo $pimage?>' width='100px' height='100px'/><a href='remove.php?id=<?php echo $r[0]?>&name=<?php echo $pimage?>'>Remove</a><br>
					<?php
					}
					?>
					<input type="file" name="img1"/></td></tr>
						<tr><td colspan="2">
					<input type="submit" value="update" name="submit"/></td></tr>
					
					</form>
					</table>
						
						
						</td>			
						</table>
	
	</div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>

</body>
</html>
    