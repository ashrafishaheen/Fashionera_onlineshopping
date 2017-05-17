<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}

$cat=$_GET['cat'];
include('../connect.php');
$res=mysql_query("select * from category where maincat='$cat'") or die(mysql_error());
$c=mysql_num_rows($res);
if($c==1)
{
echo "User already exist";
}
else
{
echo "User available";
}
?>
