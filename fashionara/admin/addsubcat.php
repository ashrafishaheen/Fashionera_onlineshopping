
 <?php include_once('header.php'); 
   include_once('left.php');?>
    
    <div class="right_content">            
        
    <h2>Add Subcategory</h2> 
	
         <?php
if(isset($_POST['submit']))
{
$subcat=$_POST['subcat'];
$catid=$_POST['catname'];
include_once("../connect.php");
mysql_query("insert into subcategory(subname,catid) values('$subcat',$catid)") or die(mysql_error());
$c=mysql_affected_rows($con);
if($c>0)
{
echo "Subcategory added sucessfully";
}
else
{
echo "problem in adding in Subcategory";
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
                jQuery("#subcat").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Sub Category Name"
                });
				jQuery("#catname").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
            });
            /* ]]> */
        </script>             

     
         <div class="form">
         <form action="" method="post" class="">
         
                <fieldset>
                    <dl>
                        <dt><label for="catname">Subcategory Name:</label></dt>
                        <dd><input type="text" name="subcat" id="subcat" /></dd>
                    </dl>
					
					<dl>
                        <dt><label for="subcat">Select categories:</label></dt>
                        <dd>
                            <select size="1" name="catname" id="catname">
                               <?php 
					include_once('../connect.php');
					$res=mysql_query("select * from category");
					echo "<option value='0'>--Select--</option>";
					while($row=mysql_fetch_array($res))
					{
					echo "<option value='$row[0]'>".$row[1]."</option>";
					}?>
    
                            </select>
                        </dd>
                    </dl>
                    
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="ADD" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                            
                    
                    
    
    
   <?php include_once('footer.php'); ?>