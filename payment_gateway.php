<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
is_login();
?>

<style type="text/css">
	.borderless{
		border:none !important;
		font-size: 20px;
		background-color: #333;
		color:#fff;
	}
	.payment-options{
		width: 100%;
		background-color: #000;
		color:#999;
		padding:10px 10px;
		padding-left: 550px;
	}
	.make-payment{
		width: 100%;
		//background-color: #000;
		color:#999;
		padding:10px 10px;
		padding-left: 500px;
	}
</style>
<?php $total_price=$_SESSION['total_price']; ?>
<?php 
if(isset($_POST['pay'])){
	$entered=$_POST['price'];
	if($entered==$total_price){
		//echo"Contrats! Your Payment Of ".$entered." has been Done!";
		echo '<div class="alert alert-success" role="alert"><h4>Contrats! Your Payment Of Rs. '; ?> <?php echo $entered;  
		 echo ' has been Done!</h4></div>';
	}else{
		// echo "Please Pay Given Amount!!!";
		echo '<div class="alert alert-danger" role="alert"><h4>Please Pay Given Amount !!!</h4></div>';
	}
}

 ?>
<div class="container-fluid">
	<label class="make-payment">Please make payment of : <?php echo $_SESSION['total_price'] ?></label>
</div>
<div class="container">
<br>
<form action="" method="post">

<div class="row">
		 	<div class="form-group">
	       		<label for="price" class="col-sm-3 control-label col-sm-offset-1">Enter The Given Amount : </label>
	       		<div class="col-sm-3">
	  	   			<input type="number" name="price"  class="form-control" id="price">
	       		</div>
    <div class="col-sm-3 col-md-offset-1">
      <button type="submit" class="btn   btn-primary" name="pay">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Make Payment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    </div>

 </div>
  </div> 
</form>
</div>
<br><br>

<div class="container-fluid">
	<label class="payment-options">Other payment Options!!!</label>
</div>
<div class="container">
	<div id="row">
		<div class="col-md-2">
			<img src="images/paypl.jpg" class="img-thumbnail" height="400px" >
		</div>
		<div class="col-md-2 col-md-offset-1">
			<img src="images/paytm.jpg" class="img-thumbnail" height="350px" >
		</div>
		<div class="col-md-2 col-md-offset-1">
			<img src="images/american.png" class="img-thumbnail" height="400px" >
		</div>
		<div class="col-md-2 col-md-offset-1">
			<img src="images/sbi.jpg" class="img-thumbnail" height="400px" >
		</div>
		
	</div>
</div>
<br><br><br>
<?php
include('footer.php');
?>