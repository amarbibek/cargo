<?php error_reporting(0); ?>
<div class="container-fluid">
<div class="row">
	<div class="col-md-1"><img src="images/logo.png" height="100" width="100"></div>
	<div class="col-md-6 " ><p class="company-name"> GLOBAL CARGO</p></div>

<div id="login_register">
	<br>
	<div class="col-md-3 pull-right" type="button" class="btn btn-default">
	<?php
		if ($_SESSION['admin']){
		?>
		<?php
		echo '<a href="requests.php">ADMIN</a>';echo '&nbsp;&nbsp;';
		echo '	<a href="change_password.php">CHANGE PASSWORD</a>' ; echo '&nbsp;&nbsp;';
 		echo '<a href="logout.php">LOGOUT</a>';
 
	}elseif ($_SESSION['login']){
		?>
		<?php
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '	<a href="change_password.php">CHANGE PASSWORD</a>' ; echo '&nbsp;&nbsp;';
 		echo '<a href="logout.php">LOGOUT</a>';
 
	}else{
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	
	echo '<a href="login.php">LOGIN</a>';echo '&nbsp;&nbsp;&nbsp;';
	echo '<a href="register.php">REGISTER</a>';
	}
	?>	
	</div>
</div>
</div>
</div>
<?php include ('menubar.php');
include('functions/login_functions.php');
 ?>