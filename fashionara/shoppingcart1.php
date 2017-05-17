<?php
	include_once('header.php');
	include_once("connect.php");
	include_once("functions.php");
	error_reporting(0);
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
	remove_product($_REQUEST['pid']);
			}	
		
	
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
	
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			$qt=$row[3];
			if($q<=$qt)
			{
			
			
			if($q>0 && $q<=999){
			$_SESSION['cart'][$i]['qty']=$q;
				}
			else
			{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
			}
			else
			{
			echo "<h3>The quantity of product is not available!</h3>";
			}
		}
	}
	

?>

<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>

<body>
<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" value="0" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center"><font color="#FFFFFF">Your Shopping Cart</font></h1>
		
    <input type="button" value="Continue Shopping" onClick="window.location='<?php echo $_SESSION['url']?>'" />
	


    </div>
    	<div style="color:#F00"><?PHP  $msg?></div>
    	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
    	<?php
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#FFFFFF" style="font-weight:bold"><td>Serial</td><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#FFFFFF"><td><?php echo $i+1; ?></td><td><?php echo $pname?></td>
                    <td>Rs. <?php echo get_price($pid)?></td>
					
                    <td><input type="text" name="product<?php echo $pid?>" value="<?php echo $q?>" maxlength="3" size="2" /></td>                    
                    <td>Rs. <?php echo get_price($pid)*$q?></td>
                    <td><a href="javascript:del(<?php echo $pid?>)">Remove</a></td></tr>
            <?php					
				}
			?>
			
				<tr><td><b>Order Total: Rs.<?php echo get_order_total()?></b></td><td colspan="5" align="right"><input type="button" value="Clear Cart" onClick="clear_cart()"><input type="button" value="Update Cart" onClick="update_cart()"><input type="button" value="Place Order" onClick="window.location='billing1.php'"></td></tr>
		
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
    </div>
</form>
</body>
<?php include_once('footer.php'); ?>