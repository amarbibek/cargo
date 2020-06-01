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
                <li><a href="view_all_cargos.php">FEEDBACKS</a></li>
            </ul>
        </div>
        <!-- button close -->


       <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-7">
	

	<?php 
		$query="SELECT * FROM `feedback` "; 
		$result=mysql_query($query);
		if($result){
			if(mysql_num_rows($result)>=1){
			echo '
			<table class="table table-condensed">
			<tr>
	
	<th>Name</th>
	<th>Email</th>
	<th>Message</th>
	<th>Action</th>
	
</tr>';	
				while($rows=mysql_fetch_array($result)){
					echo'<tr>';
					
					echo'<td>';
					echo $rows['name'];
					echo'</td>';
						echo'<td>';
					echo $rows['email'];
					echo'</td>';
						echo'<td>';
					echo $rows['message'];
					echo'</td>';
						
						echo'<td>';
					echo '<a href="delete_feedback.php?id=';echo $rows['id'];  echo'">Delete</a>';
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
