<?php include_once('header.php'); 
   include_once('left.php');?>
  

    
    <div class="right_content">            
        
    <h2>Manage Category</h2> 
       
         <div class="form">
		 <?php
$eid=$_GET['id'];
include('../connect.php');
$res=mysql_query("select subcategory.subid,subcategory.subname,subcategory.catid,category.id,category.maincat from subcategory inner join category where subcategory.catid=category.id and subcategory.subid=$eid") or die(mysql_error());

$row=mysql_fetch_array($res);
$id=$row[0];
$subcatname=$row[1];
?>
         <form action="updatesubcat.php" method="post" class="niceform">
         
                <fieldset>
				<input type="hidden" name="subcatid" id="subcatid"  value="<?php echo $id; ?>"/>
                    <dl>
                        <dt><label for="subcatname">Sub Category Name:</label></dt>
                        <dd><input type="text" name="subcatname" id="subcatname" size="54" value="<?php echo $subcatname; ?>"/></dd>
                    </dl>
					<dl>
                        <dt><label for="subcat">Select categories:</label></dt>
                        <dd>
                            <select size="1" name="catname" id="catname">
                               <?php 
							   $res1=mysql_query("select * from category") or die(mysql_error());
							   while($row1=mysql_fetch_array($res1))
							   {
					echo "<option value='$row1[0]'>".$row1[1]."</option>";}
					?>                            </select>
                        </dd>
                    </dl>
                           <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="update" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
    <?php include_once('footer.php'); ?>