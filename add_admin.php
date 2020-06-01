<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
include('functions/general.php');
is_admin();

?>
<script type="text/javascript">
	$(document).ready (function(){
            $("#success-alert").hide();
            $("#myWish").ready(function showAlert() {
                $("#success-alert").alert();
                $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
               $("#success-alert").slideUp(500);
                });   
            });
 });
</script>

<?php
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	if($password!=$repassword){

	//$errors[]='<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Password didnot match !!!</div>';
	$errors[]='<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error ! </strong> Password didnot match !!!</div>';
	//echo print_errors($errors);exit;
}
if (ctype_alpha($fname)==false ){
	$errors[]='<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error ! </strong>First Name should  only  contain Alphabets !!!</div>';
}
if (ctype_alpha($lname)==false ){
	$errors[]='<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error ! </strong>Last Name should  only oly contain Alphabets !!!</div>';
}
if (strlen($contact)!=10 ){
	$errors[]='<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error ! </strong>Please enter 10 Digit phone number!!!</div>';
}







//check errors
if (empty($errors)===false) {
	echo print_errors($errors);
}else{
	
	$query="INSERT INTO `users` (`fname`,`lname`,`contact`,`country`,`email`,`password`,`repassword`,`active`,`type`) VALUES ('$fname','$lname','$contact','$country','$email','$password','$repassword','1','1')";
	$result= mysql_query($query) or die("query ddnt work!");
	if ($result){
		//echo "Registered Successfully!";
		?>

		<div class="product-options">
    <a  id="myWish" href="javascript:;"  class="btn btn-mini" > </a>
</div>
<div class="alert alert-success" id="success-alert">
    <strong>Success! </strong>
    New Admin Added!
</div>


		<?php
	}
}

} 
?>
 <link rel="stylesheet" href="css/sidebar.css">
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



<div class="container ">
<div class="jumbotron col-md-offset-1">
	<form action="" method="post">
			<div class="row">
		 		<div class="form-group">
	       			<label for="fname" class="col-sm-8 col-md-offset-4 control-label"> <h4> <strong>ADD NEW ADMIN</strong></h4>  </label>
	       			
	       		</div> 
	       	</div><br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="fname" class="col-sm-3 control-label">First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="fname"   class="form-control" id="fname" required placeholder="Enter your first name...">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="lname" class="col-sm-3 control-label">Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="lname"  class="form-control" id="lname" required placeholder="Enter your last name...">
	       		</div>
	        </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="contact" class="col-sm-3 control-label">Contact &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="number" name="contact"  class="form-control" id="contact" required placeholder="Enter your phone number...">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="country" class="col-sm-3 control-label">Country &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="country"  class="form-control" id="country" required placeholder="Enter your country name...">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="email" class="col-sm-3 control-label">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="email" name="email"  class="form-control" id="email" required placeholder="Enter your email address...">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="password" class="col-sm-3 control-label">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="password" name="password"  class="form-control" id="password" required placeholder="Enter a password...">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="repassword" class="col-sm-3 control-label">Re-type Password &nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="password" name="repassword"  class="form-control" id="repassword" required placeholder="Enter password again...">
	       		</div>
	        </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<div class="col-sm-3 col-sm-offset-4">
	  	   			<button type="submit" class="btn btn-success form-control " name="submit">Submit</button>
	       		</div>
	        </div> 
	    </div>
	    
		<!-- <label>Contact : </label>
		<input type="number" name="contact"><br>
		<label>Country : </label>
		<input type="text" name="country"><br>
		<label>Email : </label>
		<input type="text" name="email"><br>
		<label>Password : </label>
		<input type="Password" name="password"><br>
		<label>Re-Password : </label>
		<input type="Password" name="repassword"><br>
		<input type="submit" name="submit"> -->
	</form>
</div>
</div>
</div> <!-- wrapper closed -->

    <script>
        $("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    </script>
 </div> <!-- min height close -->

<?php
include('footer.php');
?>