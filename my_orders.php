<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<div class="min-height">
<?php
if(isset($_SESSION['login'])){
 $user_id=$_SESSION['login'];

$query="SELECT * FROM `cargo` WHERE `sender_email`='$user_id'";
$result=mysql_query($query);
if($result){
			if(mysql_num_rows($result)>=1){
			echo '<table class="table table-hover">
			<tr>
	<th>Tracking Id</th>
	<th>Sender Name</th>
	<th>Sender Contact</th>
	<th>Sender City</th>
	<th>Sender Country</th>
	<th>Receiver Name</th>
	<th>Receiver Contact</th>
	<th>Receiver City</th>
	<th>Receiver Country</th>
	<th>Price</th>
	<th>Status</th>
</tr>';	
				while($rows=mysql_fetch_array($result)){
					echo'<tr>';
					echo'<td>';
					echo $tracking_id=$rows['tracking_id'];
					echo'</td>';
					echo'<td>';
					echo $rows['sender_name'];
					echo'</td>';
						echo'<td>';
					echo $rows['sender_contact'];
					echo'</td>';
						echo'<td>';
					echo $rows['sender_city'];
					echo'</td>';
						echo'<td>';
					echo $rows['sender_country'];
					echo'</td>';
							echo'<td>';
					echo $rows['receiver_name'];
					echo'</td>';
						echo'<td>';
					echo $rows['receiver_contact'];
					echo'</td>';
						echo'<td>';
					echo $rows['receiver_city'];
					echo'</td>';
						echo'<td>';
					echo $rows['receiver_country'];
					echo'</td>';
						echo'<td>';
					echo $rows['total_price'];
					echo'</td>';
					echo'<td>';
					echo $rows['status'];
					echo'</td>';
					echo'</tr>';


				}
			}else{
				echo '<div class="alert alert-danger" role="alert"><h4>You have not made any order yet !!!</h4></div>';
			}
		}else{
			echo "No request found!";
		}
	}else{
			echo '<div class="alert alert-danger" role="alert"><h4>Please login to check your orders !!!</h4></div>';
		}
?>
</table>
</div>
<?php

include('footer.php');
?>