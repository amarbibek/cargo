<?php 
global $price,$price1,$price2,$volume,$total_price,$length,$width,$height;
if (isset($_POST['submit'])){
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
			echo"Sender Name :";
			echo'</td>';
			echo'<td>';
			echo $sender_name=$_POST['sender_name'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Sender Email :";
			echo'</td>';
			echo'<td>';
			echo $sender_email=$_POST['sender_email'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Sender Contact :";
			echo'</td>';
			echo'<td>';
			echo $sender_contact=$_POST['sender_contact'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Sender Address :";
			echo'</td>';
			echo'<td>';
			echo $sender_address=$_POST['sender_address'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Sender PIN :";
			echo'</td>';
			echo'<td>';
			echo $sender_pin=$_POST['sender_pin'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Sender City :";
			echo'</td>';
			echo'<td>';
			echo $sender_city=$_POST['sender_city'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Sender Country :";
			echo'</td>';
			echo'<td>';
			echo $sender_country=$_POST['sender_country'];
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
			echo $receiver_name=$_POST['receiver_name'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Receiver Email :";
			echo'</td>';
			echo'<td>';
			echo $receiver_email=$_POST['receiver_email'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Receiver Contact :";
			echo'</td>';
			echo'<td>';
			echo $receiver_contact=$_POST['receiver_contact'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Receiver Address :";
			echo'</td>';
			echo'<td>';
			echo $receiver_address=$_POST['receiver_address'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Receiver PIN :";
			echo'</td>';
			echo'<td>';
			echo $receiver_pin=$_POST['receiver_pin'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Receiver City :";
			echo'</td>';
			echo'<td>';
			echo $receiver_city=$_POST['receiver_city'];
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Receiver Country :";
			echo'</td>';
			echo'<td>';
			echo $receiver_country=$_POST['receiver_country'];
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
			echo $weight=$_POST['weight'];
			echo'</td>';
			echo'</tr>';	
$weight=$_POST['weight'];
$length=$_POST['length'];
$width=$_POST['width'];
$height=$_POST['height'];
if($length=="<1"){
	$length=0.5;
}else if($length==">10"){
	$length=15;

}else{
	$length=$length;
}

if($width=="<1"){
	$width=0.5;
}else if($width==">10"){
	$width=15;

}else{
	$width=$width;
}

if($height=="<1"){
	$height=0.5;
}else if($height==">10"){
	$height=15;

}else{
	$height=$height;
}
$quantity=$_POST['quantity'];
$cargo_types=$_POST['cargo_types'];

$query="SELECT * FROM `price` WHERE `source`='$sender_city' AND `destination`='$receiver_city'";
$result=mysql_query($query) or die("query ddnt!");
if($result){
	while ($row=mysql_fetch_array($result)) {
		 $price= $row['price'];
		if($weight<=5){
			$price1=$price;
		}else if($weight<=10){
			$price1=$price*1.11;
		}else if($weight<=25){
			$price1=$price*1.22;
		}else if($weight<=100){
			$price1=$price*1.33;
		}else{
			$price1=$price*1.44;
		}
			echo'<tr>';
			echo'<td>';
			echo"Basic Price :";
			echo'</td>';
			echo'<td>';
			echo $price;
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Weight Price :";
			echo'</td>';
			echo'<td>';
			echo $price1;
			echo'</td>';
			echo'</tr>';
			$volume=$length*$width*$height;
			echo'<tr>';
			echo'<td>';
			echo"Volume :";
			echo'</td>';
			echo'<td>';
			echo $volume;
			echo'</td>';
			echo'</tr>';
		if($volume<=8){
			$price2=$price;
		}else if($volume<=27){
			$price2=$price*1.1;
		}else if($volume<=64){
			$price2=$price*1.15;
		}else if($volume<=125){
			$price2=$price*1.2;
		}else{
			$price2=$price*1.25;
		}
		$total_price=$price+$price1+$price2;
		echo'<tr>';
			echo'<td>';
			echo"Volume Price:";
			echo'</td>';
			echo'<td>';
			echo $price2;
			echo'</td>';
			echo'</tr>';
			echo'<tr>';
			echo'<td>';
			echo"Total Price :";
			echo'</td>';
			echo'<td>';
			echo $total_price;
			echo'</td>';
			echo'</tr>';	

		//echo "Total price:".$total_price=$price+$price1+$price2;

			$MIN_SESSION_ID = 1000000000;
			$MAX_SESSION_ID = 9999999999;

			$randId = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);

		$query="INSERT INTO `cargo` (`tracking_id`,`sender_name`,`sender_email`,`sender_contact`,`sender_address`,`sender_pin`,`sender_city`,`sender_country`,`receiver_name`,`receiver_email`,`receiver_contact`,`receiver_address`,`receiver_pin`,`receiver_city`,`receiver_country`,`weight`,`volume`,`basic_price`,`weight_price`,`volume_price`,`total_price`,`status`) VALUES ('$randId','$sender_name','$sender_email','$sender_contact','$sender_address','$sender_pin','$sender_city','$sender_country','$receiver_name','$receiver_email','$receiver_contact','$receiver_address','$receiver_pin','$receiver_city','$receiver_country','$weight','$volume','$price','$price1','$price2','$total_price','pending')";
		$result=mysql_query($query) or die("didnt wrk");

		if ($result){
			echo "Your order has been requested!";
		}
	}
}
echo'</table>';
}
?> 