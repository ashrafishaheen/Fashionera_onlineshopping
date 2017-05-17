<?php include_once('header.php'); 
   include_once('left.php');?>
  

    
    <div class="right_content">            
        
    <h2>Add Product</h2> 
     
	 <script type="text/javascript" src="jquery.js">
</script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 $('#pcode').change(function()
 {
 var p=$('#pcode').val();
 $('span#msg').load("check.php?pcode="+p);
 });
 
 $('#categories').change(function()
 {
 var p=$('#categories').val();
 $('#subcat').load("fetchsubcat.php?catid="+p);
 });
 
 
 });
</script> 

   <?php   
if(isset($_POST['submit']))
{
$pcode=$_POST['pcode'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$pdecpr=$_POST['pdecp'];
$categories=$_POST['categories'];
$sub_cat=$_POST['subcat'];
$fname=$_FILES['img']['name'];
$tname=$_FILES['img']['tmp_name'];
$s=move_uploaded_file($tname,"image/".$fname);
if($s==true)
{
include_once("../connect.php");
mysql_query("insert into product(pcode,pname,price,pquantity,pdescription,category,subid,pimage)
values('$pcode','$pname','$price','$quantity','$pdecpr','$categories','$sub_cat','$fname')") or die(mysql_error());
$c=mysql_affected_rows($con);
if($c>0)
{
echo "Product Added Succesfully";
}
else
{
echo "problem while adding products";
}
}
else
{
echo "problem in image uploading";
}
}?>              
          <link rel="stylesheet" type="text/css" href="stylesheets/jquery.validate.css" />
        
        <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#pcode").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Product Code"
                });
                 jQuery("#pname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Product Name"
                });
				jQuery("#price").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Price"
                });
				jQuery("#quantity").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Quantity"
                });
				jQuery("#categories").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please select the Category"
                });
				jQuery("#subcat").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please select Sub Category"
                });
				jQuery("#img").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select the Image"
                });
            });
            /* ]]> */
        </script>          

     
         <div class="form">
         <form action="" method="post" class="" enctype="multipart/form-data">
         
                <fieldset>
                    <dl>
                        <dt><label for="pcode">Pcode:</label></dt>
                        <dd><input type="text" name="pcode" id="pcode"/></dd>
                    </dl><span id="msg"></span>
                    <dl>
                        <dt><label for="pname">Pname</label></dt>
                        <dd><input type="text" name="pname" id="pname" /></dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="Price">Price:</label></dt>
                        <dd><input type="text" name="price" id="price" /></dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="Quantity">Quantity:</label></dt>
                        <dd><input type="text" id="quantity" name="quantity"/></dd>
                    </dl>
					  <dl>
                        <dt><label for="Price">Description</label></dt>
                        <dd><input type="text" name="pdecp" id="decp" /></dd>
                    </dl>
					<dl>
                        <dt><label for="Categories">Categories</label></dt>
                        <select size="1" name="categories" id="categories">
                               <?php 
					include_once('../connect.php');
					$res=mysql_query("select * from category");
					echo "<option value='0'>--Select--</option>";
					while($row=mysql_fetch_array($res))
					{
					echo "<option value='$row[0]'>".$row[1]."</option>";
					}?></select>
                    </dl>
					
					<dl>   
                        <dt><label for="Subcat">Sub Categories</label></dt>
						<dd><select size="1" name="subcat" id="subcat">
						<option value='0'>--Select Sub Category--</option>
                       </select></dd>
                    </dl>
					<dl>
                        <dt><label for="Image">Image</label></dt>
                        <dd><input type="file" name="img" id="img" /></dd>
                    </dl>
					
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                            
                    
                    
    
    
   <?php include_once('footer.php'); ?>