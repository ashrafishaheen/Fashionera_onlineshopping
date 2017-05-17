<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
$cat=$_GET['catid'];

include_once('../connect.php');
$res=mysql_query("select * from subcategory where catid='$cat'");
while($a=mysql_fetch_array($res))
{
echo "<option value='$a[0]'>".$a[1]."</option>";
}
?>