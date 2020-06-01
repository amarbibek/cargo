<?php
session_start();
include('header.php');
include('logo.php');
include('connect.php');
?>

<div class="container">
<div class="row">
<div class="col-xs-12" style="background-color: #777; ">
<br>
<label style="margin-left:380px; font-size:18px;">Basic Price (Based on Distance/Location)</label>

<?php
$query="SELECT * FROM `price`";
$result=mysql_query($query);
if($result){
	if(mysql_num_rows($result)>=1){
		echo '<table class="table table-condensed">
		<tr>
	<th>Source</th>
	<th>Destination</th>
	<th>Price</th>
</tr>';	
		while($rows=mysql_fetch_array($result)){
			echo'<tr>';
					echo'<td>';
					echo $rows['source'];
					echo'</td>';
					echo'<td>';
					echo $rows['destination'];
					echo'</td>';
					echo'<td>';
					echo $rows['price'];
					echo'</td>';
			echo'</tr>';		
		}
		echo'</table>';
	}
}

?>	

</div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-xs-5" style="background-color: #9d9d9d; margin-top:30px;">
<br>
	<label style="margin-left:130px;  font-size:18px;">Price on WEIGHT</label>
	<table class="table table-condensed">
		<tr>
		<thead>
			<th>Weight</th>
			<th>Price</th>
		</thead>
		</tr>
		<tr>
			<td>0-5 kg</td>
			<td>No charge</td>

		</tr>
			<tr>
			<td>5.1-10 kg</td>
			<td>Basic price * 1.11</td>

		</tr>
			<tr>
			<td>10.1-25 kg</td>
			<td>Basic price * 1.22</td>

		</tr>
			<tr>
			<td>25.1-100 kg</td>
			<td>Basic price * 1.33</td>

		</tr>
			<tr>
			<td>More than 100 kg</td>
			<td>Basic price * 1.44</td>
		</tr>
	</table>


</div>

<div class="col-xs-5 pull-right" style="background-color: #9d9d9d; margin-top:30px;">
<br>
	<label style="margin-left:130px;  font-size:18px;">Price on VOLUME</label><br>
	<table class="table table-condensed">
		<tr>
		<thead>
			<th>Volume</th>
			<th>Price</th>
		</thead>
		</tr>
		<tr>
			<td>0-8 m^3</td>
			<td>No charge</td>

		</tr>
			<tr>
			<td>8.1-27 m^3</td>
			<td>Basic price * 1.1</td>

		</tr>
			<tr>
			<td>27.1-64 m^3</td>
			<td>Basic price * 1.15</td>

		</tr>
			<tr>
			<td>64.1-125 m^3</td>
			<td>Basic price * 1.2</td>

		</tr>
			<tr>
			<td>More than 125 m^3</td>
			<td>Basic price * 1.25</td>
		</tr>
	</table>
</div>
</div>
</div>
<br>
<br>
 <div class="container">

<div class="panel panel-primary">
 
  <div class="panel-footer"><h4><strong>Total price = Basic Price + Weight Price + Volume Price.</strong></h4></div>
</div>
</div>
<?php
include('footer.php');
?>