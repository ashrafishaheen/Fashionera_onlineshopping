<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
$id=$_POST['subcatid'];
$subcatname=$_POST['subcatname'];
$catname=$_POST['catname'];
include('../connect.php');
$res=mysql_query("update subcategory set subname='$subcatname',catid='$catname' where subid=$id") or die(mysql_error());
$c=mysql_affected_rows($con);
if($c>0)
{
header('location:managesubcat.php');
}
?>