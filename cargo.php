<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>
<style type="text/css">
  .pushes{
    margin-left: 30px;
  }
</style>
<div class="min-height">
  
<?php
if(!$_SESSION['login']){
	echo '<div class="alert alert-danger" role="alert"><h4>Please login to have access !!!</h4></div>';
}else{
	?>
  
  <form action="payment.php" method="POST" class="form-horizontal">
  	<div class="container">
    <div class="jumbotron">

  		<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SENDER'S DETAIL</label><br><br>
       <div class="form-group">
       <label for="sender_name" class="col-sm-2 control-label">Sender Name : </label>
       <div class="col-sm-8">
  	   <input type="text" name="sender_name"  class="form-control" id="sender_name"><br>
       </div>
       </div>
       
       <div class="form-group">
       <label for="sender_email" class="col-sm-2 control-label">Sender Email : </label>
       <div class="col-sm-8">
       <input type="email" name="sender_email"  class="form-control" id="sender_email"><br>
       </div>
       </div>

       <div class="form-group">
       <label for="sender_contact" class="col-sm-2 control-label">Sender Contact : </label>
       <div class="col-sm-8">
       <input type="number" name="sender_contact"  class="form-control" id="sender_contact"><br>
       </div>
       </div>
  		
  		<div class="form-group">
       <label for="sender_address" class="col-sm-2 control-label">Sender Address : </label>
       <div class="col-sm-8">
       <input type="text" name="sender_address"  class="form-control" id="sender_address"><br>
       </div>
       </div>
  		
      <div class="form-group">
       <label for="sender_pin" class="col-sm-2 control-label">Sender PIN : </label>
       <div class="col-sm-8">
       <input type="number" name="sender_pin"  class="form-control" id="sender_pin"><br>
       </div>
       </div>

       <div class="form-group">
       <label for="sender_city" class="col-sm-2 control-label">Sender City : </label>
       <div class="col-sm-8">
        <select name="sender_city" class="form-control">
        
        <?php
        $sql="select * from `price`";
        $rs=mysql_query($sql) or die("oops");
        if ($rs) {
          while ($res=mysql_fetch_array($rs)) {
            echo'<option value="';echo $res['source'];echo'">';
            echo $res['source'];
            echo'</option>';
          }
        }
        ?>
          
        </select>
        </div>
       </div>

       <div class="form-group">
       <label for="sender_country" class="col-sm-2 control-label">Sender Country : </label>
       <div class="col-sm-8">
       <input type="text" name="sender_country"  class="form-control" id="sender_country"><br>
       </div>
       </div>
       </div>
  		
  	</div>
  	<div class="container">
    <div class="jumbotron">
  		<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECEIVER'S DETAIL</label><br><br>
    <div class="form-group">
       <label for="receiver_name" class="col-sm-2 control-label">Receier Name : </label>
       <div class="col-sm-8">
       <input type="text" name="receiver_name"  class="form-control" id="receiver_name"><br>
       </div>
       </div>
       
       <div class="form-group">
       <label for="receiver_email" class="col-sm-2 control-label">Receiver Email : </label>
       <div class="col-sm-8">
       <input type="email" name="receiver_email"  class="form-control" id="receiver_email"><br>
       </div>
       </div>

       <div class="form-group">
       <label for="receiver_contact" class="col-sm-2 control-label">Receiver Contact : </label>
       <div class="col-sm-8">
       <input type="number" name="receiver_contact"  class="form-control" id="receiver_contact"><br>
       </div>
       </div>
      
      <div class="form-group">
       <label for="receiver_address" class="col-sm-2 control-label">Receiver Address : </label>
       <div class="col-sm-8">
       <input type="text" name="receiver_address"  class="form-control" id="receiver_address"><br>
       </div>
       </div>
      
      <div class="form-group">
       <label for="receiver_pin" class="col-sm-2 control-label">Receiver PIN : </label>
       <div class="col-sm-8">
       <input type="number" name="receiver_pin"  class="form-control" id="receiver_pin"><br>
       </div>
       </div>

       <div class="form-group">
       <label for="receiver_city" class="col-sm-2 control-label">Receiver City : </label>
       <div class="col-sm-8">
        <select name="receiver_city" class="form-control">
        
        <?php
        $sql="select * from `price`";
        $rs=mysql_query($sql) or die("oops");
        if ($rs) {
          while ($res=mysql_fetch_array($rs)) {
            echo'<option value="';echo $res['destination'];echo'">';
            echo $res['destination'];
            echo'</option>';
          }
        }
        ?>
          
        </select>
        </div>
       </div>

       <div class="form-group">
       <label for="receiver_country" class="col-sm-2 control-label">Receiver Country : </label>
       <div class="col-sm-8">
       <input type="text" name="receiver_country"  class="form-control" id="receiver_country"><br>
       </div>
       </div>
       </div>
  	</div>
  	<div id='cargo_details'>
    <div class="container">
    <div class="jumbotron">
  		<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CARGO DETAILS</label><br><br>
      <div class="form-group">
       <label for="weight" class="col-sm-2 control-label">Weight : </label>
       <div class="col-sm-8">
       <input type="text" name="weight"  class="form-control" id="weight"><br>
       </div>
       </div>
  		
      <div class="form-group">
       <label for="length" class="col-sm-2 control-label">Length : </label>
  		  

        <select name="length" class="col-sm-2">

  			<option value="<1"><1</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  			<option value=">10">>10</option>
  		</select>
      
      </div>
      
  		<div class="form-group">
       <label for="width" class="col-sm-2 control-label">Widht : </label>
  		  <select name="width" class="col-sm-2">
  			<option value="<1"><1</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  			<option value=">10">>10</option>
  		</select>
      </div>
  		
      <div class="form-group">
       <label for="height" class="col-sm-2 control-label">Height : </label>
  		  <select name="height" class="col-sm-2">
  			<option value="<1"><1</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  			<option value=">10">>10</option>
  		</select>
      </div>


  		<div class="form-group">
       <label for="quantity" class="col-sm-2 control-label">Quantity : </label>
       <div class="col-sm-8">
       <input type="number" name="quantity"  class="form-control" id="quantity"><br>
       </div>
       </div>

       <div class="form-group">
       <label for="cargo_type" class="col-sm-2 control-label">Type : </label>
  		
  		<select name="cargo_types" class="col-sm-8">
  			<option value="documents">Documents</option>
  			<option value="clothes">Clothes</option>
  			<option value="electronics">Electronics</option>
  			<option value="mechanicals">Mechanicals</option>
  			<option value="chemicals">Chemicals</option>
  			<option value="liquids">Liquids</option>
  		</select>
        </div>
  	</div>
    
    <div class="form-group">
    <div class="col-md-3 col-md-offset-5">
      <button type="submit" class="btn btn-lg  btn-primary" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proceed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    </div>
    </div>
 

  </div>
  	
  	</form>
 

<?php
}
?>
</div>
<br>
<br>
<?php
include('footer.php');
?>