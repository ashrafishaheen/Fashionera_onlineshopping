 <?php include_once('header.php'); 
   include_once('left.php');?>
  

    
    <div class="right_content">            
   <?php
     include_once('../connect.php');

	if(isset($_POST['send']))
	{
	    $message= $_POST['newsletter'];
	    $subject= "Daily Newsletter";
	    $From= "UrPhp.com Newsletter <support@urphp.com>";
	    $emails= @mysql_query("SELECT * FROM newsletters");
	    while($show= @mysql_fetch_array($emails)) {
	        @mail("$show[email]","$subject",$message,"From: $From");
	    }
	    echo"<h3>Newsletter has been Sent!</h3>";
}
?>
	<form action=""method="post"name="newsletter">
	<strong><h3>Write Newsletter below:</h3></strong><br/>
	    <textarea name="newsletter"cols="70"rows="25"></textarea><br/>
    <input type="submit"name="send"id="send"value="Send Newsletter"/>
	</form>

     
     </div><!-- end of right content-->
            
                            
                    
                    
    
    
   <?php include_once('footer.php'); ?>