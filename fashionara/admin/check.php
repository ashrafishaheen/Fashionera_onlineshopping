<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}

$product=$_GET['pcode'];
include('../connect.php');
$res=mysql_query("select * from product where pcode='$product'");
$c=mysql_num_rows($res);
if($c==1)
{
echo "product code already exist";
}
else
{
echo "product code available";
}
?>