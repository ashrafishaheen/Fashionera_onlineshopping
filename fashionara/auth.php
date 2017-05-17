<?php
session_start();
$u=addslashes($_POST['username']);
$p=md5($_POST['password']);

include('connect.php');

$res=mysql_query("select * from customer where username='$u' and password='$p'") or die(mysql_error());
$n=mysql_num_rows($res);
$row=mysql_fetch_array($res);
$ut=$row[7];
if($n>=1&&$ut==2 )
{
if(!isset($_SESSION['url']))
{
$_SESSION['user']=$u;


header('location:index.php');
}
else
{
$_SESSION['user']=$u;


header('location:'.$_SESSION['url']);

}


}
else
{
header('location:login.php?val=f');
}
?>
