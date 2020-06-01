<?php
include('connect.php');
$id=$_GET['id'];
$query="UPDATE `users` SET `active`=1 where `id`='$id'";
$result=mysql_query($query) or die("oops");
if($result){
	header("location:view_users.php");
}