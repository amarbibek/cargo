<?php
include('connect.php');
$id=$_GET['id'];
$query="DELETE FROM `feedback` where `id`='$id'";
$result=mysql_query($query) or die("oops");
if($result){
	header("location:view_feedbacks.php");
}