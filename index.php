<?php
session_start();
include('header.php');
include('logo.php');
?>
<?php
// if($_SESSION['login']){
// 	echo "Hello,"; echo $_SESSION['login']; 
// }
// if($_SESSION['admin']){
// 	echo '<a href="requests.php">Admin</a>';
// }

?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slide01.jpg" width="100%">
      <div class="carousel-caption">
      	<h2>Air Freight</h2>
      </div>
    </div>
    <div class="item">
      <img src="images/slide02.jpg" width="100%">
      <div class="carousel-caption">
      <!-- <h2>Waterway Shipping</h2> -->
      </div>
    </div>
    <div class="item">
      <img src="images/slide04.jpg" width="100%">
      <div class="carousel-caption">
      <h2>Waterway Shipping</h2>
      </div>
    </div>
  </div>



  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--complition of slider-->

<div class="container-fluid" style="margin-top:35px;">
<div class="container-fluid">
	<h2><strong>SERVICES</strong></h2>
</div>
<div id="row">
<div class="col-md-4 ">
<img src="images/service1.jpg">

	<h3><strong>GSSA</strong></h3>

<p>
Global Cargo Management (GCM) is a well established Cargo General Sales and Service Agency. We provide a full range of services for any airline wishing to outsource part or all of its cargo activities in Germany.
</p>

<p>
Whether you appoint Global Cargo Management (GCM) as your first GSSA to complement your existing international sales operation or as a replacement for a previous GSSA, we can start delivering results within the shortest time frame. We look beyond your home market and help you to identify potential clients.
</p>
</div>
<div class="col-md-4 ">
<img src="images/service2.jpg">

	<h3><strong>CARGO</strong></h3>

<p>
Global Cargo Management (GCM) provides specialized air charter solutions for cargo movements worldwide. A variety of cargo aircraft are available on request to make sure your cargo is moving safely and fast.
</p>
<p>
Global Cargo Management (GCM) unparalleled experience in moving cars including load planning and various car loading systems (own equipment).
</p>
</div>
<div class="col-md-4 ">
<img src="images/service3.jpg" >

	<h3><strong>SUPPORT</strong></h3>

<p>
Global Cargo Management (GCM) has established a flight support division to complement the GSSA and air chartering business.
</p>
<p>
We offer a wide range of cost-effective support services to passenger and cargo airlines worldwide regardless of the size or type of your aircraft.
</p>
<p>
Through its long established international network of agents Global Cargo Management (GCM) provides the following services:
</p>
</div>
</div>
</div>
<?php
include('footer.php');
?>