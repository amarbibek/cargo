<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
is_admin();
?>
<style type="text/css">
	.min-heights{
		height: 1200px;
	}
</style>
 <link rel="stylesheet" href="css/sidebar.css">
 <div class="min-height">
    <div id="wrapper">

        <!-- button start -->
        <button type="button" class="btn btn-default" aria-label="Left Align" id="menu-toggle">
  <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
</button>
		<!-- <a href="#" class="btn btn-success" id="menu-toggle">Admin</a> -->
        <div id="sidebar-wrapper">
		
            <ul class="sidebar-nav">
                <li><a href="requests.php">REQUESTS</a></li>
                <li><a href="add_admin.php">ADD ADMIN</a></li>
                <li><a href="view_users.php">VIEW USERS</a></li>
                <li><a href="view_all_cargos.php">CARGOS</a></li>
                <li><a href="view_feedbacks.php">FEEDBACKS</a></li>
            </ul>
        </div>
        <!-- button close -->


       <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
	

	<?php 
		$query="SELECT * FROM `cargo` "; 
		$result=mysql_query($query);
		if($result){
			if(mysql_num_rows($result)>=1){
			echo '
			<table class="table table-condensed">
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
	<th>Status</th>
	
	<th colspan="2">Actions</th>
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
					echo $rows['status'];
					echo'</td>';
						echo'<td>';
					echo '<a href="see_full_details.php?id=';echo $tracking_id;  echo'">See full details</a>';
					echo'</td>';
						echo'<td>';
					echo '<a href="manage_cargo.php?id=';echo $tracking_id;  echo'">Manage Cargo</a>';
					echo'</td>';
					

					echo'</tr>';


				}
				echo'</table>';
			}
		}else{
			echo "No request found!";
		}
	 ?>
	 </div>
	
</div>
	 </div>
	
</div>
</div> <!-- wrapper close -->


    <!-- Menu toggle script -->
    <script>
        $("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    </script>
 </div> <!-- min height close -->


<?php
// include('footer.php');
?>
