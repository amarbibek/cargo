<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
is_login();
//is_admin();
?>
<style type="text/css">
	.borderless{
		border:none !important;
		font-size: 20px;
		background-color: #333;
		color:#fff;

	}
	
	</style>
<div class="container-fluid">
	
	        <button type="button" class="btn btn-default" aria-label="Left Align"  onclick="history.go(-1);">
  <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> <strong >  Back </strong>
</button>

</div><br>
<div>

<?php
$tracking_id=$_GET['id'];
$query="SELECT * FROM `cargo` WHERE `tracking_id`='$tracking_id'";
$result=mysql_query($query);
if($result){
	if(mysql_num_rows($result)>=1){
		
		while($rows=mysql_fetch_array($result)){
				
			echo '<table class="table ">';
			echo'<tr class="borderless">';
			echo'<td class="borderless">';
			echo "Sender Details";
			echo'</td>';
			echo'<td class="borderless">';
			echo "";
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Tracking ID :";
			echo'</td>';
			echo'<td>';
			echo $rows['tracking_id'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Sender Name :";
			echo'</td>';
			echo'<td>';
			echo $rows['sender_name'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Sender Email :";
			echo'</td>';
			echo'<td>';
			echo $rows['sender_email'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Sender Contact :";
			echo'</td>';
			echo'<td>';
			echo $rows['sender_contact'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Sender Address :";
			echo'</td>';
			echo'<td>';
			echo $rows['sender_address'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Sender PIN :";
			echo'</td>';
			echo'<td>';
			echo $rows['sender_pin'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Sender City :";
			echo'</td>';
			echo'<td>';
			echo $rows['sender_city'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Sender Country :";
			echo'</td>';
			echo'<td>';
			echo $rows['sender_country'];
			echo'</td>';
			echo'</tr>';
		
			echo'<tr class="borderless">';
			echo'<td class="borderless">';
			echo "Receiver Details";
			echo'</td>';
			
			echo'<td class="borderless">';
			echo "";
			echo'</td>';
			echo '</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Receiver Name :";
			echo'</td>';
			echo'<td>';
			echo $rows['receiver_name'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Receiver Email :";
			echo'</td>';
			echo'<td>';
			echo $rows['receiver_email'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Receiver Contact :";
			echo'</td>';
			echo'<td>';
			echo $rows['receiver_contact'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Receiver Address :";
			echo'</td>';
			echo'<td>';
			echo $rows['receiver_address'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Receiver PIN :";
			echo'</td>';
			echo'<td>';
			echo $rows['receiver_pin'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Receiver City :";
			echo'</td>';
			echo'<td>';
			echo $rows['receiver_city'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Receiver Country :";
			echo'</td>';
			echo'<td>';
			echo $rows['receiver_country'];
			echo'</td>';
			echo'</tr>';
		
			
			echo'<tr class="borderless">';
			echo'<td class="borderless">';
			echo "Cargo Details";
			echo'</td>';
			
			echo'<td class="borderless">';
			echo "";
			echo'</td>';
			
			echo'</tr>';
		
			echo'<tr>';
			echo'<td>';
			echo"Weight :";
			echo'</td>';
			echo'<td>';
			echo $rows['weight'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Volume :";
			echo'</td>';
			echo'<td>';
			echo $rows['volume'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Basic Price :";
			echo'</td>';
			echo'<td>';
			echo $rows['basic_price'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Weight Price :";
			echo'</td>';
			echo'<td>';
			echo $rows['weight_price'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Volume Price :";
			echo'</td>';
			echo'<td>';
			echo $rows['volume_price'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Total Price :";
			echo'</td>';
			echo'<td>';
			echo $rows['total_price'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Status :";
			echo'</td>';
			echo'<td>';
			echo $rows['status'];
			echo'</td>';
			echo'</tr>';
						echo'<tr>';
			echo'<td>';
			echo"Tracking Id :";
			echo'</td>';
			echo'<td>';
			echo $rows['tracking_id'];
			echo'</td>';
			echo'</tr>';
			echo'</table>';
			
		}
		
	}
}
?>

</div>
<?php
include('footer.php');
?>