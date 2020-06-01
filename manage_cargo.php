<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
$tracking_id=$_GET['id'];
?>
<style type="text/css">
	.pull_bck_btn{
		margin-top: -10px;
	}
</style>
<div class="min-height">
<div class="container-fluid">
	
	        <button type="button" class="btn btn-default" aria-label="Left Align"  onclick="history.go(-1);">
  <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> <strong >  Back </strong>
</button>

</div>
<?php 
	if(isset($_POST['update'])){
		$tracking_id=$_GET['id'];
		$status=$_POST['status'];
		$carriers=$_POST['carriers'];
		$location=$_POST['location'];
		$date=$_POST['date'];
		$time= date("h:i:sa");
		$sql="UPDATE `cargo` SET `status`='$status' where `tracking_id`='$tracking_id'";
		mysql_query($sql) or die("status could not update!"); 
		$query="INSERT INTO `tracking` (`tracking_id`,`status`,`carriers`,`location`,`date`,`time`) VALUES('$tracking_id','$status','$carriers','$location','$date','$time')";
		$result=mysql_query($query);
		if($result){
			echo "Status updated successfully!";
		}
	}
 ?>
<div class="container">
<div class="jumbotron">
	<form action="" method="POST">
	<div class="row">
		 	<div class="form-group">
	       		<label for="status" class="col-sm-3 control-label">Change status &nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<select name="status" id="status">
						<option disabled="disabled" selected="selected"></option>
						<option value="pending">Pending</option>
						<option value="processing">Processing</option>
						<option value="on_the_way">On The Way</option>
						<option value="delievered">Delievered</option>
						<option value="cancelled">Cancelled</option>
					</select>
	       		</div>
	       </div> 
	    </div>
		<br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="carriers" class="col-sm-3 control-label">Carriers &nbsp;: </label>
	       		<div class="col-sm-5">
					<select name="carriers" id="carriers">
			<option value="DHL">DHL</option>
			<option value="FedEx">FedEx</option>
			<option value="Blue_dart">Blue Dart</option>
			<option value="Red_post">Red Post</option>
			<option value="Others">Others</option>
		</select>
		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="location" class="col-sm-3 control-label">Location &nbsp;: </label>
	       		<div class="col-sm-5">
		<input type="text" name="location" class="form-control" id="location">
		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="date" class="col-sm-3 control-label">Date &nbsp;: </label>
	       		<div class="col-sm-5">
		<input type="date" name="date">
		</div>
	       </div> 
	    </div>
	    <div class="row">
		 	<div class="form-group">
	       		<div class="col-sm-5">
		 <button type="submit" class="btn btn-primary" name="update">Update</button>
		</div>
	       </div> 
	    </div>
	</form>
</div>
</div>
</div>
<?php
include('footer.php');
?>