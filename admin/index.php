<?php
	$title = 'Dashboard Page';
	$baseUrl = '';
	require_once('layouts/header.php');
?>

<div class="row">
	<div class="col-md-12">
		<h1>Dashboard</h1>
		
		<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" style="height: 500px">
    <div class="carousel-item active" >
      <img src="https://mwc.com.vn/Resources/Slider/2021/01/28/d8c1eba82f25df7b8634.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://mwc.com.vn/Resources/Slider/2021/09/30/img-2521.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="https://mwc.com.vn/Resources/Slider/2021/09/30/img-2520.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!-- banner stop -->

	</div>
</div>

<?php
	require_once('layouts/footer.php');
?>