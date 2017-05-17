<?php
session_start();
$user=$_POST['user'];
$msg=$_POST['msg'];
$email=$_POST['email'];
include_once('connect.php');
$res=mysql_query("insert into contactus(username,email,message) values('$user','$email','$msg')");
$c=mysql_affected_rows($con);
if($c>0)
{
header('location:contact.php?val=t');
}
else
{
header('location:contact.php?val=f');
}

?>