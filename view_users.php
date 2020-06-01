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
                    <div class="col-lg-12 col-md-7">
	

	<?php 
		$query="SELECT * FROM `users` WHERE `type`='0'"; 
		$result=mysql_query($query);
		if($result){
			if(mysql_num_rows($result)>=1){
			echo '
			<table class="table table-condensed">
			<tr>
	<th>Id</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Contact</th>
	<th>Country</th>
	<th>Email</th>
	<th>Active</th>
	
	
	<th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actions</th>
</tr>';	
				while($rows=mysql_fetch_array($result)){
					echo'<tr>';
					echo'<td>';
					echo $id=$rows['id'];
					echo'</td>';
					echo'<td>';
					echo $rows['fname'];
					echo'</td>';
						echo'<td>';
					echo $rows['lname'];
					echo'</td>';
						echo'<td>';
					echo $rows['contact'];
					echo'</td>';
						echo'<td>';
					echo $rows['country'];
					echo'</td>';
							echo'<td>';
					echo $rows['email'];
					echo'</td>';
						echo'<td>';
					$active= $rows['active'];
					if($active==1){
						$active="Activated";
					}else{
						$active="Not Activated";
					}
					echo $active;
					echo'</td>';
						
						echo'<td>';
					echo '<a href="activate_account.php?id=';echo $rows['id'];  echo'">Activate Account</a>';
					echo'</td>';
						echo'<td>';
						?>
					<a href="remove_user.php?id=<?php echo $id; ?> " onclick="return confirm(' you wish to delete this user ?') ">Remove User</a>
					<?php
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
//include('footer.php');
?>
