<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<style type="text/css">
	
</style>
<div class="min-height">
<div>
<br>
	<form action="" method="POST" class="form-horizontal">
	<div class="form-group">
       <label for="tracking_id" class="col-sm-3 control-label">Enter your Tracking ID : </label>
       <div class="col-sm-3">
       <input type="text" name="tracking_id"  class="form-control" id="tracking_id"><br>
       </div>
     <!-- </div> -->

    <!--        <div class="form-group">-->
    <div class=" col-sm-3"> 
      <button type="submit" class="btn btn-primary form-control " name="submit">Track</button>
     </div> 
  </div>
		<!-- <label>Enter your Tracking ID : </label>
		<input type="text" name="tracking_id"><br> 
		<input type="submit" name="submit" value="Track">-->

	</form>
</div>
<?php 
	if(isset($_POST['submit'])){
		$tracking_id=$_POST['tracking_id'];
		$query="SELECT * FROM `tracking` WHERE `tracking_id`='$tracking_id'";
		$result=mysql_query($query);
		if($result){
			if(mysql_num_rows($result)>=1){
				echo '<table class="table table-hover">';
				echo '<tr>';
				echo '<th>';
				echo "Tracking ID";
				echo '</th>';
				echo '<th>';
				echo "Location";
				echo '</th>';
				echo '<th>';
				echo "Date";
				echo '</th>';
				echo '<th>';
				echo "Time";
				echo '</th>';
				echo '<th>';
				echo "Status";
				echo '</th>';
				echo '</tr>';
				while ($row=mysql_fetch_array($result)) {
					echo '<tr>';
					echo '<td>';
					echo $row['tracking_id'];
					echo '</td>';
					echo '<td>';
					echo $row['location'];
					echo '</td>';
					echo '<td>';
					echo $row['date'];
					echo '</td>';
					echo '<td>';
					echo $row['time'];
					echo '</td>';
					echo '<td>';
					echo $row['status'];
					echo '</td>';
					echo '</tr>';
				}
				echo '</table>';
			}else{
				echo '<div class="alert alert-danger" role="alert"><h4>Tracking ID not found !!!</h4></div>';
			}
		}
	}
 ?>

<!-- <div>
	<a href="my_orders.php">MY ORDERS</a>
</div> -->
</div>
<?php
include('footer.php');
?>