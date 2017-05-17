 <?php include_once('header.php'); 
   include_once('left.php');?>
    
    <div class="right_content">            
        
    <h2>Add Category</h2> 
	<script type="text/javascript" src="jquery.js">
</script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 $('#cat').change(function()
 {
 var u=$('#cat').val();
 $('span#msg').load("checkcat.php?cat="+u);
 });
 });
 </script>

         <?php
if(isset($_POST['submit']))
{
$cat=$_POST['cat'];

include_once("../connect.php");
mysql_query("insert into category(maincat,Description) values('$cat','dcat')") or die(mysql_error());
$c=mysql_affected_rows($con);
if($c>0)
{
echo "Category added sucessfully";
}
else
{
echo "problem in adding in category";
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
                jQuery("#cat").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Sub Category Name"
                });
				});              
</script>
     
         <div class="form">
         <form action="" method="post" class="">
         
                <fieldset>
                    <dl>
                        <dt><label for="catname">Category Name:</label></dt>
                        <dd><input type="text" name="cat" id="cat" /></dd>
                    </dl><span id="msg"></span>
                          <dl>
                        <dt><label for="catname">Description</label></dt>
                        <dd><input type="text" name="dcat" id="dcat" /></dd>
                    </dl><span id="msg1"></span>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="ADD" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                            
                    
                    
    
    
   <?php include_once('footer.php'); ?>