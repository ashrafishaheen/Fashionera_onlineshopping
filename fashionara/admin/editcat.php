<?php include_once('header.php'); 
   include_once('left.php');?>
  

    
    <div class="right_content">            
        
    <h2>Manage Category</h2>
	<script type="text/javascript" src="jquery.js">
</script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 $('#catname').change(function()
 {
 var u=$('#catname').val();
 $('span#msg').load("checkcat.php?cat="+u);
 });
 });
 </script> 
       
         <div class="form">
		 <?php
$eid=$_GET['id'];
include('../connect.php');
$res=mysql_query("select * from category where id=$eid");
$row=mysql_fetch_array($res);
$id=$row[0];
$catname=$row[1];
?>
         <form action="updatecat.php" method="post" class="niceform">
         
                <fieldset>
				<input type="hidden" name="catid" id="catid"  value="<?php echo $id; ?>"/>
                    <dl>
                        <dt><label for="Catname">Category Name:</label></dt>
                        <dd><input type="text" name="catname" id="catname" size="54" value="<?php echo $catname; ?>"/></dd>
                    </dl>
					<span id="msg"></span>
                           <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="update" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
    <?php include_once('footer.php'); ?>