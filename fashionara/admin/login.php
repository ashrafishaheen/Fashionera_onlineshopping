<?php
session_start();
$u=addslashes($_POST['username']);
$p=$_POST['password'];

include('../connect.php');

$res=mysql_query("select * from admin where username='$u' and password='$p'")or die(mysql_error());
$n=mysql_num_rows($res);
$row=mysql_fetch_array($res);
if($n>=1 )
{
$_SESSION['username']=$u;
header('location:index1.php');
}
else
{
header('location:index.php?val=f');
}
?>
