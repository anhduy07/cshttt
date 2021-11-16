<?php
	session_start();
	require_once('utils/utility.php');
	require_once('database/dbhelper.php');

	$sql = "select * from Category";
	$menuItems = executeResult($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Chủ - Shop Giày</title>
	<link rel="shortcut icon" href="https://dichvu24hpro.com/wp-content/uploads/2018/09/1.-Gi%C3%A0y.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$baseUrl?>./assets/css/dashboard.css">
	 <style type="text/css">
		/* .nav li {
			text-transform: uppercase;
			color: #28a745;
			margin-top: 20px;
		}
		.nav li a {
			color: #28a745;
			font-weight: bold;
		} */

		.carousel-inner img {
			height: 500px;
			width: 100%;
			padding: 16px 50px ;
			margin-top: 60px;
		
		}

		.product-item:hover {
			background-color: #e3e4e6;
			cursor: pointer;
			margin-bottom: 10px;
			margin-top: 5px
		}

		footer {
			padding-top: 20px;
		}

		footer ul {
			list-style-type: none;
			padding: 0px;
			margin: 0px;
			padding-top: 10px;
			padding-bottom: 10px;
		}


footer .socials-list {
font-size: 24px;
}

footer .socials-list a {
    color: rgb(0, 0, 0, 0.6);
    text-decoration: none; 
}


footer .socials-list a:hover{
    color: rgb(0, 0, 0, 0.4);
}

footer .copyright a:hover,

footer .copyright {
    margin-top: 10px;
    color: rgb(0, 0, 0, 0.6);
}

footer .copyright a{
    margin-top: 10px;
    color: rgb(0, 0, 0, 0.6);
}


		.cart_icon {
			position: fixed;
			z-index: 999999;
			right: 0px;
			top: 50%;
		}

		.cart_icon img {
			width: 45px;
		}

		.cart_icon .cart_count {
			background-color: red;
			color: white;
			font-size: 16px;
			padding-top: 2px;
			padding-bottom: 2px;
			padding-left: 10px;
			padding-right: 10px;
			font-weight: bold;
			border-radius: 12px;
			position: fixed;
			right: 40px;
		}
	</style> 
<!-- </head>
<body> -->
<!-- Menu START -->
<!-- <div class="container">
	<ul class="nav">
		<li class="nav-item" style="margin-top: 0px !important;">
			<a href="index.php"><img src="https://dichvu24hpro.com/wp-content/uploads/2018/09/1.-Gi%C3%A0y.png" style="height: 80px;"></a>
		</li>
	  <li class="nav-item">
	    <a class="nav-link" href="index.php">Trang Chủ</a>
	  </li> -->
	  <?php
	  	// foreach($menuItems as $item) {
	  	// 	echo '<li class="nav-item">
		// 		    <a class="nav-link" href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
		// 		  </li>';
	  	// }
	  ?>
	  
	  <!-- <li class="nav-item">
	    <a class="nav-link" href="contact.php">Liên Hệ</a>
	  </li>
	</ul> -->

	<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 100; 

 
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

</head>
<body>

<div class="topnav" >
  <a class="active" href="index.php">Trang chủ</a>

  <!-- <a href="#about">About</a> -->
  <?php
	  	foreach($menuItems as $item) {
	  		echo '<div >
				    <a href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
				</div>';
	  	}
	  ?>
  
  <a href="contact.php">Liên hệ</a>
  <div class="search-container" method="get" >
    <form action="./search.php">
      <input type="text" placeholder="Search.." name="name">
      <button type="submit"><i class="bi bi-search"></i></button>
    </form>
  </div>
</div>



</body>
	
</div>
<!-- Menu Stop -->