<?php 
function is_login(){
if(isset($_SESSION['login'])==false){
	header('location:login_redirect.php');
}
}
function is_admin(){
if(isset($_SESSION['admin'])==false){
	header('location:login_redirect.php');
}
}


function only_alphabets(){
	
	//return preg_match('/[A-Za-z]/', $str)) ;


}





























?>