<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
?>
<?php
$eid=$_GET['id'];
include('../connect.php');
mysql_query("delete from product where pid=$eid");
$c=mysql_affected_rows($con);
if($c>0)
{
header('location:manageproduct.php?y=1');
}
?>