<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
?>
<?php
include('../connect.php');
$id=$_GET['id'];
$name=$_GET['name'];
$path="image/".$name;

unlink($path);


$res=mysql_query("update product set pimage='' where pid=$id");

header('location:pedit.php?id='.$id);
?>