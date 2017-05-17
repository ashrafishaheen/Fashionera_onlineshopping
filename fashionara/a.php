<?php
	session_start();
	$pid=$_POST['productid'];
		$id=$_GET['id'];
		if(!isset($_SESSION['user']))
	{
	header("location:login.php");
	}
	else
	{
	include_once('functions.php');
				addtocart($pid,1);
		
		header("location:shoppingcart1.php");
		ob_end_flush();
		exit();
		}
	?>
