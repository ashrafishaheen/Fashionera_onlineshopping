<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}

$id=$_GET['id'];
include('../connect.php');
$res=mysql_query("delete from customer where id=$id") or die(mysql_error());
$c=mysql_affected_rows($con);
if($c>0)
{
header('location:manageuser.php');
}
?>