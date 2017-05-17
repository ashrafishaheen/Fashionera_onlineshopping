<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}

$cat=$_GET['Sub_cat'];
include('../connect.php');
$res=mysql_query("select * from subcategory where ='$product'");
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