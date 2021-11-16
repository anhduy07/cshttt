<?php 
require_once('layouts/header.php');

$sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id order by Product.updated_at desc limit 0,8";
$lastestItems = executeResult($sql);
?>
<!-- banner -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="https://mwc.com.vn/Resources/Slider/2021/09/30/img-2521.jpg" alt="Chicago">
    </div>
    <div class="carousel-item ">
      <img src="https://mwc.com.vn/Resources/Slider/2021/01/28/d8c1eba82f25df7b8634.jpg" alt="Los Angeles">
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
<div class="col-xl-8 mx-auto text-center mb-5" style="margin-top: 25px !important; margin-bottom: 25px !important;">
<h2 class="text-uppercase">Giày dép Trẻ Em, Phụ Nữ và Nam Giới</h2>
</div>
<!-- banner stop -->
<div class="container">
	<h1 style="text-align: center; margin-top: 50px; margin-bottom: 20px;">SẢN PHẨM MỚI NHẤT</h1>
	<div class="row">
	<?php
		foreach($lastestItems as $item) {
			echo '<div class="col-md-3 col-6 product-item">
					<a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; height: 220px;"></a>
					<p style="font-weight: bold;">'.$item['category_name'].'</p>
					<a href="detail.php?id='.$item['id'].'"><p style="font-weight: bold;">'.$item['title'].'</p></a>
					<p style="color: red; font-weight: bold;">'.number_format($item['discount']).' VND</p>
					<p><button class="btn btn-primary" onclick="addCart('.$item['id'].', 1)" style="width: 100%; border-radius: 3px;"><i class="bi bi-cart-plus-fill"></i> Thêm giỏ hàng</button></p>
				</div>';
		}
	?>
	</div>
</div>
<!-- danh muc san pham -->
<?php
$count = 0;
foreach($menuItems as $item) {
	$sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.category_id = ".$item['id']." order by Product.updated_at desc limit 0,4";
	$items = executeResult($sql);
	if($items == null || count($items) < 4) continue;
?>
<div style="background-color: <?=($count++%2 == 0)?'#f7f9fa':''?>;">
<div class="container">
<h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><?=$item['name']?></h1>
<div class="row">
<?php
	foreach($items as $pItem) {
		echo '<div class="col-md-3 col-6 product-item">
				<a href="detail.php?id='.$item['id'].'"><img src="'.$pItem['thumbnail'].'" style="width: 100%; height: 220px;"></a>
				<p style="font-weight: bold;">'.$pItem['category_name'].'</p>
				<a href="detail.php?id='.$item['id'].'"><p style="font-weight: bold;">'.$pItem['title'].'</p></a>
				<p style="color: red; font-weight: bold;">'.number_format($pItem['discount']).' VND</p>
				<p><button class="btn btn-primary" onclick="addCart('.$item['id'].', 1)" style="width: 100%; border-radius: 3px;"><i class="bi bi-cart-plus-fill"></i> Thêm giỏ hàng</button></p>
			</div>';
	}
?>
</div>
</div>
</div>
<?php
}
?>
<?php
require_once('layouts/footer.php');
?>