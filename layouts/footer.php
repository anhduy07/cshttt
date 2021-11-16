<footer style="background-color: #43e6d8 !important; ">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>LIÊN HỆ</h4>
				<ul>
					<!-- <li>LIÊN HỆ CÔNG TY CỔ PHẦN ZICZAC GROUP</li> -->
					<li><i class="bi bi-envelope-fill"></i> shoeshopD@gmail.com</li>
					<li><i class="bi bi-telephone-fill"></i> 0123456789</li>
					<li><i class="bi bi-geo-alt-fill"></i> Da Nang, Viet Nam</li>
					
				</ul>
			</div>
			<div class="col-md-4">
				<h4>DANH MỤC</h4>
				<ul  style="color: #131414">
					<li><i class="bi bi-gender-female"></i>Phụ nữ</li>
					<li><i class="bi bi-gender-male"></i>Nam giới</li>
					<li><i class="bi bi-people-fill"></i>Trẻ em</li>
					<?php
	  	// foreach($menuItems as $item) {
	  	// 	echo '<div >
		// 		    <a href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
		// 		</div>';
	  	// }
	  ?>
					
				</ul>
			</div>
			<div class="col-md-4">
				<h4>SẢN PHẨM MỚI NHẤT</h4>
				<ul>
					<li>Giày thể thao vải nữ VV3</li>
					<li>Giày thể thao vải nam CT23</li>
					<li>Giày lưới da nam GH88</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div style="background-color: #d7dadb; width: 100%; text-align: center; padding: 5px;">
		<!-- © 2018 Zic Zac Group . Được thiết kế bời ZicZac. All rights reserved. -->
		<div class="socials-list">
                <a href=""><i class="bi bi-facebook "></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
                <a href=""><i class="bi bi-pinterest"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
            <p class="copyright">Powered by <a href="">Duy dz</a></p>
</footer>

<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;
// var_dump($_SESSION['cart']);
foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num) {
		$.post('api/ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>
<!-- Cart start -->
<span class="cart_icon">
	<span class="cart_count"><?=$count?></span>
	<a href="cart.php"><img src="https://w7.pngwing.com/pngs/61/661/png-transparent-shopping-icon-icon-shopping-shopping-icons-symbol-sign-design-shopping-cart-icon-basket-button-thumbnail.png"></a>
</span>
<!-- Cart stop -->
</body>
</html>