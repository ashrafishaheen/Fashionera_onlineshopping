<?php
include_once('header.php');
	include("connect.php");
	include_once("functions.php");
	error_reporting(0);
	
	if($_REQUEST['command']=='update'){
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$address=$_REQUEST['address'];
		$phone=$_REQUEST['phone'];
		$amount=$_REQUEST['amount'];
		$result=mysql_query("insert into bcustomer values('','$name','$email','$address','$phone')");
		$customerid=mysql_insert_id();
		$date=date('Y-m-d');
		$result=mysql_query("insert into orders values('','$date',$customerid,'$amount')");
		$orderid=mysql_insert_id();
		
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$size=$_GET['size'];
			$res15=mysql_query("select * from Product_size where Id=$size");
			$row15=mysql_fetch_array($res15);
			$s=$row15[2];
			mysql_query("insert into order_detail values ($orderid,$pid,$q,$price,$s)");
			
		}
		
		$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$qc=mysql_query("select pquantity from product where pid=$pid");
					$r=mysql_fetch_array($qc);
					$pq=$r[0];
					$newq=$pq-$q;

					mysql_query("update product set pquantity=$newq where pid=$pid");
					}
					
		
		die("<span style='color:red;padding-top:80px'><h2><center>Thank You! your order has been placed!...You will recieve it soon......Payment will be collected on delivery.......<a href='index1.php'><font color='red'>CLICK HERE</font></a></span>");
	}
?>
<script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>


<body>
	<?php if(isset($_SESSION['user']))
			{
			$u=$_SESSION['user'];
			$res=mysql_query("select * from customer where username='$u'");
			$row=mysql_fetch_array($res);
			?>
<form name="form1" onSubmit="return validate()">
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center"><font>Billing Info</font></h1>
        <table border="0" cellpadding="2px">
        	<tr><td><font>Order Total:</font></td><td><font><?php echo get_order_total()?></font></td></tr>
		<tr><td></td><td><input type="hidden" name="amount" value="<?php echo get_order_total() ?>" /></td></tr>
			
            <tr><td><font>Your Name:</font></td><td><input type="text" name="name" value="<?php echo $row[1]; ?>" /></td></tr>
            <tr><td><font>Address:</font></td><td><input type="text" name="address" value="<?php echo $row[4];?>"/></td></tr>
            <tr><td><font>Email:</font></td><td><input type="text" name="email" value="<?php echo $row[5]; ?>" /></td></tr>
            <tr><td><font>Phone:</font></td><td><input type="text" name="phone" value="<?php echo $row[3]; ?>" /></td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Place Order" /></td></tr>
        </table>
				
	</div>
</form>
<?php
}
?>
</body>
<?php include_once('footer.php');?>
