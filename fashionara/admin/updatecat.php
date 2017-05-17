<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
$id=$_POST['catid'];
$catname=$_POST['catname'];
include('../connect.php');
/*$con=mysql_connect("localhost","root","") or die(mysq_error());
mysql_select_db('shopping')or die(mysq_error());*/
$res=mysql_query("update category set maincat='$catname' where id=$id") or die(mysql_error());
$c=mysql_affected_rows($con);
if($c>0)
{ 
header('location:managecat.php');
}
else
{
header('location:managecat.php');
}
?>