<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}

$user=$_GET['user'];
include('../connect.php');
$res=mysql_query("select * from customer where username='$user'");
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
